<?php

session_start();

function checkAccount(...$info): bool
{
    if (count($info) === 3) {
        [$conn, $email, $password] = $info;
        $sql = "SELECT freelance_email, freelance_password FROM freelance_info 
                WHERE freelance_email = '$email' AND freelance_password = '$password'";
    } elseif (count($info) === 2) {
        [$conn, $email] = $info;
        $sql = "SELECT freelance_email FROM freelance_info 
                WHERE freelance_email = '$email'";
    } else {
        echo "Please Fix.";
    }

    $result = $conn->query($sql) or trigger_error($conn->error);
    return $result->num_rows;
}

function checkSession()
{
    if (!isset($_SESSION['user_id'], $_SESSION['user_username'], $_SESSION['user_email'], $_SESSION['user_password'])) {
        session_destroy();
        header("location: login.php");
    }
}

function checkSessionGoToGig()
{
    if (isset($_SESSION['user_id'], $_SESSION['user_username'], $_SESSION['user_email'], $_SESSION['user_password'])) {
        header("location: gigs.php");
    }
}

function infoEncrypt($simple_string)
{
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = "GeeksforGeeks";
    $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);
    return $encryption;
}

function infoDecrypt($encryption)
{
    $ciphering = "AES-128-CTR";
    $options = 0;

    $decryption_iv = '1234567891011121';
    $decryption_key = "GeeksforGeeks";
    $decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
    return $decryption;
}

function getSessionValues()
{
    global $userId, $userFName, $userLName, $userName, $userEmail, $userPassword;
    $userId = $_SESSION['user_id'];
    $userFName = $_SESSION['user_firstname'];
    $userLName = $_SESSION['user_lastname'];
    $userName = $_SESSION['user_username'];
    $userEmail = $_SESSION['user_email'];
    $userPassword = $_SESSION['user_password'];
}

function get_timeago($ptime)
{
    $estimate_time = time() - $ptime;

    if ($estimate_time < 1) {
        return 'less than 1 second ago';
    }

    $condition = array(
        12 * 30 * 24 * 60 * 60 => 'year',
        30 * 24 * 60 * 60 => 'month',
        24 * 60 * 60 => 'day',
        60 * 60 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($condition as $secs => $str) {
        $d = $estimate_time / $secs;

        if ($d >= 1) {
            $r = round($d);
            return 'about ' . $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
        }
    }
}

function add_image($conn, $submitBtn, $chooseImg, $database = "freelance_info")
{
    if (isset($conn, $submitBtn) && $conn) {
        $target_dir = "./assets/img/";
        $filename = htmlspecialchars(basename($chooseImg['name']));
        $target_file = $target_dir . $filename;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $user_id = $_SESSION['user_id'];
        $status = 1;

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $status = 0;
        }

        if ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
            && $imageFileType !== "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $status = 0;
        }

        if ($status === 0) {
            echo "Sorry, your file was not uploaded.";
        } else if (move_uploaded_file($chooseImg["tmp_name"], $target_file)) {
            if ($database === "freelance_info") {
                $sql = "SELECT * FROM freelance_info WHERE freelance_id = ?;";
            } else {
                $sql = "SELECT * FROM freelance_gig WHERE user_id = ?;";
            }
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);

            if ($stmt->execute()) {
                echo "$filename has been uploaded";
                return $target_file;
            }

            echo "The file not uploaded";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        trigger_error("Connection Failed: " . $conn->connect_error);
    }
}

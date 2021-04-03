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

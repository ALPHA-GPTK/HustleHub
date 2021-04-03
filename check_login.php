<?php
session_start();
require_once "dbConnection.inc";

if (isset($_POST["login"], $conn) && $conn) {

    //Check input if empty
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {

        //Check Account return Boolean

        $ckAccount = checkAccount($_POST["email"], sha1($_POST['password']), $conn);

        if ($ckAccount) {
            $user_email = mysqli_real_escape_string($conn, $_POST["email"]);
            $user_password = mysqli_real_escape_string($conn, sha1($_POST["password"]));
            $sql = "SELECT freelance_email FROM freelance_info 
                    WHERE freelance_email = '$user_email' AND freelance_password = '$user_password'";
            $query = $conn->query($sql) or die($conn->error);
            $userCount = count($query->fetch_all());

            if ($userCount === 1) {
                $sql = "SELECT freelance_id, freelance_username, freelance_email, freelance_password FROM freelance_info WHERE freelance_user = '$user_email' AND freelance_password = '$user_password'";
                $result = $conn->query($sql);
                $userResult = $result->fetch_assoc();

                $_SESSION['user_id'] = $userResult['freelance_id'];
                $_SESSION['user_username'] = $userResult['freelance_username'];
                $_SESSION['user_email'] = $userResult['freelance_email'];
                $_SESSION['user_password'] = $userResult['freelance_password'];
                header("Location: gigs.php");
            } else {
                header("Location: login.php?login=fail");
            }
        } else {
            header("location: login.php?account_status=notexist");
        }
    } else {
        header("location: login.php?input_status=blank");
    }
} else {
    trigger_error("Connection failed: " . $conn->connect_error);
}

function checkAccount($email, $password, $conn): bool
{
    $sql = "SELECT freelance_email, freelance_password FROM freelance_info WHERE freelance_email = '$email' AND freelance_password = '$password'";
    $result = $conn->query($sql) or die($conn->error);
    $userCount = count($result->fetch_all());

    return !($userCount === 0 || $userCount === null);
}

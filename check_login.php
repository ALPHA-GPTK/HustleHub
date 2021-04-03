<?php
session_start();
require_once "dbConnection.inc";

if (isset($_POST["login"], $conn) && $conn) {

    //Check input if empty
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {

        //Check Account return Boolean
        $ckAccount = checkAccount($_POST["email"], $_POST['password'], $conn);

        if ($ckAccount) {
            $user_email = $_POST["email"];
            $user_password = $_POST["password"];
            $sql = "SELECT freelance_email FROM freelance_info 
                    WHERE freelance_email = '$user_email' AND freelance_password = '$user_password'";
            $result = $conn->query($sql) or die($conn->error);
            $userCount = $result->num_rows;

            if ($userCount === 1) {
                $userResult = $result->fetch_assoc();

                $_SESSION['user_id'] = $userResult['freelance_id'];
                $_SESSION['user_username'] = $userResult['freelance_username'];
                $_SESSION['user_email'] = $userResult['freelance_email'];
                $_SESSION['user_password'] = $userResult['freelance_password'];

                echo "<script>alert('Login Successfully.')
                window.location.href='mygigs.php';
                </script>";
            } else {
                echo "<script>alert('Username or Password is incorrect.')
                window.location.href='login.php?account_status=fail';
                </script>";
            }
        } else {
            echo "<script>alert('User doesn\'t exists.')
            window.location.href='login.php?account_status=not_exist';
            </script>";
        }
    } else {
        echo "<script>alert('Please fill in the required information.')
        window.location.href='login.php?account_status=blank';
        </script>";
    }
} else {
    trigger_error("Connection failed: " . $conn->connect_error);
}

function checkAccount($email, $password, $conn): bool
{
    $sql = "SELECT freelance_email, freelance_password FROM freelance_info 
            WHERE freelance_email = '$email' AND freelance_password = '$password'";
    $result = $conn->query($sql) or die($conn->error);
    $userCount = count($result->fetch_all());

    return !($userCount === 0 || $userCount === null);
}

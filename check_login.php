<?php
require_once "dbConnection.inc";
require_once "./function.php";

if (isset($_POST["login"], $conn) && $conn) {

    //Check input if empty
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        // POST values
        $user_email = $_POST["email"];
        $shaPass = sha1($_POST['password']);
        $origPass = $_POST['password'];

        $sql = "SELECT freelance_id, freelance_fName, freelance_lName, freelance_username, freelance_email, freelance_password, freelance_email_validation FROM freelance_info 
                WHERE freelance_email = '$user_email'";
        $result = $conn->query($sql) or die($conn->error);
        $userCount = $result->num_rows;
        $userResult = $result->fetch_array();

        if ($userCount === 1 && $userResult["freelance_password"] === $shaPass) {
            if ($userResult['freelance_email_validation'] === '1') {

                [$_SESSION['user_id'], $_SESSION['user_firstname'], $_SESSION['user_lastname'],
                    $_SESSION['user_username'], $_SESSION['user_email'], $_SESSION['user_password'], $code] = $userResult;

                if (isset($_POST['rememberme'])) {
                    setcookie("user_email", infoEncrypt($user_email), time() + 86400);
                    setcookie("user_password", infoEncrypt($origPass), time() + 86400);
                } else {
                    setcookie("user_email", "", time() - 86400);
                    setcookie("user_password", "", time() - 86400);
                }

                echo "<script>alert('Login Successfully.')
                window.location.href='gigs.php';
                </script>";
            } else {
                echo "<script>alert('Verify your account first. Please check your email.');
                window.location.href='index.php?login_status=not-verified';
                </script>";
            }
        } elseif ($userResult["freelance_email"] === $_POST["email"] || $userResult["freelance_password"] === $shaPass) {
            echo "<script>alert('Email or Password is incorrect.')
            window.location.href='login.php?account_status=fail';
            </script>";
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
} elseif (isset($conn) && $conn) {
    echo "<script>alert('Please submit your credentials properly.')
    window.location.href='login.php?account_status=no_submit';
    </script>";
} else {
    trigger_error("Connection failed: " . $conn->connect_error);
}

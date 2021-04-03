<?php
require_once "dbConnection.inc";
require_once "./function.php";

if (isset($_POST["login"], $conn) && $conn) {

    //Check input if empty
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {

        //Check Account return Boolean
        $shaPass = sha1($_POST['password']);
        $origPass = $_POST['password'];
        $ckAccountRows = checkAccount($conn, $_POST["email"], $shaPass);

        if ($ckAccountRows !== 0  && $ckAccountRows !== null) {
            $user_email = $_POST["email"];
            $user_password = sha1($_POST["password"]);
            $sql = "SELECT freelance_id, freelance_fName, freelance_lName, freelance_username, freelance_email, freelance_password FROM freelance_info 
                    WHERE freelance_email = '$user_email' AND freelance_password = '$user_password'";
            $result = $conn->query($sql) or die($conn->error);
            $userCount = $result->num_rows;

            if ($userCount === 1) {
                $userResult = $result->fetch_assoc();

                $_SESSION['user_id'] = $userResult['freelance_id'];
                $_SESSION['user_firstname'] = $userResult['freelance_fName'];
                $_SESSION['user_lastname'] = $userResult['freelance_lName'];
                $_SESSION['user_username'] = $userResult['freelance_username'];
                $_SESSION['user_email'] = $userResult['freelance_email'];
                $_SESSION['user_password'] = $userResult['freelance_password'];

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

<?php

session_start();
$email = $_SESSION['email'];

require_once "dbConnection.inc";

if (isset($_POST['change_password'], $conn) && $conn) {
    if ((!empty($_POST['newpassword'])) && (!empty($_POST['confirm_password']))) {
        if ($_POST['newpassword'] === $_POST['confirm_password']) {
            $password = sha1($_POST['confirm_password']);
            $sql = "UPDATE freelance_info SET freelance_password = '$password' WHERE freelance_email = '$email'";
            $conn->query($sql);

            session_destroy();
            header(("location: login.php"));
        } else {
            header("location: changepass.php?password=incorrect");
        }
    } else {
        header("location: changepass.php?password=blank");
    }
} else {
    trigger_error("Connection failed: " . $conn->connect_error);
}

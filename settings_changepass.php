<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

if (isset($_POST['changePass'])) {
    if (isset($_POST['current-password'], $_POST['new-password'], $_POST['confirm-password'])) {
        $inputCurrentPassword = sha1($_POST['current-password']);
        $inputNewPassword = sha1($_POST['new-password']);
        $inputConfirmPassword = sha1($_POST['confirm-password']);

        if ($inputCurrentPassword === $userPassword) {
            if ($inputNewPassword == $inputConfirmPassword) {
                $sql = "UPDATE freelance_info SET freelance_password = '$inputConfirmPassword' WHERE freelance_id = '$userId'";
                $conn->query($sql);
                session_destroy();
                header("location: login.php?change_status=success");
            } else {
                header("location: settings.php?password_status=pass-not-the-same");
            }
        } else {
            header("location: settings.php?password_status=invalid-current");
        }
    } else {
        header("location: settings.php?password_status=invalid");
    }
}

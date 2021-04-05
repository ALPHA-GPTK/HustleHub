<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

if (isset($_POST['changePass'], $conn)) {
    $data = getDatabase_info($conn, $userId, "freelance_info",  TRUE);

    if (isset($_POST['current-password'], $_POST['new-password'], $_POST['confirm-password'])) {
        $inputCurrentPassword = sha1($_POST['current-password']);
        $inputNewPassword = sha1(mysqli_real_escape_string($conn, $_POST['new-password']));
        $inputConfirmPassword = sha1($_POST['confirm-password']);

        if ($inputCurrentPassword === $data["freelance_password"]) {
            if ($inputNewPassword === $inputConfirmPassword) {
                $sql = "UPDATE freelance_info SET freelance_password = '$inputConfirmPassword' WHERE freelance_id = '$userId'";
                $conn->query($sql);
                session_destroy();
                echo "<script>alert('Password Changed Successfully')
                window.location.href='login.php?change_status=success';
                </script>";
            } else {
                echo "<script>alert('Password and Confirm Password is not the same.')
                window.location.href='settings.php?password_status=pass-not-the-same';
                </script>";
            }
        } else {
            echo "<script>alert('Current Password is not equal to Login Password.')
            window.location.href='settings.php?password_status=invalid-current';
            </script>";
        }
    } else {
        echo "<script>alert('Please fill out all the fields.')
        window.location.href='settings.php?password_status=no-input';
        </script>";
    }
} elseif (isset($conn) && $conn) {
    echo "<script>alert('Please submit your credentials properly.')
    window.location.href='settings.php?password_status=no-submit';
    </script>";
} else {
    trigger_error("Connection failed: " . $conn->connect_error);
}

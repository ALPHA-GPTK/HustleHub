<?php
require_once "dbConnection.inc";
session_start();

if (isset($conn) && $conn) {
    if (isset($_POST["delete"])) {
        $id = $_SESSION["user_id"];
        $username = $_SESSION["user_username"];
        $email = $_SESSION["user_email"];

        $sql = "DELETE FROM freelance_info 
                WHERE freelance_id = '$id' AND freelance_username = '$username' AND freelance_email = '$email'";
        $result = $conn->query($sql) or trigger_error("Connection Failed: " . $conn->error);

        if ($conn->affected_rows === 1) {
            echo "<script>alert('Account Deleted Successfully')
            window.location.href='login.php?account_status=deleted_success';
            </script>";
            session_destroy();
        } elseif ($conn->affected_rows > 1) {
            echo "<script>alert('Too many accounts deleted')
            window.location.href='login.php?account_status=too_many';
            </script>";
            session_destroy();
        } else {
            echo "<script>alert('Account Deletion Failed')
            window.location.href='login.php?account_status=delete_failed';
            </script>";
        }
    } else {
        echo "<script>alert('Delete Button Not Selected')
        window.location.href='settings.php?account_status=not_selected_btn';
        </script>";
    }
} else {
    echo "<script>alert('Connection Failed..')
    window.location.href='settings.php?account_status=conn_failed';
    </script>";
}

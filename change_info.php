<?php
require_once "dbConnection.inc";
session_start();

if (isset($conn) && $conn) {
    $change_FirstName = mysqli_real_escape_string($conn, $_POST["fName"]);
    $change_LastName = mysqli_real_escape_string($conn, $_POST["lName"]);
    $change_UserName = mysqli_real_escape_string($conn, $_POST["username"]);
    $change_Email = mysqli_real_escape_string($conn, $_POST["email"]);
    $change_About = mysqli_real_escape_string($conn, ($_POST["about"]));

    $user_id = $_SESSION['user_id'];

    $sql = "UPDATE freelance_info SET 
                            freelance_fName = ?, 
                            freelance_lName = ?, 
                            freelance_username = ?,  
                            freelance_email = ?,  
                            freelance_about = ?
                            WHERE freelance_id = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $change_FirstName, $change_LastName, $change_UserName, $change_Email, $change_About, $user_id);
    $stmt->execute();

    echo $stmt->affected_rows;
    if ($stmt->affected_rows === 1) {
        echo "<script>alert('Credential Changed Successfully.')
        window.location.href='settings.php?account_status=change_successful';
        </script>";
    } else {
        echo "<script>alert('Credential Change Failed.')
        window.location.href='settings.php?account_status=change_failed';
        </script>";
    }
} else {
    trigger_error("Connection Failed: " . $conn->connect_error);
}
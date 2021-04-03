<?php
session_start();
$email = $_SESSION['email'];

require_once "dbConnection.inc";

if (isset($_POST['code'], $conn)) {
    if (!empty($_POST['code'])) {
        $sql = "SELECT freelance_email, freelance_passwordcode FROM freelance_info WHERE freelance_email = '$email'";
        $result = $conn->query($sql) or die($conn->error);
        $userResult = $result->fetch_assoc();

        if ($userResult['freelance_passwordcode'] === sha1($_POST['code'])) {
            $sql = "UPDATE freelance_info SET freelance_passwordcode = NULL WHERE freelance_email = '$email'";
            $conn->query($sql);
            header("location: changepass.php");
        } else {
            header("location: vericode.php?code=invalid");
        }
    } else {
        header("location: vericode.php?input=blank");
    }
}

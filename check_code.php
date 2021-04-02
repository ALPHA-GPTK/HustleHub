<?php
session_start();
$email = $_SESSION['email'];

require_once "dbConnection.inc";

if (isset($_POST['code'])) {
    if (!empty($_POST['code'])) {
        $sql = "SELECT freelance_email, freelance_passwordcode FROM freelance_info WHERE freelance_email = '$email'";
        $result = $conn->query($sql) or die($conn->error);
        $userResult = $result->fetch_assoc();

        if ($userResult['freelance_passwordcode'] == $_POST['code']) {
            header("location: changepass.php");
        } else {
            header("location: vericode.php?code=invalid");
        }
    } else {
        header("location: vericode.php?input=blank");
    }
}

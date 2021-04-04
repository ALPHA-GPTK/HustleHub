<?php

session_start();
require_once "dbConnection.inc";

if (!(isset($_SESSION['email']))) {
    header("location: login.php");
}

$code = $_GET['code'];
$email = $_SESSION['email'];

$sql = "SELECT freelance_email_code FROM freelance_info WHERE freelance_email = '$email'";
$result = $conn->query($sql);
$userResult = $result->fetch_assoc();

if ($code == $userResult['freelance_email_code']) {
    $sql = "UPDATE freelance_info SET freelance_email_validation = '1' WHERE freelance_email = '$email'";
    $conn->query($sql);
    session_destroy();
    header("location: login.php");
}

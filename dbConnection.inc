<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "freelance_db";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($dbServerName, $dbUsername, $dbPass, $dbName);
$conn->set_charset('utf8mb4');
if ($conn->connect_error) { trigger_error("Connection failure: " . $conn->connect_error); }

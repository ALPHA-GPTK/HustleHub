<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "freelance_db";

$conn = new mysqli($dbServerName, $dbUsername, $dbPass, $dbName);
if ($conn->connect_error) { trigger_error("Connection failure: " . $conn->connect_error); }

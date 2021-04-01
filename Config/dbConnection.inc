<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "freelance_db";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPass, $dbName);
if (!$conn) { die("Connection failure: " . mysqli_connect_error()); }
<?php
require_once "../../Config/dbConnection.inc";

if (isset($conn, $_POST["login"]) && $conn) {
    $user_email = mysqli_real_escape_string($conn, $_POST["email"]);
    $user_password = mysqli_real_escape_string($conn, sha1($_POST["password"]));

    $sql = "SELECT freelance_email FROM freelance_info 
            WHERE freelance_email = '$user_email' AND freelance_password = '$user_password'";
    $query = $conn->query($sql);

    if (mysqli_num_rows($query) > 0) {
        header("Location: ../../public/index.php?login=success");
    } else {
        trigger_error("Login Failed: " . $conn->error);
    }
} else {
    trigger_error("Connection failed: " . $conn->connect_error);
}
<?php
require_once "./dbConnection.inc";
require_once './function.php';

getSessionValues();

if (isset($conn) && $conn) {

    $firstname = $_POST["fName"];
    $lastname = $_POST["lName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $about = $_POST["about"];

    $sql = "SELECT freelance_fName, freelance_lName, freelance_username, freelance_email, freelance_about FROM freelance_info WHERE freelance_id = '$userId'";
    $result = $conn->query($sql);
    $userResult = $result->fetch_assoc();

    $dbFirstname = $userResult['freelance_fName'];
    $dbLastname = $userResult['freelance_lName'];
    $dbUsername = $userResult['freelance_username'];
    $dbEmail = $userResult['freelance_email'];
    $dbAbout = $userResult['freelance_about'];

    if (!($firstname == $dbFirstname && $lastname == $dbLastname && $username == $dbUsername && $email == $dbEmail && $about == $dbAbout)) {
        $change_FirstName = mysqli_real_escape_string($conn, $firstname);
        $change_LastName = mysqli_real_escape_string($conn, $lastname);
        $change_UserName = mysqli_real_escape_string($conn, $username);
        $change_Email = mysqli_real_escape_string($conn, $email);
        $change_About = mysqli_real_escape_string($conn, $about);

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
            window.location.href='settings.php?change_status=change_successful';
            </script>";
        } else {
            echo "<script>alert('Changes not found')
            window.location.href='settings.php?change_status=no-change';
            </script>";
        }
    } else {
        header("location: settings.php?change_status=no-changes");
    }
} else {
    trigger_error("Connection Failed: " . $conn->connect_error);
}

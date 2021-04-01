<?php require_once "../../Config/dbConnection.inc";

if (isset($_POST["signup"])) {
    $fullName = sprintf("%s %s", $_POST["fName"], $_POST["lName"]);
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (isset($conn) & $conn) {
        $query = "INSERT INTO `freelance_db`.freelance_info (freelance_fullname, freelance_username, freelance_email, freelance_password) 
                  VALUES ('$fullName', '$userName', '$email', '$password');";
        $mysqli = mysqli_query($conn, $query);

        if ($mysqli !== false) {
            header("Location: ../login/login.php?signup=success");
        } else {
            echo "<script>alert('Signup Failed')</script>";
            header("Location: ./signup.php?signup=fail");
        }
    } else {
        die("Connection Failed: " . mysqli_error($conn));
    }
}
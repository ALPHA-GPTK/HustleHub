<?php require_once "../../Config/dbConnection.inc";

if (isset($_POST["signup"])) {
    $fullName = sprintf("%s %s", $_POST["fName"], $_POST["lName"]);
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $password = sha1($_POST["password"]);

    if (isset($conn) & $conn) {
        $sql = "INSERT INTO `freelance_db`.freelance_info (freelance_fullname, freelance_username, freelance_email, freelance_password) 
                  VALUES (?, ?, ?, ?);";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $userName, $email, $password);
        $query = mysqli_stmt_execute($stmt);

        if ($query !== false) {
            header("Location: ../login/login.php?signup=success");
        } else {
            echo "<script>alert('Signup Failed')</script>";
            header("Location: ./signup.php?signup=fail");
        }
        $conn->close();
    } else {
        die("Connection Failed: " . $conn->erorr());
    }
}
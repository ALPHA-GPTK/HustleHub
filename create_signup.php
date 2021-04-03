<?php require_once "dbConnection.inc";

if (isset($_POST["signup"], $conn)) {

    //Check input if empty
    if ((!empty($_POST['fName'])) && (!empty($_POST['lName'])) && (!empty($_POST['username'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['confirm_password']))) {
        if ($_POST['password'] === $_POST['confirm_password']) {

            //Check Account return Boolean
            $ckAccount = checkAccount($_POST['email'], $conn);

            if ($ckAccount) {
                $fullName = sprintf("%s %s", $_POST["fName"], $_POST["lName"]);
                $userName = $_POST["username"];
                $email = $_POST["email"];
                $password = sha1($_POST["password"]);

                if ($conn) {
                    $sql = "INSERT INTO `freelance_db`.freelance_info (freelance_fullname, freelance_username, freelance_email, freelance_password) 
                              VALUES (?, ?, ?, ?);";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ssss", $fullName, $userName, $email, $password);
                    $query = mysqli_stmt_execute($stmt);

                    if ($query !== false) {
                        header("Location: login.php?signup=success");
                    } else {
                        echo "<script>alert('Signup Failed')</script>";
                        header("Location: signup.php?signup=fail");
                    }
                    $conn->close();
                } else {
                    die("Connection Failed: " . $conn->connect_error);
                }
            } else {
                header(("location: signup.php?account_status=exists"));
            }
        } else {
            header("location: signup.php?password=incorrect");
        }
    } else {
        header("location: signup.php?input_status=fillup");
    }
}

//Check Account if already exists return boolean
function checkAccount($email, $conn): bool
{
    $sql = "SELECT freelance_email FROM freelance_info WHERE freelance_email = '$email'";
    $result = $conn->query($sql) or die($conn->error);
    $userCount = count($result->fetch_all());

    return !($userCount > 0);
}

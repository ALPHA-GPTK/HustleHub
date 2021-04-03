<?php require_once "dbConnection.inc";

if (isset($_POST["signup"], $conn) && $conn) {

    //Check input if empty
    if ((!empty($_POST['fName'])) && (!empty($_POST['lName'])) && (!empty($_POST['username'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['confirm_password']))) {
        if ($_POST['password'] === $_POST['confirm_password']) {

            //Check Account return Boolean
            $ckAccount = checkAccount($_POST['email'], $conn);

            if ($ckAccount) {
                $fullName = sprintf("%s %s", $_POST["fName"], $_POST["lName"]);
                $userName = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $sql = "INSERT INTO `freelance_db`.freelance_info (freelance_fullname, freelance_username, freelance_email, freelance_password) 
                        VALUES (?, ?, ?, ?);";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "ssss", $fullName, $userName, $email, $password);
                $result = mysqli_stmt_execute($stmt);

                if (mysqli_stmt_affected_rows($stmt) === 1) {
                    echo "<script>alert('Login Successfully')
                    window.location.href='gigs.php';
                    </script>";
                    header("Location: login.php?signup=success");
                } else {
                    echo "<script>alert('Signup Failed')
                    window.location.href='signup.php?signup=fail';
                    </script>";
                }
                $conn->close();
            } else {
                echo "<script>alert('User email exists.. Please Login..')
                window.location.href='login.php?signup=user_exists';
                </script>";
            }
        } else {
            echo "<script>alert('Password and Confirm Password is Not Equal.')
            window.location.href='signup.php?signup=password_not_equal';
            </script>";
        }
    } else {
        echo "<script>alert('Please fill out the required information')
        window.location.href='signup.php?signup=fillup';
        </script>";
    }
} else {
    trigger_error("Connection Failed: " . $conn->connect_error);
}

//Check Account if already exists return boolean
function checkAccount($email, $conn): bool
{
    $sql = "SELECT freelance_email FROM freelance_info WHERE freelance_email = '$email'";
    $result = $conn->query($sql) or die($conn->error);
    $userCount = count($result->fetch_all());

    return !($userCount > 0);
}

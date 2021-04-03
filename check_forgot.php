<?php

session_start();

require_once "dbConnection.inc";
require_once "sendmail.php";

if (isset($_POST['email'], $conn, $mail, $gmailUsername)) {
    if (!empty($_POST['email'])) {
        $ck_Account = checkAccount($_POST['email'], $conn);

        $email = $_POST['email'];
        if ($ck_Account) {
            $bytes = random_bytes(20);
            $randomCode = bin2hex($bytes);
            $shaRandCode = sha1($randomCode);
            $sql = "UPDATE freelance_info SET freelance_passwordcode = '$shaRandCode' WHERE freelance_email = '$email'";
            $conn->query($sql);

            /////////////////////////////////////////////
            $mail->setFrom($gmailUsername, "HustleHub");

            $mail->Subject = "Reset Password - HustleHub";
            $mail->Body = "
                            <h2 style=\"font-weight:700;\">Password Reset Code Request</h2><hr><br/>
                            <h4>This email is to confirm a recent password reset request for your 
                            HustleHub account. To confirm this request and reset your password, please copy the code below.</h4><br/>
                            <h4>Code: $randomCode</h4><br/>
                            <h4>Best Regards, <br/> ALPHA Developers</h4>  ";

            $mail->addAddress($email);

            try {
                if (!$mail->Send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    $_SESSION['email'] = $email;
                    header("location: vericode.php");
                }
            } catch (phpmailerException $e) {
                return $e;
            }
            //////////////////////////////////////////////
        } else {
            header("location: forgot.php?email_status=invalid");
        }
    } else {
        header("location: forgot.php?input_status=blank");
    }
}

function checkAccount($email, $conn): bool
{
    $sql = "SELECT freelance_email FROM freelance_info WHERE freelance_email = '$email'";
    $result = $conn->query($sql) or die($conn->error);
    $userCount = count($result->fetch_all());

    return $userCount === 1;
}

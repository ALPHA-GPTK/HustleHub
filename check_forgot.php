<?php

session_start();

require_once "dbConnection.inc";
require_once "sendmail.php";

if (isset($_POST['email'], $conn, $mail, $gmailUsername)) {
    if (!empty($_POST['email'])) {
        $ck_Account = checkAccount($_POST['email'], $conn);

        $email = $_POST['email'];
        if ($ck_Account) {
            $randomCode = sprintf("%06d", mt_rand(1, 999999));
            $sql = "UPDATE freelance_info SET freelance_passwordcode = '$randomCode' WHERE freelance_email = '$email'";
            $conn->query($sql);

            /////////////////////////////////////////////
            $mail->setFrom($gmailUsername, "HustleHub");

            $mail->Subject = "Change your Password - HustleHub";
            $mail->Body = "<h1>Verification Code</h1><br/>
                            <h3>Please copy this code</h3><br/>
                            <h4>$randomCode</h4>";

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

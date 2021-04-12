<?php
require_once "dbConnection.inc";
require_once "./function.php";
require_once "./sendmail.php";

if (isset($_POST["signup"], $conn) && $conn) {

    //Check input if empty
    if ((!empty($_POST['fName'])) && (!empty($_POST['lName'])) && (!empty($_POST['username'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['confirm_password']))) {
        if ($_POST['password'] === $_POST['confirm_password']) {

            //Check Account return Boolean
            $ckAccount = checkAccount($conn, $_POST['email']);

            if (!($ckAccount > 0)) {
                $firstName = $_POST["fName"];
                $lastName = $_POST["lName"];
                $userName = $_POST["username"];
                $email = $_POST["email"];
                $password = sha1($_POST["password"]);

                //  Get dir without current php file
                $dir = getDirWoLast();

                //Random Alpha-numeric
                $bytes = random_bytes(20);
                $randomCode = bin2hex($bytes);
                $shaRandCode = sha1($randomCode);

                $sql = "INSERT INTO freelance_info (freelance_fName, freelance_lName, freelance_username, freelance_email, freelance_password, freelance_email_code) 
                        VALUES (?, ?, ?, ?, ?, ?);";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $firstName, $lastName, $userName, $email, $password, $shaRandCode);
                $stmt->execute();

                if ($stmt->affected_rows === 1) {
                    // echo "<script>alert('Login Successfully')
                    // window.location.href='gigs.php';
                    // </script>";
                    // header("Location: login.php?signup=success");


                    // $sql = "UPDATE freelance_info SET freelance_email_code = '$shaRandCode' WHERE freelance_email = '$email'";
                    // $conn->query($sql);

                    /////////////////////////////////////////////
                    $mail->setFrom($gmailUsername, "HustleHub");

                    $mail->Subject = "Account Verification - HustleHub";
                    $mail->Body = "
            <body>
            <div marginwidth=\"0\" marginheight=\"0\" style=\"margin:0;padding:0;background-color:#eeeeec;width:100%!important\">
                <center>
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" style=\"margin:0;padding:0;background-color:#F6FAFC;height:100%!important;height:100%!important\">
                        <tbody>
                            <tr>
                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\" style=\"background-color:#364A7C;border-bottom:0;\">
                                        <tbody>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                                                        <tbody>
                                                            <tr>
                                                                <td valign=\"top\" style=\"border-collapse:collapse; color:#ffffff;font-family:Helvetica; font-size:10px; line-height:125%; text-align:left;\">
        
                                                                </td>
                                                                <td width=\"20\" style=\"border-collapse:collapse;\">
                                                                    <br>
                                                                </td>
                                                                <td valign=\"top\" width=\"200\" style=\"border-collapse:collapse;color:#a6a6a6;font-family:Helvetica;font-size:10px;line-height:125%; text-align:left;\">
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                        <tbody>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #D9EAEF;border-top:1px solid #D9EAEF; border-bottom:1px solid #8f0100;\">
                                                        <tbody>
                                                            <tr>
                                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style=\"background-repeat:no-repeat;height:84px;border-collapse:collapse;color:#666;font-family:Helvetica;font-size:20px;font-weight:bold;line-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:left;vertical-align:middle\">
                                                                                    <p style=\"font-size:28px;color:#243152;margin:0;padding:0 0 0 15px\">
                                                                                        Verify your Account
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                    <table border=\"0\" cellpadding=\"40\" cellspacing=\"0\" width=\"100%\">
                                                        <tbody>
                                                            <tr>
                                                                <td align=\"center\" valign=\"top\" style=\"padding-bottom: 20px; border-collapse: collapse; background-color: #F6FAFC; border-top:1px solid #ffffff;\">
                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign=\"top\" style=\"padding-bottom: 20px; border-collapse:collapse; color:#666; font-family:Helvetica; font-size: 14px; line-height:160%; text-align:left;\">
                                                                                    <p>
                                                                                        This email is to verify your HustleHub account.
                                                                                    </p>
                                                                                    <p> <br>
                                                                                        If you did not initiate this request, you can ignore this email.
                                                                                    </p> <br> <br>
                                                                                    Link:
                                                                                    <p style=\"font-weight:bold;\">
                                                                                    <a href='http://localhost$dir/account_verification.php?code=$shaRandCode'>Click here to verify your account</a>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;padding-top:15px;\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-top:1px solid #cccccc;\">
                                                        <tbody>
                                                            <tr>
                                                                <td align=\"center\" valign=\"top\" style=\"padding-bottom:40px; padding-top:15px; border-collapse: collapse; border-top: 1px solid #ffffff;\">
                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width=\"95\" valign=\"top\" style=\"padding-top:15px;padding-bottom:20px;border-collapse:collapse;color:#666;font-family:Helvetica;font-size:14px;line-height:160%;text-align:left\">
                                                                                                    <p>
                                                                                                        <span style=\"border-collapse:collapse;font-family:Helvetica;font-size:11px;line-height:150%;text-align:left\">
                                                                                                            <b> HustleHub </b> <br> A Freelance Website for Everyone
                                                                                                            <br /><br />
                                                                                                            <b> ALPHA Developers </b>
                                                                                                        </span>
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                                <td width=\"40\" style=\"border-collapse:collapse;\">
                                                                                    <br>
                                                                                </td>
                                                                                <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                                                    <p style=\"font-family:Helvetica; font-size:11px;\">
        
                                                                                    </p><br>
                                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"280\" align=\"center\">
                                                                                        <tr>
                                                                                            <p style=\"font-family:Helvetica; font-size:11px; line-height:150%; text-align:right;\">
                                                                                                © 2021 HustleHub. All rights reserved
                                                                                            </p>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </body>";

                    $mail->addAddress($email);

                    try {
                        if (!$mail->Send()) {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                        } else {
                            header("location: login.php?account_status=verify-account");
                        }
                    } catch (phpmailerException $e) {
                        return $e;
                    }
                    //////////////////////////////////////////////


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

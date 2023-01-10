<?php

session_start();

require_once "dbConnection.inc";
require_once "sendmail.php";
require_once "./function.php";

if (isset($_POST['email'], $conn, $mail, $gmailUsername)) {
    if (!empty($_POST['email'])) {
        $ck_Account = checkAccount($conn, $_POST['email']);

        $email = $_POST['email'];
        if ($ck_Account !== 0 && $ck_Account !== NULL) {
            $bytes = random_bytes(20);
            $randomCode = bin2hex($bytes);
            $shaRandCode = sha1($randomCode);
            $sql = "UPDATE freelance_info SET freelance_passwordcode = '$shaRandCode' WHERE freelance_email = '$email'";
            $conn->query($sql);

            $year = date("Y");

            /////////////////////////////////////////////
            $mail->setFrom($gmailUsername, "HustleHub");

            $mail->Subject = "Reset Password - HustleHub";
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
                                                                                        Password Reset Code
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
                                                                                        This email is to confirm a recent password reset request for your HustleHub account.
                                                                                    </p>
                                                                                    <p>
                                                                                        To confirm this request and reset your password, please copy the code below.
                                                                                    </p>
                                                                                    <p> <br>
                                                                                        If you did not initiate this request, you can ignore this email.
                                                                                    </p> <br> <br>
                                                                                    Code:
                                                                                    <p style=\"font-weight:bold;\">
                                                                                        $randomCode
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
                                                                                                © $year HustleHub. All rights reserved
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

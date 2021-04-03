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

            /////////////////////////////////////////////
            $mail->setFrom($gmailUsername, "HustleHub");

            $mail->Subject = "Reset Password - HustleHub";
            $mail->Body = "
            <body>
    <div marginwidth=\"0\" marginheight=\"0\" style=\"margin:0;padding:0;background-color:#eeeeec;width:100%!important\">
        <center>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" style=\"margin:0;padding:0;background-color:#eeeeec;height:100%!important;height:100%!important\">
                <tbody>
                    <tr>
                        <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                            <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\" style=\"background-color:#262626;border-bottom:0;\">
                                <tbody>
                                    <tr>
                                        <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                                                <tbody>
                                                    <tr>
                                                        <td valign=\"top\" style=\"border-collapse:collapse; color:#ffffff;font-family:Helvetica; font-size:10px; line-height:125%; text-align:left;\">
                                                            paragraph here
                                                        </td>
                                                        <td width=\"20\" style=\"border-collapse:collapse;\">
                                                            <br>
                                                        </td>
                                                        <td valign=\"top\" width=\"200\" style=\"border-collapse:collapse;color:#a6a6a6;font-family:Helvetica;font-size:10px;line-height:125%; text-align:left;\">
                                                            paragraph here
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
                                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #bf5e00;border-top:1px solid #dd8d04; border-bottom:1px solid #8f0100;\">
                                                <tbody>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"border-collapse:collapse;\">
                                                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style=\"background-repeat:no-repeat;height:84px;border-collapse:collapse;color:#666;font-family:Helvetica;font-size:20px;font-weight:bold;line-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:left;vertical-align:middle\">
                                                                            <p style=\"font-size:36px;color:#ffffff;margin:0;padding:0 0 0 15px\">
                                                                                Password Reset Request
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
                                                        <td align=\"center\" valign=\"top\" style=\"padding-bottom: 20px; border-collapse: collapse; background-color: #eeeeec; border-top:1px solid #ffffff;\">
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
                                                                            <p>
                                                                                If you did not initiate this request, you can ignore this email.
                                                                            </p>
                                                                            <p>
                                                                                Code: $randomCode
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
                                                                                                    HustleHub - A Freelance Website for Everyone
                                                                                                    <br /><br />
                                                                                                    ALPHA Developers
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
                                                                                Connect with HustleHub
                                                                            </p><br>
                                                                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"280\" align=\"center\">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <a href=\"../www.facebook.com\">
                                                                                                <svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\" style=\"height:50px;width:50px;\">
                                                                                                    <path d=\"m512 256c0-141.4-114.6-256-256-256s-256 114.6-256 256 114.6 256 256 256c1.5 0 3 0 4.5-.1v-199.2h-55v-64.1h55v-47.2c0-54.7 33.4-84.5 82.2-84.5 23.4 0 43.5 1.7 49.3 2.5v57.2h-33.6c-26.5 0-31.7 12.6-31.7 31.1v40.8h63.5l-8.3 64.1h-55.2v189.5c107-30.7 185.3-129.2 185.3-246.1z\" />
                                                                                                </svg></a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href=\"../www.twitter.com\">
                                                                                                <svg height=\"512pt\" viewBox=\"0 0 512 512\" width=\"512pt\" xmlns=\"http://www.w3.org/2000/svg\" style=\"height:50px; width:50px;\">
                                                                                                    <path d=\"m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0\" />
                                                                                                </svg></a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href=\"linkedin.com\">
                                                                                                <svg height=\"512pt\" viewBox=\"0 0 512 512\" width=\"512pt\" xmlns=\"http://www.w3.org/2000/svg\" style=\"height:50px;width:50px;\">
                                                                                                    <path d=\"m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0\" />
                                                                                                </svg>
                                                                                            </a>
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
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>
</body> ";

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

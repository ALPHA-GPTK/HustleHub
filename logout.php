<?php
session_start();
if (isset($_SESSION["user_email"])) {
    session_destroy();
    echo "<script>alert('Logout Successfully.')
    window.location.href='login.php?account_status=logout_successful';
    </script>";
}
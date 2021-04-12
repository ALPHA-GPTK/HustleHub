<?php
session_start();
if (isset($_SESSION["user_email"])) {
    session_destroy();
    header("location: login.php?account_status=logout_successful");
}

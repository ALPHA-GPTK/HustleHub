<?php

session_start();

function checkSession()
{
    if (!isset(($_SESSION['user_id']), ($_SESSION['user_username']), ($_SESSION['user_email']), ($_SESSION['user_password']))) {
        session_destroy();
        header("location: login.php");
    }
}

function checkSessionGoToGig()
{
    if (isset(($_SESSION['user_id']), ($_SESSION['user_username']), ($_SESSION['user_email']), ($_SESSION['user_password']))) {
        header("location: gigs.php");
    }
}

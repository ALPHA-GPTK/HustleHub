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

function infoEncrypt($simple_string)
{
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = "GeeksforGeeks";
    $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);
    return $encryption;
}

function infoDecrypt($encryption)
{
    $ciphering = "AES-128-CTR";
    $options = 0;

    $decryption_iv = '1234567891011121';
    $decryption_key = "GeeksforGeeks";
    $decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
    return $decryption;
}

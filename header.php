<?php

require_once "./function.php";

checkSessionGoToGig();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="./assets/img/favicon.png">

    <title>HustleHub - A Freelance Website for Everyone</title>
</head>

<body class="h-screen">
    <!-- Navigation Bar -->
    <nav class="p-12">
        <div class="max-w-7xl px-2 pb-5 mx-auto w-full">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- HustleHub Logo-->
                    <div>
                        <a href="#" class="flex items-center">
                            <a href="./index.php"><span class="c-darkBlue_100 text-3xl lg:text-4xl xl:text-4xl 2xl:text-4xl f-fredokaone-regular cursor-pointer">HUSTLE</span><span class="c-lightBlue_100 text-3xl lg:text-4xl xl:text-4xl 2xl:text-4xl f-fredokaone-regular cursor-pointer">HUB</span></a>
                        </a>
                    </div>
                </div>

                <!-- Login Signup Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="login.php" class="text-blue-900 text-dark px-6 py-2 rounded-full font-medium" aria-current="page">Log In</a>
                    <a href="signup.php" class="text-blue-900 hover:bg-blue-900 hover:text-white border-2 border-current px-6 py-2 rounded-full font-medium">Sign Up</a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden pt-5">
            <a href="./login.php" class="block py-2 px-4 text-sm hover:bg-blue-50">Login</a>
            <a href="./signup.php" class="block py-2 px-4 text-sm hover:bg-blue-50">Sign Up</a>
        </div>
    </nav>

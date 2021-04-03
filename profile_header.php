<?php

require_once "./function.php";

checkSession();
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
    <link rel="shortcut icon" type="image/png" s href="./assets/img/favicon.png">

    <title>HustleHub - Profile</title>
</head>

<body class="h-screen">
    <nav class="p-12 flex justify-center">
        <div class="max-w-7xl px-2 sm:px-6 lg:px-8 w-full">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="./index.php"><span class="c-darkBlue_100 text-3xl f-fredokaone-regular cursor-pointer">HUSTLE</span><span class="c-lightBlue_100 text-3xl f-fredokaone-regular cursor-pointer">HUB</span></a>
                    </div>

                    <div class="hidden sm:block sm:ml-auto">
                        <div class="flex space-x-4">

                            <a href="gigs.php" class="text-black-900 text-dark px-6 py-2 rounded-full text-sm font-medium" aria-current="page">MyGigs</a>

                            <div class="text-black-900 text-dark px-6 py-2 rounded-full text-sm font-medium" aria-current="page">Hired</div>

                            <div class="inset-y-0 right-10 flex items-center pr-4 pointer-events-none"><img src="assets/img/notification.svg" alt="notification-icon" class="h-4 w-6 hide" id="notification-icon"> </div>

                            <div class="inset-y-0 right-10 flex items-center pr-4 pointer-events-none"><img src="assets/img/message.svg" alt="message-icon" class="h-4 w-6 hide" id="message-icon"> </div>

                            <a href="setting.php" class="inset-y-0 right-10 flex items-center pr-4">
                                <div class=""> <img src="assets/img/settings.svg" alt="settings-icon" class="h-4 w-6 hide" id="settings-icon"></div>
                            </a>

                            <a href="logout.php" class="text-blue-900 hover:bg-blue-900 hover:text-white border-2 border-current px-6 py-2 rounded-full text-sm font-medium">LOG OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="logout.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">LOG OUT</a>
            </div>
        </div>
    </nav>
<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

$firstname = null;
$lastname = null;
$username = null;
$email = null;
$about = null;

if (isset($userId, $userName, $userEmail)) {
}

?>

<!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
<title>HustleHub | Settings</title>
<div class="bg-lightBlue_8">
  <?php require_once "profile_header.php"; ?>
  <div class="md:flex px-36">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- SideBar -->
    <div class="flex-none md:max-w-xs text-black">
      <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 rounded-lg dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
        <div class="px-8 flex flex-row items-center justify-between">
          <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0l 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="sidebar flex-grow md:block w-full mb-44 md:pb-0 md:overflow-y-auto">
          <a class="showSingle block px-10 py-4 text-sm font-semibold cursor-pointer rounded-t-lg c-darkBlue_65 btn-sidebar active" target="1" id="btn-basic">Account</a>
          <a class="showSingle block px-10 py-4 text-sm font-semibold cursor-pointer btn-sidebar c-darkBlue_65" target="2" id="btn-security">Security</a>
          <a class="showSingle block px-10 py-4 text-sm font-semibold cursor-pointer btn-sidebar c-darkBlue_65" target="3" id="btn-deletion">Deletion</a>
        </nav>
      </div>
    </div>

    <div class="flex-1 px-20">
      <!-- Basic Information -->
      <div class="md:grid md:grid-cols-2 duration-500 md:gap-6" id="con-basicinfo">
        <div id="div1" class="targetDiv  mt-5 md:mt-0 md:col-span-2">
          <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
                <div class="flex justify-center">
                  <div class="mt-1 flex items-center">
                    <span class="inline-block h-16 w-16 rounded-full overflow-hidden bg-gray-100">
                      <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                      </svg>
                    </span>
                    <div class="flex flex-col space-y-2">
                      <input type="file" value="Choose File" class="ml-5 bg-blue-save py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      <input type="submit" value="Upload Now" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    </div>
                  </div>
                </div>

                <div class="px-28 flex justify-end">
                  <button type="" id="edit" class="py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-gray-600 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                  </button>
                </div>
                <!-- Input Fields  -->
                <div class="max-w-lg flex flex-wrap mx-auto">
                  <div class="w-full md:w-1/2 pr-2">
                    <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="fName">
                      First name
                    </label>
                    <input value="" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="fName" id="fName" required />
                  </div>
                  <!-- Last Name -->
                  <div class="w-full md:w-1/2 mb-2">
                    <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="lName">Last name</label>
                    <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="lName" id="lName" required />
                  </div>
                  <!-- Other Credentials -->
                  <div class="w-full space-y-2">
                    <!-- Username -->
                    <label for="username" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Username
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="username" id="username" required />
                      </label>
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                      </div>
                    </div>
                    <!-- Email -->
                    <label for="email" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Email
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="email" name="email" id="email" required />
                      </label>
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                          <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                      </div>
                    </div>
                    <div class="w-full">
                      <label for="email" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                        About
                      </label>
                      <div class="mt-1">
                        <textarea id="about" name="about" rows="4" class="w-full shadow-sm text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"> </textarea>
                      </div>
                    </div>

                    <!-- CANCEL AND SAVE BUTTONS -->
                    <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6" id="btnCS">
                      <button type="reset" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-change hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                      </button>
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-save focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Security -->
      <div class="md:grid-cols-2 md:gap-6 duration-500 hidden" id="con-security">
        <div id="div2" class="targetDiv  mt-5 md:mt-0 md:col-span-2">
          <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Security</h3>

                <!-- Input Fields  -->
                <div class="max-w-lg flex flex-wrap mx-auto">
                  <div class="w-full space-y-2">

                    <!-- Current Password -->
                    <label for="current-password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Current Password
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="current-password" id="current-password" required />
                      </label>

                      <!-- svg hide password icon -->
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                        <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="current-password-icon">
                      </div>

                    </div>

                    <!-- New Password -->
                    <label for="new-password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      New Password
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="new-password" id="new-password" required />
                      </label>

                      <!-- svg hide password icon -->
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                        <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="new-password-icon">
                      </div>

                    </div>

                    <!-- Confirm Password -->
                    <label for="current-password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Confirm Password
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="confirm-password" id="confirm-password" required disabled />
                      </label>

                      <!-- svg check password icon -->
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <img src="./assets/img/check-not.svg" alt="check-icon" class="h-6 w-6" id="confirm-password-check">
                      </div>

                    </div>

                    <!-- CANCEL AND SAVE BUTTONS -->
                    <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6">
                      <button type="reset" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-change hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                      </button>
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-save focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Account Deletion -->
      <br>
      <div class="md:grid-cols-2 md:gap-6 duration-500 hidden" id="con-account">
        <div id="div3" class="targetDiv  mt-5 md:mt-0 md:col-span-2">
          <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                <!-- <h3 class="max-w-lg flex flex text-left">Account Deletion</h3> -->

                <!-- DELETE BUTTON -->
                <div class="max-w-full text-left">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">Account Deletion</h3>

                  <div class="px-8 flex justify-end">
                    <button type="delete" class="py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white account-delete-button account-delete-button:hover">
                      <a href="delete_account.php">
                        Delete Account
                      </a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
<?php require_once "footer.php" ?>
<?php

require_once "./function.php";

$email = null;
$password = null;
$rememberme = null;

if ((isset($_COOKIE['user_email'], $_COOKIE['user_password']))) {
  $cookieEmail = $_COOKIE['user_email'];
  $cookiePassword = $_COOKIE['user_password'];
  $email = infoDecrypt($cookieEmail);
  $password = infoDecrypt($cookiePassword);
  $rememberme = "checked";
} else {
  $email = null;
  $password = null;
  $rememberme = null;
}

?>

<!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
<title>HustleHub | Log In</title>
<div class="bg-lightBlue_8 h-screen">
  <?php require_once "header.php" ?>
  <div class="flex justify-center overflow-hidden">
    <div class="container w-full">
      <div class="max-w-md mx-auto my-10">
        <h1 class="text-center my-3 text-3xl text-blue dark:text-gray-200 uppercase font-black">Log In</h1>
        <div class="m-7">
          <form action="check_login.php" method="post">
            <div class="relative mb-6">
              <label for="email" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Email</label>
              <div class="relative text-gray-700">
                <label>
                  <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>" required />
                </label>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                  <img src="./assets/img/mail-out.svg" alt="mail-logo" class="h-6 w-6 hide" id="email-logo">
                </div>
              </div>
            </div>
            <div class="relative mb-6">
              <label for="password" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Password</label>
              <div class="relative text-gray-700">
                <label>
                  <input type="password" class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="password" id="password" value="<?php if (isset($password)) echo $password; ?>" required />
                </label>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 cursor-pointer">
                  <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="password-show">
                </div>
              </div>
              <a href="./forgot.php" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300 flex justify-end mt-5">Forgot password?</a>
            </div>
            <div class="flex justify-center mb-6">
              <label class="flex items-center">
                <input type="checkbox" name="rememberme" class="mr-1 outline-none" <?php if (isset($rememberme)) echo $rememberme; ?>>
                <span class="text-xs f-inter-regular">Remember me</span>
              </label>
            </div>
            <div class="mb-6">
              <input type="submit" value="Log In" name="login" class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black cursor-pointer">
            </div>
            <p class="text-sm text-center text-gray-400">New to HustleHub?
              <a class="text-blue focus:outline-none font-black focus:underline focus:text-indigo-500 dark:focus:border-indigo-800 uppercase" href="signup.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php";

<div class="bg-lightBlue_8 h-screen">
  <?php require_once "header.php" ?>
  <div class="flex justify-center overflow-hidden -mt-5">
    <div class="container w-full">
      <form action="create_signup.php" method="post" oninput='password.setCustomValidity(password.value !== confirm_password.value ? "Password is not the same with the confirm password." : "")'>
        <div class="max-w-lg flex flex-wrap mx-auto md:space-y-4">
          <h1 class="text-3xl my-4 mx-auto text-blue dark:text-gray-200 uppercase font-black">Create Account</h1>
          <!-- First Name -->
          <div class="w-full md:w-1/2">
            <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="fName">First name</label>
            <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="fName" id="fName" required />
          </div>
          <!-- Last Name -->
          <div class="w-full pl-2 md:w-1/2">
            <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="lName">Last name</label>
            <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="lName" id="lName" required />
          </div>
          <!-- Other Credentials -->
          <div class="w-full space-y-2">
            <!-- Username -->
            <label for="username" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Username</label>
            <div class="relative text-gray-700">
              <label>
                <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="username" id="username" required />
              </label>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                <img src="./assets/img/user-out.svg" alt="user-icon" class="h-6 w-6" id="username-icon">
              </div>
            </div>
            <!-- Email -->
            <label for="email" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Email</label>
            <div class="relative text-gray-700">
              <label>
                <input class="w-full h-10 pl-3 pr-12text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="email" name="email" id="email-signup" required />
              </label>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                <img src="./assets/img/mail-out.svg" alt="mail-logo" class="h-6 w-6 hide" id="signup-email-logo">
              </div>
            </div>
            <!-- Password -->
            <label for="password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">password</label>
            <div class="relative text-gray-700">
              <label>
                <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="password" id="password" required />
              </label>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="password-icon">
              </div>
            </div>
            <!-- Confirm Password -->
            <label for="confirm_password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">confirm password</label>
            <div class="relative text-gray-700">
              <label>
                <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="confirm_password" id="confirm_password" required disabled />
              </label>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                <img src="./assets/img/check-not.svg" alt="check-icon" class="h-6 w-6" id="confirm-password-check">
              </div>
            </div>
            <!-- Signup Button -->
            <div class="py-6 space-y-6">
              <input type="submit" name="signup" value="Signup" class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black cursor-pointer" />
              <p class="text-sm text-center text-gray-400">Already on HustleHub?
                <a class="text-blue focus:outline-none font-black focus:underline focus:text-indigo-500 dark:focus:border-indigo-800 uppercase" href="login.php">Log In</a>
              </p>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
<?php require_once "footer.php" ?>
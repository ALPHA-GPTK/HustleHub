<div class="bg-lightBlue_8 h-full">
  <?php require_once "header.php" ?>
  <div class="flex justify-center overflow-hidden pb-32">
    <div class="container w-full pt-12">
      <form action="create_signup.php" method="post" oninput='password.setCustomValidity(password.value !== confirm_password.value ? "Password is not the same with the confirm password." : "")'>
        <div class="max-w-lg flex flex-wrap mx-auto md:space-y-4">
          <h1 class="text-3xl my-4 mx-auto text-blue dark:text-gray-200 uppercase font-black">Create Account</h1>
          <!-- First Name -->
          <div class="w-full md:w-1/2">
            <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="fName">
              First name
            </label>
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
            <!-- Password -->
            <label for="password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
              password
            </label>
            <div class="relative text-gray-700">
              <label>
                <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="password" id="password" required />
              </label>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <!-- Confirm Password -->
            <label for="confirm_password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
              confirm password
            </label>
            <div class="relative text-gray-700">
              <label>
                <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="confirm_password" id="confirm_password" required />
              </label>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <!-- Signup Button -->
            <div class="py-6 space-y-6">
              <button type="submit" name="signup" class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black">
                Sign up
              </button>
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
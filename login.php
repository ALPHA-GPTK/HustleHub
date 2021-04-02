<div class="bg-lightBlue_8 h-screen">
  <?php require_once "header.php" ?>
  <div class="flex justify-center overflow-hidden">
    <div class="container w-full">
      <div class="max-w-md mx-auto my-10">
        <h1 class="text-center my-3 text-3xl text-blue dark:text-gray-200 uppercase font-black">Login</h1>
        <div class="m-7">
          <form action="check_login.php" method="post">
            <div class="relative mb-6">
              <label for="email" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                Email
              </label>
              <div class="relative text-gray-700">
                <label>
                  <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="email" id="email" required />
                </label>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                  <svg class="h-6 w-6 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="relative mb-6">
              <label for="password" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Password</label>
              <div class="relative text-gray-700">
                <label>
                  <input type="password" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="password" id="password" required />
                </label>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                  <svg class="h-6 w-6 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
              <a href="./forgot.php" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300 flex justify-end mt-5">Forgot password?</a>
            </div>
            <div class="flex justify-center mb-6">
              <label>
                <input type="checkbox">
                <span class="dark:text-blue-300 text-xs">Remember me</span>
              </label>
            </div>
            <div class="mb-6">
              <input type="submit" value="Login" name="login" class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black cursor-pointer">
            </div>
            <p class="text-sm text-center text-gray-400">New to HustleHub?
              <a class="text-blue focus:outline-none font-black focus:underline focus:text-indigo-500 dark:focus:border-indigo-800 uppercase" href="signup.php">Sign up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php";

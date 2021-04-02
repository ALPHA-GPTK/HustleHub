<div class="bg-lightBlue_8 h-screen">
    <?php require_once "header.php" ?>
    <div class="flex justify-center overflow-hidden">
        <div class="container w-full">
            <div class="max-w-md mx-auto my-10">
                <h1 class="text-center my-3 text-3xl text-blue dark:text-gray-200 uppercase font-black">Change Password</h1>
                <div class="m-7">
                    <form action="update_password.php" method="post">
                        <div class="relative mb-6">
                            <label for="newpassword" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">New Password</label>
                            <div class="relative text-gray-700">
                                <label>
                                    <input type="password" class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="newpassword" id="newpassword" required />
                                </label>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                                    <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="newpassword-icon">
                                </div>
                            </div>
                        </div>
                        <div class="relative mb-6">
                            <label for="confirm_password" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Confirm Password</label>
                            <div class="relative text-gray-700">
                                <label>
                                    <input type="password" class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="confirm_password" id="confirm_password" required disabled />
                                </label>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                    <img src="./assets/img/check-not.svg" alt="check-icon" class="h-6 w-6" id="confirm-password-check">
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <input type="submit" value="Change" name="change_password" class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black cursor-pointer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php";

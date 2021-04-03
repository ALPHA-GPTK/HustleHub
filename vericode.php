<div class="bg-lightBlue_8 h-full">
    <?php require_once "header.php" ?>
    <div class="flex justify-center overflow-hidden pb-32">
        <div class="container w-full pt-12">
            <div class="max-w-md mx-auto my-10">
                <h1 class="text-center my-3 text-3xl text-blue dark:text-gray-200 uppercase font-black">Code Verification</h1>
                <p class="text-center f-inter-light c-black_100 mb-16">The code will be sent to the registered email.</p>
                <div class="m-7">
                    <form action="check_code.php" method="post">
                        <div class="relative mb-6">
                            <label for="code" class="block mb-2 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Code</label>
                            <div class="relative text-gray-700">
                                <label>
                                    <input class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="code" id="code" required />
                                </label>
                                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                    <img src="./assets/img/code-out.svg" alt="mail-icon" class="h-6 w-6" id="code-icon">
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <input type="submit" value="Send" name="forgot" class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black cursor-pointer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php";

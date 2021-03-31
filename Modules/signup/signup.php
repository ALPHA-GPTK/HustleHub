<?php require_once "../../templates/header.php" ?>
    <div class="flex items-center h-screen bg-blue-50 dark:bg-gray-900 overflow-hidden">
        <div class="container mx-auto">
            <div class="max-w-lg flex flex-wrap mx-auto md:space-y-4">
                <h1 class="text-3xl my-4 mx-auto text-blue dark:text-gray-200 uppercase font-black">Create Account</h1>
                <div class="w-full md:w-1/2">
                    <label class="block mb-1 text-sm text-gray-600" for="formGridCode_name">First name</label>
                    <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                           type="text" id="formGridCode_name"/>
                </div>
                <div class="w-full px-2 md:w-1/2">
                    <label class="block mb-1 text-sm text-gray-600" for="formGridCode_last">Last name</label>
                    <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                           type="text" id="formGridCode_last"/>
                </div>

                <div class="w-full space-y-4">
                    <div class="flex flex-wrap">
                        <div class="w-full">
                            <label class="block mb-1 text-sm text-gray-600" for="formGridCode_card">Username</label>
                            <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                   type="text" id="formGridCode_card"/>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full">
                            <label class="block mb-1 text-sm text-gray-600" for="formGridCode_card">Email</label>
                            <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                   type="text" id="formGridCode_card"/>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full">
                            <label class="block mb-1 text-sm text-gray-600" for="formGridCode_card">Password</label>
                            <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                   type="text" id="formGridCode_card"/>
                        </div>
                    </div>
                    <div class="py-6 space-y-6">
                        <button type="button"
                                class="w-3/5 flex justify-center mx-auto px-3 py-2 text-white bg-indigo-500 rounded-lg focus:bg-indigo-600 focus:outline-none uppercase font-black">
                            Signup
                        </button>
                        <p class="text-sm text-center text-gray-400">Already on HustleHub?
                            <a class="text-blue focus:outline-none font-black focus:underline focus:text-indigo-500 dark:focus:border-indigo-800 uppercase"
                               href="../signup/signup.php">Log In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once "../../templates/footer.php" ?>
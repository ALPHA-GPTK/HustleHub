<?php require_once "header.php"; ?>
<main class="flex mx-auto justify-between items-center w-full mb-28">
    <div class="tagline px-40">
        <h1 class="mb-8 c-black_100 f-inter-bold text-5xl">Hustle your skill for money <br> with <span class="main-title f-fredokaone-regular">Hustle</span><span class="sub-title f-fredokaone-regular">Hub</span></h1>
        <p class="c-black_50">An online freelance services platform for everyone</p>
    </div>

    <div class="photo">
        <img src="assets/img/hero_image.png" alt="Hero-Image" />
    </div>
</main>

<!-- Start of How it Works Section -->
<section class="w-full mx-auto bg-blue-50">
    <div>
        <h1 class="title-header">How it Works</h1>
    </div>

    <div class="text-center features flex justify-evenly items-center ">
        <div class="account">
            <img class="inline-block" src="assets/img/account.svg" alt="">
            <p class="work-title">Account</p>
            <p class="work-desc">Create your Account</p>
        </div>
        <div class="discover">
            <img class="inline-block" src="assets/img/discover.svg" alt="">
            <p class="work-title">Discover</p>
            <p class="work-desc">Search your freelancer</p>
        </div>
        <div class="hire">
            <img class="inline-block" src="assets/img/hire.svg" alt="">
            <p class="work-title">Hire</p>
            <p class="work-desc">Pay the price</p>
        </div>
    </div>
</section>
<!-- End of How it Works Section -->

<!-- Start of Popular Service Section -->
<section class="container mx-auto">
    <div>
        <h1 class="title-header">Popular Services</h1>
    </div>

    <div class="container-services space-y-2 mx-36 text-center">
        <div class="services rounded-full py-3 px-6 inline-block text-white">Web Design</div>
        <div class="services rounded-full py-3 px-6 inline-block text-white">Accounting</div>
        <div class="services rounded-full py-3 px-6 inline-block text-white">Architectural Design</div>
        <div class="services rounded-full py-3 px-6 inline-block text-white">Photo Editing</div>
        <div class="services rounded-full py-3 px-6 inline-block text-white">Construction Services</div>
        <div class="services rounded-full py-3 px-6 inline-block text-white">Graphic Design</div>
        <div class="services rounded-full py-3 px-6 inline-block text-white">Video Editing</div>
    </div>
</section>
<!-- End of Popular Service Section -->

<!-- Start of Top Providers Section -->
<section class="provider mx-auto">
    <div>
        <h1 class="title-header">Top Providers</h1>
    </div>

    <div class="antialiased pl-14 pr-14">
        <div class="flex flex-wrap -mx-4">
            <!-- Card 1 -->
            <div class="mx-auto justify-center transform scale-90 transition duration-500 opacity-50 w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4 rounded-lg hover:scale-100 hover:opacity-100">
                <div class="card block bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <!-- Image -->
                            <div class="h-24 w-24 rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="./assets/img/velasco-pic.jpg" alt="">
                                <div class="absolute"></div>
                            </div>
                            <!-- PRO, Name, Description -->
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-md whitespace-nowrap text-black font-bold leading-normal ">Prince Carl Velasco</span>
                                <span class="text-sm whitespace-nowrap text-gray-600 pb-3">Data Scientist</span>
                                <p class="text-sm text-gray-500 pb-3">
                                    I can't start my day without a coffee cup
                                </p>
                                <!-- Linked Accounts -->
                                <div class="container space-x-8 social-links flex justify-center items-center pb-3">
                                    <img src="assets/img/dribbble-logo.svg" alt="dribbble-logo">
                                    <img src="assets/img/instagram-logo.svg" alt="instagram-logo">
                                    <img src="assets/img/twitter-logo.svg" alt="twitter-logo">
                                    <img src="assets/img/linkedIn-logo.svg" alt="linkedIn-logo">
                                    <img src="assets/img/facebook-logo.svg" alt="facebook-logo">
                                    <img src="assets/img/behance-logo.svg" alt="behance-logo">
                                </div>
                                <!-- No. of Clients, Stars -->
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-700">23</span>
                                        <br>
                                        <span class="client-body"> Client</span>
                                    </span>
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" alt="stars">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="grid grid-cols-2 px-5 pb-5">
                        <div class="col-span-1 w-100 flex flex-col justify-center pr-1">
                            <button class="message-button border h-16 py-2 px-4 rounded-lg">Message</button>
                        </div>
                        <div class="col-span-1 w-100 flex flex-col justify-center pl-1">
                            <button class="hire-button h-16 py-2 px-4 rounded-lg">Hire</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="mx-auto justify-center transform scale-90 transition duration-500 opacity-50 w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4 rounded-lg hover:scale-100 hover:opacity-100">
                <div class="card block bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <!-- Image -->
                            <div class="h-24 w-24 rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <!-- PRO, Name, Description -->
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-md whitespace-nowrap text-black font-bold leading-normal ">Katherine Therese Marie Mariñas</span>
                                <span class="text-sm whitespace-nowrap text-gray-600 pb-3">UI/UX Designer</span>
                                <p class="text-sm text-gray-500 pb-3">
                                    I can't start my day without a coffee cup
                                </p>
                                <!-- Linked Accounts -->
                                <div class="container space-x-8 social-links flex justify-center items-center pb-3">
                                    <img src="assets/img/dribbble-logo.svg" alt="dribbble-logo">
                                    <img src="assets/img/instagram-logo.svg" alt="instagram-logo">
                                    <img src="assets/img/twitter-logo.svg" alt="twitter-logo">
                                    <img src="assets/img/linkedIn-logo.svg" alt="linkedIn-logo">
                                    <img src="assets/img/facebook-logo.svg" alt="facebook-logo">
                                    <img src="assets/img/behance-logo.svg" alt="behance-logo">
                                </div>
                                <!-- No. of Clients, Stars -->
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-700">23</span>
                                        <br>
                                        <span class="client-body"> Client</span>
                                    </span>
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" alt="stars">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="grid grid-cols-2 px-5 pb-5">
                        <div class="col-span-1 w-100 flex flex-col justify-center pr-1">
                            <button class="message-button border h-16 py-2 px-4 rounded-lg">Message</button>
                        </div>
                        <div class="col-span-1 w-100 flex flex-col justify-center pl-1">
                            <button class="hire-button h-16 py-2 px-4 rounded-lg">Hire</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="mx-auto justify-center transform scale-90 transition duration-500 opacity-50 w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4 rounded-lg hover:scale-100 hover:opacity-100">
                <div class="card block bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <!-- Image -->
                            <div class="h-24 w-24 rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <!-- PRO, Name, Description -->
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-md whitespace-nowrap text-black font-bold leading-normal ">Tricia Dorine Relox</span>
                                <span class="text-sm whitespace-nowrap text-gray-600 pb-3">Technopreneur</span>
                                <p class="text-sm text-gray-500 pb-3">
                                    I can't start my day without a coffee cup
                                </p>
                                <!-- Linked Accounts -->
                                <div class="container space-x-8 social-links flex justify-center items-center pb-3">
                                    <img src="assets/img/dribbble-logo.svg" alt="dribbble-logo">
                                    <img src="assets/img/instagram-logo.svg" alt="instagram-logo">
                                    <img src="assets/img/twitter-logo.svg" alt="twitter-logo">
                                    <img src="assets/img/linkedIn-logo.svg" alt="linkedIn-logo">
                                    <img src="assets/img/facebook-logo.svg" alt="facebook-logo">
                                    <img src="assets/img/behance-logo.svg" alt="behance-logo">
                                </div>
                                <!-- No. of Clients, Stars -->
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-700">23</span>
                                        <br>
                                        <span class="client-body"> Client</span>
                                    </span>
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" alt="stars">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="grid grid-cols-2 px-5 pb-5">
                        <div class="col-span-1 w-100 flex flex-col justify-center pr-1">
                            <button class="message-button border h-16 py-2 px-4 rounded-lg">Message</button>
                        </div>
                        <div class="col-span-1 w-100 flex flex-col justify-center pl-1">
                            <button class="hire-button h-16 py-2 px-4 rounded-lg">Hire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Top Providers Section -->

<!-- Start of Companies Section -->
<section class="container w-full mx-auto">
    <div class="company space-x-16 flex py-36 justify-center items-center">
        <a href="https://www.manulife.com.ph/"> <img src="assets/img/manulife.svg" alt="manulife"> </a>
        <img src="assets/img/fast-company.svg" alt="fast-company">
        <img src="assets/img/hunter.svg" alt="hunter">
        <img src="assets/img/citi-link.svg" alt="citi-link">
    </div>

    <!-- CTA -->
    <div class="cta rounded-3xl max-w-7xl mx-auto py-12 sm:px-6 lg:py-16 lg:px-12 lg:flex lg:items-center lg:justify-between">
        <div class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
            <h2 class="block text-white mb-6">Join our Freelancing Team</h2>
            <div class="flex justify-center items-center pt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-lg px-5 py-3 border border-transparent shadow join-now c-black_100 f-inter-black text-lg">
                    Join Now
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End of Companies Section -->

<!-- Start of Footer -->
<footer class="pb-32 pt-24">
    <div class="xl:px-40 pb-14 lg:px-20 md:px-10 sm:px-5 px-10">
        <div class="w-full pt-12 flex flex-col sm:flex-row space-y-4 justify-between">
            <div class="flex flex-col space-y-4">
                <a href="./index.php"><span class="c-darkBlue_100 text-5xl f-fredokaone-regular">HUSTLE</span><span class="c-lightBlue_100 text-5xl f-fredokaone-regular">HUB</span></a>
                <div class="text-center pt-2">
                    <p class="text-xl pb-4 c-black_100">(02) 8281-88-88</p>
                    <p class="text-base c_gray">hustlehub@gmail.com</p>
                </div>
            </div>
            <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                <a class="font-semibold pb-2 c-black_100">About Us</a>
                <a class="cursor-pointer c-gray_100">Privacy Policy</a>
                <a class="cursor-pointer c-gray_100">Terms of Service</a>
                <a class="cursor-pointer c-gray_100">Intellectual Property Claims</a>
            </div>
            <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                <a class="font-semibold pb-2 c-black_100">Support</a>
                <a class="cursor-pointer c-gray_100">Help & Support</a>
                <a class="cursor-pointer c-gray_100">Trust & Safety</a>
                <a class="cursor-pointer c-gray_100">Community Standards</a>
            </div>
            <div class="w-full sm:w-1/5 flex flex-col">
                <form>
                    <label class="space-y-4">
                        <p class="font-semibold c-black_100">Subscribe</p>
                        <input type="text" class="rounded-l-lg p-3 placeholder-gray-700 focus:outline-none border-t border-b border-l w-3/4 -mr-1 bg-white border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" placeholder="Get product updates" />
                    </label>
                    <button class="rounded-r-lg font-bold p-3 px-4 uppercase input-blue focus:outline-none shadow">
                        <input type="image" class="focus:outline-none align-middle" src="assets/img/arrows.png" alt="">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container flex mx-auto">
        <div class="pt-12 border-t-2 border-gray-300 w-full flex flex-col sm:flex-row">
            <div class="space-x-2 sm:w-1/5 flex flex-row">
                <i class="cursor-pointer"><img src="assets/img/linkedin-footer.svg" alt="linkedin-footer"></i>
                <i class="cursor-pointer"><img src="assets/img/facebook-footer.svg" alt="facebook-footer"></i>
                <i class="cursor-pointer"><img src="assets/img/twitter-footer.svg" alt="twitter-footer"></i>
            </div>
            <div class="attribution inline-flex justify-center text-center mx-auto flex-col sm:w-1/5">
                <p class="text-base c-black_100 f-inter-regular">Developed by Alpha Developers</p>
            </div>
            <div class="attribution text-xs justify-center items-end flex sm:w-1/5 flex-col">
                <p class="c-black_100 text-base f-inter-regular"> &copy; 2021 HustleHub. All rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->
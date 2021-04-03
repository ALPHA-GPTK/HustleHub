<?php require_once "header.php"; ?>
<main class="flex mx-auto justify-between items-center w-full mb-28">
    <div class="tagline px-10 2xl:px-40">
        <div class="mb-8 c-black_100 f-inter-bold text-4xl xl:text-5xl 2xl:text-5xl">Hustle your skill for money <br> with <span class="main-title f-fredokaone-regular">Hustle</span><span class="sub-title f-fredokaone-regular">Hub</span></div>
        <div class="c-black_50 text-lg 2xl:text-2xl">An online freelance services platform for everyone</div>
    </div>

    <!-- FIX THIS FOR MOBILE image should not be visible-->
    <div class="photo">
        <img src="assets/img/hero_image.png" alt="Hero-Image" />
    </div>
</main>

<!-- Start of How it Works Section -->
<section class="w-full mx-auto bg-blue-50 -mb-10">
    <div>
        <div class="text-4xl pt-20 py-10 mb-12 text-center md:text-5xl md:mb-12 md:pt-20 lg:text-5xl lg:mb-14 lg:pt-20 xl:text-5xl xl:mb-14 2xl:text-5xl 2xl:mb-14 font-black">How it Works</div>
    </div>

    <div class="features flex flex-wrap justify-evenly items-center text-center -mb-5">
        <div class="flex justify-center align-center">
            <div class="p-4">
                <div class="account flex flex-row">
                    <div class="flex-1">
                        <img class="inline-block w-full lg:w-2/3 xl:w-2/3 2xl:w-2/3" src="assets/img/account.svg" alt="Account" style="width: 140px;">
                        <p class="font-black text-xl pt-2 leading-8 mt-3 md:text-2xl md:mt-5 lg:mt-7 xl:mt-7 xl:text-2xl 2xl:mt-8 2xl:text-2xl">Account</p>
                        <p class="text-lg text-gray-400 pt-2 xl:leading-7 xl:text-xl">Create your Account</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="account flex flex-row">
                <div class="flex-1">
                    <img class="inline-block w-full lg:w-2/3 xl:w-2/3 2xl:w-2/3" src="assets/img/discover.svg" alt="Discover" style="width: 140px;">
                    <p class="font-black text-xl pt-2 leading-8 mt-3 md:text-2xl md:mt-5 lg:mt-7 xl:mt-7 xl:text-2xl 2xl:mt-8 2xl:text-2xl">Discover</p>
                    <p class="text-lg text-gray-400 pt-2 xl:leading-7 xl:text-xl">Search your freelancer</p>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="account flex flex-row">
                <div class="flex-1">
                    <img class="inline-block w-full md:w-full lg:w-full xl:w-full 2xl:w-full" src="assets/img/hire.svg" alt="Hire" style="width: 140px;">
                    <p class="font-black text-xl pt-2 leading-8 mt-3 md:text-2xl md:mt-5 lg:mt-7 xl:mt-7 xl:text-2xl 2xl:mt-8 2xl:text-2xl">Hire</p>
                    <p class="text-lg text-gray-400 pt-2 xl:leading-7 xl:text-xl">Pay the price</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of How it Works Section -->

<!-- Start of Popular Service Section -->
<section class="container mx-auto mb-14">
    <div>
        <div class="text-4xl pt-20 mt-10 text-center md:text-5xl md:mb-12 md:pt-20 lg:text-5xl lg:pt-20 xl:text-5xl 2xl:text-5xl font-black mb-12">Popular Services</div>
    </div>

    <div class="container-services space-y-2 mx-36 text-center -mb-16">
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
        <div div class="text-4xl pt-20 text-center md:text-5xl md:mb-12 md:pt-20 lg:text-5xl lg:pt-20 xl:text-5xl 2xl:text-5xl font-black mb-12">Top Providers</div>
    </div>

    <div class="antialiased pl-14 pr-14">
        <div class="flex flex-wrap -mx-4">
            <!-- Card 1 -->
            <div class="mx-auto justify-center transform scale-90 transition duration-500 opacity-50 w-full sm:w-2/3 md:w-1/2 lg:w-1/2 xl:w-1/3 p-4 rounded-lg hover:scale-100 hover:opacity-100">
                <div class="card block bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <!-- Image -->
                            <div class="relative flex items-end justify-end absolute -top-16 flex row-start-1 row-end-3">
                                <img class="inline object-cover h-24 w-24 md rounded-full" src="./assets/img/velasco-pic.jpg" alt="Prince Velasco">
                                <div class="absolute"></div>
                            </div>
                            <!-- PRO, Name, Description -->
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-lg whitespace-nowrap text-black font-bold leading-normal">Prince Carl Velasco</span>
                                <span class="text-base whitespace-nowrap text-gray-600 pb-3">Data Scientist</span>
                                <p class="text-sm text-gray-500 pb-6">
                                    I can't start my day without a coffee cup
                                </p>
                                <!-- Linked Accounts -->
                                <div class="container space-x-8 social-links flex justify-center items-center pb-6">
                                    <img src="assets/img/dribbble-logo.svg" alt="dribbble-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/instagram-logo.svg" alt="instagram-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/twitter-logo.svg" alt="twitter-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/linkedIn-logo.svg" alt="linkedIn-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/facebook-logo.svg" alt="facebook-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/behance-logo.svg" alt="behance-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                </div>
                                <!-- No. of Clients, Stars -->
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-700">23</span>
                                        <br>
                                        <span class="client-body">Client</span>
                                    </span>
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" width="200" alt="stars">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="grid grid-cols-2 px-5 pb-5 -mt-3">
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
            <div class="mx-auto justify-center transform scale-90 transition duration-500 opacity-50 w-full sm:w-2/3 md:w-1/2 lg:w-1/2 xl:w-1/3 p-4 rounded-lg hover:scale-100 hover:opacity-100">
                <div class="card block bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <!-- Image -->
                            <div class="relative flex items-end justify-end absolute -top-16 flex row-start-1 row-end-3">
                                <img class="inline object-cover h-24 w-24 md rounded-full" src="./assets/img/relox-pic.jpg" alt="Tricia Relox">
                                <div class="absolute"></div>
                            </div>
                            <!-- PRO, Name, Description -->
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-lg whitespace-nowrap text-black font-bold leading-normal">Tricia Dorine Relox</span>
                                <span class="text-base whitespace-nowrap text-gray-600 pb-3">Technopreneur</span>
                                <p class="text-sm text-gray-500 pb-6">
                                    I can't start my day without a coffee cup
                                </p>
                                <!-- Linked Accounts -->
                                <div class="container space-x-8 social-links flex justify-center items-center pb-6">
                                    <img src="assets/img/dribbble-logo.svg" alt="dribbble-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/instagram-logo.svg" alt="instagram-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/twitter-logo.svg" alt="twitter-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/linkedIn-logo.svg" alt="linkedIn-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/facebook-logo.svg" alt="facebook-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/behance-logo.svg" alt="behance-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                </div>
                                <!-- No. of Clients, Stars -->
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-700">23</span>
                                        <br>
                                        <span class="client-body">Client</span>
                                    </span>
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" width="200" alt="stars">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="grid grid-cols-2 px-5 pb-5 -mt-3">
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
            <div class="mx-auto justify-center transform scale-90 transition duration-500 opacity-50 w-full sm:w-2/3 md:w-1/2 lg:w-1/2 xl:w-1/3 p-4 rounded-lg hover:scale-100 hover:opacity-100">
                <div class="card block bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <!-- Image -->
                            <div class="relative flex items-end justify-end absolute -top-16 flex row-start-1 row-end-3">
                                <img class="inline object-cover h-24 w-24 md rounded-full" src="./assets/img/marinas-pic.jpg" alt="Katherine Mariñas">
                                <div class="absolute"></div>
                            </div>
                            <!-- PRO, Name, Description -->
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-lg whitespace-nowrap text-black font-bold leading-normal">Katherine Therese Marie Mariñas</span>
                                <span class="text-base whitespace-nowrap text-gray-600 pb-3">UI/UX Designer</span>
                                <p class="text-sm text-gray-500 pb-6">
                                    I can't start my day without a coffee cup
                                </p>
                                <!-- Linked Accounts -->
                                <div class="container space-x-8 social-links flex justify-center items-center pb-6">
                                    <img src="assets/img/dribbble-logo.svg" alt="dribbble-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/instagram-logo.svg" alt="instagram-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/twitter-logo.svg" alt="twitter-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/linkedIn-logo.svg" alt="linkedIn-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/facebook-logo.svg" alt="facebook-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                    <img src="assets/img/behance-logo.svg" alt="behance-logo" class="transform duration-300 opacity-60 hover:opacity-100">
                                </div>
                                <!-- No. of Clients, Stars -->
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-700">23</span>
                                        <br>
                                        <span class="client-body">Client</span>
                                    </span>
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" width="200" alt="stars">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="grid grid-cols-2 px-5 pb-5 -mt-3">
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
    <div class="company space-x-16 flex pt-24 justify-center items-center">
        <div class="flex flex-wrap justify-center items-center">
            <div class="w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 p-3 flex justify-center align-center">
                <div class="p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-1">
                            <img src="assets/img/manulife.svg" alt="manulife" class="transition duration-300 opacity-50 hover:opacity-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 p-3 flex justify-center align-center">
                <div class="p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-1">
                            <img src="assets/img/fast-company.svg" alt="fast-company" class="transition duration-300 opacity-50 hover:opacity-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 p-3 flex justify-center align-center">
                <div class="p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-1 justify-items-center align-center">
                            <img src="assets/img/hunter.svg" alt="hunter" class="transition duration-300 opacity-50 hover:opacity-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 p-3 flex justify-center align-center">
                <div class="p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-1">
                            <img src="assets/img/citi-link.svg" alt="citi-link" class="transition duration-300 opacity-50 hover:opacity-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Companies Section -->

<!-- Start of Banner Section -->
<section class="container mx-auto relative py-8 px-4">
    <div class="z-20 relative text-white container mx-auto rounded-3xl lg:mt-0 lg:pt-4 xl:pt-20 2xl:pt-14 2xl:pl-14 2xl:pt-6">
        <div class="flex flex-wrap justify-center -mt-2 sm:mt-5 md:mt-8 lg:justify-start lg:m-16 lg:mt-9 xl:justify-start xl:m-10 xl:-mt-8 2xl:justify-start 2xl:mt-5">
            <div class="text-2xl md:text-3xl lg:text-4xl xl:text-4xl xl:m-8 2xl:text-4xl font-extrabold text-white">Join our Freelancing Team</div>
        </div>
        <div class="flex flex-wrap justify-center lg:justify-start xl:ml-24 xl:ml-24 2xl:ml-24">
            <a href="#" class="inline-flex items-center justify-center rounded-lg px-3 py-2 mt-2 text-sm sm:px-3 sm:py-2 md:px-5 md:py-3 lg:px-5 lg:py-3 lg:-mt-12 lg:ml-16 xl:justify-start xl:-ml-6 xl:py-3 border border-transparent shadow join-now c-black_100 f-inter-black text-xs 2xl:text-lg">Join Now</a>
        </div>
    </div>
    <div class="absolute inset-0 h-auto z-10">
        <div class="w-11/12 rounded-3xl mx-auto">
            <img src="./assets/img/cta.png" alt="" class="h-full w-full object-fit-cover">  
        </div>
    </div>
</section>
<!-- End of Banner Section -->

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
</html>

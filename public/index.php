<?php require_once "../templates/header.php"; ?>
    <main class="flex mx-auto h-screen justify-between items-center w-full pl-16">
        <div class="tagline">
            <h1>Hustle your skill for money <br> with <span class="main-title">Hustle</span><span
                        class="sub-title">Hub</span></h1>
            <p>An online freelance services platform for everyone</p>
        </div>

        <div class="photo">
            <img src="./assets/img/hero_image.png" alt="Hero-Image"/>
        </div>
    </main>

    <section class="w-full mx-auto bg-blue-50">
        <div>
            <h1 class="title-header">How it Works</h1>
        </div>

        <div class="text-center features flex justify-evenly items-center ">
            <div class="account">
                <img class="inline-block" src="./assets/img/account.svg" alt="">
                <p class="work-title">Account</p>
                <p class="work-desc">Create your Account</p>
            </div>
            <div class="discover">
                <img class="inline-block" src="./assets/img/discover.svg" alt="">
                <p class="work-title">Discover</p>
                <p class="work-desc">Search your freelancer</p>
            </div>
            <div class="hire">
                <img class="inline-block" src="./assets/img/hire.svg" alt="">
                <p class="work-title">Hire</p>
                <p class="work-desc">Pay the price</p>
            </div>
        </div>
    </section>

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

    <!-- TOP PROVIDERS -->
    <section class="provider  mx-auto">
        <div>
            <h1 class="title-header">Top Providers</h1>
        </div>

        <div class="flex justify-center items-center">
            <div class='flex space-x-2 w-full rounded-lg overflow-hidden mx-auto justify-center transform scale-75 opacity-50'>
                <div class="card min-w-sm border border-gray-100 min-w-max">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <div class="h-24 w-24 rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative"
                                     src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-md whitespace-nowrap text-black font-bold leading-normal ">Prince Carl Velasco</span>
                                <span class="text-sm whitespace-nowrap text-gray-600 pb-3">Data Scientist</span>
                                <p class="text-sm text-gray-500 pb-3">
                                    I can't start my day without a coffee cup
                                </p>
                                <div class="container space-x-8 social-links flex justify-center items-center pb-3">
                                    <img src="./assets/img/dribbble-logo.svg" alt="dribbble-logo">
                                    <img src="./assets/img/instagram-logo.svg" alt="instagram-logo">
                                    <img src="./assets/img/twitter-logo.svg" alt="twitter-logo">
                                    <img src="./assets/img/linkedIn-logo.svg" alt="linkedIn-logo">
                                    <img src="./assets/img/facebook-logo.svg" alt="facebook-logo">
                                    <img src="./assets/img/behance-logo.svg" alt="behance-logo">
                                </div>
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                <span class="text-center px-2">
                                    <span class="font-bold text-gray-700">23</span>
                                    <br>
                                    <span class="client-body"> Client</span>
                                </span>
                                    <span class="pl-2">
                                    <img src="./assets/img/stars.svg" alt="stars">
                                </span>
                                </div>
                                <div class="py-2 flex space-x-2">
                                    <button class="flex message-button justify-center max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent px-4 py-1 flex items-center hover:shadow-lg">
                                        <span class="mr-2"></span>Message
                                        <span class="ml-2"></span>
                                    </button>
                                    <button class="flex hire-button justify-center max-h-max whitespace-nowrap focus:outline-none focus:ring focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg motion-reduce:transform-none">
                                        <span class="mr-2"></span>
                                        Hire
                                        <span class="ml-2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='flex space-x-2 w-full rounded-lg overflow-hidden mx-auto justify-center'>
                <div class="card min-w-sm border border-gray-100 transition-shadow shadow-xl hover:shadow-xl min-w-max">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative"
                                     src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-md whitespace-nowrap text-black font-bold leading-normal ">Katherine Therese Marie Mariñas</span>
                                <span class="text-sm whitespace-nowrap text-gray-600 pb-3">UI / UX Designer</span>
                                <p class="text-sm text-gray-500 pb-3">
                                    I can't start my day without a coffee cup
                                </p>
                                <div class="container space-x-8 social-links flex justify-center items-center pb-3">
                                    <img src="./assets/img/dribbble-logo.svg" alt="dribbble-logo">
                                    <img src="./assets/img/instagram-logo.svg" alt="instagram-logo">
                                    <img src="./assets/img/twitter-logo.svg" alt="twitter-logo">
                                    <img src="./assets/img/linkedIn-logo.svg" alt="linkedIn-logo">
                                    <img src="./assets/img/facebook-logo.svg" alt="facebook-logo">
                                    <img src="./assets/img/behance-logo.svg" alt="behance-logo">
                                </div>
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                <span class="text-center px-2">
                                    <span class="font-bold text-gray-700">23</span>
                                    <br>
                                    <span class="client-body"> Client</span>
                                </span>
                                    <span class="pl-2">
                                    <img src="./assets/img/stars.svg" alt="">
                                </span>
                                </div>
                                <div class="py-2 flex space-x-2">
                                    <button class="flex message-button justify-center max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent px-4 py-1 flex items-center hover:shadow-lg">
                                        <span class="mr-2"></span>Message
                                        <span class="ml-2"></span>
                                    </button>
                                    <button class="flex hire-button justify-center max-h-max whitespace-nowrap focus:outline-none focus:ring focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg">
                                        <span class="mr-2"></span>
                                        Hire
                                        <span class="ml-2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='flex space-x-2 w-full rounded-lg overflow-hidden mx-auto justify-center transform scale-75'>
                <div class="card min-w-sm border border-gray-100 transition-shadow shadow-xl hover:shadow-xl min-w-max opacity-50">
                    <div class="flex items-center p-9 pt-24">
                        <div class="relative flex flex-col items-center w-full">
                            <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative"
                                     src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 rounded-lg tag py-2 px-3">PRO</span>
                                <span class="text-md whitespace-nowrap text-black font-bold leading-normal ">Tricia Dorine Relox</span>
                                <span class="text-sm whitespace-nowrap text-gray-600 pb-3">UI / UX Designer</span>
                                <p class="text-sm text-gray-500 pb-3">
                                    I can't start my day without a coffee cup
                                </p>
                                <div class="container space-x-8 social-links flex justify-center items-center pb-3">
                                    <img src="./assets/img/dribbble-logo.svg" alt="dribbble-logo">
                                    <img src="./assets/img/instagram-logo.svg" alt="instagram-logo">
                                    <img src="./assets/img/twitter-logo.svg" alt="twitter-logo">
                                    <img src="./assets/img/linkedIn-logo.svg" alt="linkedIn-logo">
                                    <img src="./assets/img/facebook-logo.svg" alt="facebook-logo">
                                    <img src="./assets/img/behance-logo.svg" alt="behance-logo">
                                </div>
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                <span class="text-center px-2">
                                    <span class="font-bold text-gray-700">23</span>
                                    <br>
                                    <span class="client-body"> Client</span>
                                </span>
                                    <span class="pl-2">
                                    <img src="./assets/img/stars.svg" alt="">
                                </span>
                                </div>
                                <div class="py-2 flex space-x-2">
                                    <button class="flex message-button justify-center max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent px-4 py-1 flex items-center hover:shadow-lg">
                                        <span class="mr-2"></span>Message
                                        <span class="ml-2"></span>
                                    </button>
                                    <button class="flex hire-button justify-center max-h-max whitespace-nowrap focus:outline-none focus:ring focus:border-blue-300 rounded max-w-max text-gray-100 bg-indigo-500 hover:bg-indigo-600 px-4 py-1 flex items-center hover:shadow-lg">
                                        <span class="mr-2"></span>
                                        Hire
                                        <span class="ml-2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container w-full mx-auto py-20">
        <!--  COMPANIES  -->
        <div class="company space-x-16 flex pb-20 justify-center items-center">
            <a href="https://www.manulife.com.ph/"> <img src="./assets/img/manulife.svg" alt="manulife"> </a>
            <img src="./assets/img/fast-company.svg" alt="fast-company">
            <img src="./assets/img/hunter.svg" alt="hunter">
            <img src="./assets/img/citi-link.svg" alt="citi-link">
        </div>

        <!-- CTA -->
        <div class="cta rounded-lg max-w-7xl mx-auto py-12 sm:px-6 lg:py-16 lg:px-12 lg:flex lg:items-center lg:justify-between">
            <div class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                <h2 class="block text-white mb-6">Join our Freelancing Team</h2>
                <div class="flex justify-center items-center pt-4">
                    <a href="#"
                       class="inline-flex items-center justify-center rounded-lg px-5 py-3 border border-transparent text-base font-medium text-black shadow join-now">
                        Join Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
            <div class="w-full pt-12 flex flex-col sm:flex-row space-y-4 justify-between">
                <div class="flex flex-col space-y-4">
                    <img src="./assets/img/footer-logo.png" alt="" width="250" height="250">
                    <div class="text-center pt-2">
                        <p class="text-lg pb-4">(02) 8281-88-88</p>
                        <p class="opacity-60 text-xs">hustlehub@gmail.com</p>
                    </div>
                </div>

                <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                    <a class="opacity-60 font-bold pb-2">About Us</a>
                    <a class="opacity-60">Privacy Policy</a>
                    <a class="opacity-60">Terms of Service</a>
                    <a class="opacity-60">Intellectual Property Claims</a>
                </div>

                <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                    <a class="opacity-60 font-bold pb-2">Support</a>
                    <a class="opacity-60">Help & Support</a>
                    <a class="opacity-60">Trust & Safety</a>
                    <a class="opacity-60">Community Standards</a>
                </div>

                <div class="w-full sm:w-1/5 flex flex-col">
                    <form>
                        <label class="opacity-60 font-bold space-y-4">
                            <span>Subscribe</span>
                            <input type="text"
                                   class="rounded-l-lg p-3 placeholder-gray-700 focus:outline-none border-t border-b border-l w-3/4 -mr-1 bg-white border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                   placeholder="Get product updates"/>
                        </label>
                        <button class="rounded-r-lg font-bold p-3 px-4 uppercase input-blue focus:outline-none shadow">
                            <input type="image" class="focus:outline-none align-middle" src="./assets/img/arrows.png"
                                   alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container flex mx-auto">
            <div class="pt-12 border-t-2 border-gray-300 w-full flex flex-col sm:flex-row">
                <div class="space-x-2 sm:w-1/5 flex flex-row">
                    <i><img src="./assets/img/linkedin-footer.svg" alt="linkedin-footer"></i>
                    <i><img src="./assets/img/facebook-footer.svg" alt="facebook-footer"></i>
                    <i><img src="./assets/img/twitter-footer.svg" alt="twitter-footer"></i>
                </div>

                <div class="attribution inline-flex justify-center text-center mx-auto flex-col sm:w-1/5">
                    <p class="text-sm font-bold">Developed by Alpha Developers</p>
                </div>

                <div class="attribution text-xs justify-center items-end flex sm:w-1/5 flex-col">
                    <p>© 2021 HustleHub. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
<?php require_once "../templates/footer.php"; ?>
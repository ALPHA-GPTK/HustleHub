    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" s href="assets/img/favicon.png">
    <title>HustleHub | Gigs</title>
    <div class="bg-lightBlue_8">
        <?php
        require_once "./profile_header.php";
        require_once "./dbConnection.inc";
        require_once "./function.php";

        getSessionValues();

        ?>

        <section class="mx-auto">
            <div>
                <h1 class="title-header font-bold">Gigs</h1>
            </div>

            <div class="antialiased pl-14 pr-14">
                <div class="flex flex-wrap -mx-4">
                    <!-- Card 1 -->
                    <?php

                    $sql = "SELECT gigs_service, gigs_description, gigs_price, gigs_rating, gigs_creation FROM freewlance_gig WHERE user_id = '$userId'";
                    $result = $conn->query($sql);

                    while ($userResult = $result->fetch_assoc()) :
                    ?>
                        <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                            <div href="" class="card-gig block shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover" src="https://images.pexels.com/photos/1181216/pexels-photo-1181216.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                                </div>
                                <div class="p-4">
                                    <div class="px-6 py-4">
                                        <span class="text-gray-700 float-right">
                                            <?php echo $userResult['gigs_creation']; ?>
                                        </span>
                                        <div class="font-bold text-xl mb-2 mt-10"><?php echo $userResult['gigs_service']; ?></div>
                                        <span><?php echo $userResult['gigs_description']; ?></span>
                                        <span class="text-gray-700">
                                            PRICE
                                        </span>
                                        <span class="font-extrabold">
                                            <?php echo "₱" . $userResult['gigs_price']; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex leading-none justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="pl-2">
                                        <img src="assets/img/stars.svg" alt="">
                                    </span>
                                </div>
                                <!-- Buttons -->
                                <div class="grid grid-cols-2 p-10">
                                    <div class="col-span-1 w-100 flex flex-col justify-center pr-1">
                                        <button class="update-button border h-10 py-2 px-4 rounded-lg tracking-wide">UPDATE</button>
                                    </div>
                                    <div class="col-span-1 w-100 flex flex-col justify-center pl-1">
                                        <button class="delete-button h-10 py-2 px-4 rounded-lg tracking-wide">DELETE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    </div>
    <?php require_once "footer.php" ?>
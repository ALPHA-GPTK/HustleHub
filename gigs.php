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

        $sql = "SELECT freelance_fName, freelance_lName,freelance_path, gigs_service, gigs_description, gigs_banner, gigs_price, gigs_creation
                FROM freelance_gig INNER JOIN freelance_info ON user_id = freelance_id WHERE user_id != '$userId'";
        $result = $conn->query($sql);

        while ($userResult = $result->fetch_assoc()) :
          ?>
          <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4 text-center">
            <div href="" class="card-gig block shadow-md hover:shadow-xl rounded-lg overflow-hidden">
              <div class="relative pb-48 overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                     src="<?= $userResult['gigs_banner'] ?>"
                     alt="">
              </div>
              <!-- Profile Image and Name -->
              <div class="relative flex flex-col items-center w-full text-center">
                <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                  <img class="h-24 w-24 md rounded-full relative"
                       src="<?= $userResult["freelance_path"] ?>" alt="">
                  <div class="absolute"></div>
                </div>
              </div>
              <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                <span class="text-md whitespace-nowrap text-gray-800 font-semibold"><?= $userResult['freelance_fName'] . " " . $userResult['freelance_lName'] ?></span>
              </div>
              <!-- Profile Image and Name -->
              <div class="p-4">
                <span class="text-gray-700">
                    <?php echo get_timeago(strtotime($userResult['gigs_creation'])); ?>
                </span>
                <div class="font-bold text-xl my-2"><?php echo ucwords($userResult['gigs_service']); ?></div>
                <span><?php echo $userResult['gigs_description']; ?></span>
                <div>
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
                  <a href="./update_card.php?card_id=<?php echo $userResult['gigs_id']; ?>"
                     class="update-button border h-10 py-2 px-4 rounded-lg tracking-wide">UPDATE</a>
                </div>
                <div class="col-span-1 w-100 flex flex-col justify-center pl-1">
                  <a href="./card_delete.php?card_id=<?php echo $userResult['gigs_id']; ?>"
                     class="delete-button h-10 py-2 px-4 rounded-lg tracking-wide">DELETE</a>
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
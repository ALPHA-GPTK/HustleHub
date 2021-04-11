<!-- Favicon -->
<link rel="shortcut icon" type="image/png" s href="assets/img/favicon.png">
<title>HustleHub | MyGigs</title>
<div class="bg-lightBlue_8">
  <?php
  require_once "./profile_header.php";
  require_once "./dbConnection.inc";
  require_once "./function.php";

  getSessionValues();

  //  Check Image Existence in DIR
  $target_dir = "./assets/img/";
  $sql = "SELECT freelance_path FROM freelance_info WHERE freelance_id = '$userId'";
  $result = $conn->query($sql);
  $userResult = $result->fetch_assoc();
  $dbFilePath = $userResult['freelance_path'];
  $dbFileArr = explode("/", $dbFilePath);
  $filename = end($dbFileArr);
  $target_file = $target_dir . $filename;

  if (!(file_exists($target_file)) || empty($dbFilePath)) {
    $profile_pic = "./assets/img/dummy_profile.svg";
  } else {
    $profile_pic = $dbFilePath;
  }
  ?>

  <section class="mx-auto">
    <div>
      <div class="text-5xl pt-3 text-center md:mb-12 md:pt-10 lg:pt-3 xl:pt-3 2xl:pt-3 font-black mb-12">MyGigs</div>
    </div>

    <div class="antialiased pl-14 pr-14">
      <div class="flex justify-end">
        <a href="./add_gigs.php" class="py-3 px-6 mb-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-gray-600 hover:bg-gray-700">Add Gigs</a>
      </div>

      <div class="flex flex-wrap -mx-4">
        <?php
        $sql = "SELECT freelance_fName, freelance_lName, freelance_path, gigs_id, gigs_service, gigs_description, gigs_banner, gigs_price, gigs_creation
                FROM freelance_gig INNER JOIN freelance_info ON user_id = freelance_id WHERE user_id = '$userId'";
        $result = $conn->query($sql);
        while ($userResult = $result->fetch_assoc()) :

          //  Check Image Existence in DIR
          $target_dir = "./assets/img/";
          $dbFilePath = $userResult['gigs_banner'];
          $dbFileArr = explode("/", $dbFilePath);
          $filename = end($dbFileArr);
          $target_file = $target_dir . $filename;

          if (!(file_exists($target_file)) || empty($dbFilePath)) {
            $timeline_pic = "./assets/img/default-timeline.svg";
          } else {
            $timeline_pic = $dbFilePath;
          }
        ?>
          <div class="justify-center w-full sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4 text-center">
            <div class="card-gig block shadow-md hover:shadow-xl rounded-lg overflow-hidden">
              <div class="relative pb-48 overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover" src="<?= $timeline_pic ?>" alt="">
              </div>
              <!-- Profile Image and Name -->
              <div class="relative flex flex-col items-center w-full text-center">
                <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end min-w-max absolute -top-16 flex bg-purple-200 row-start-1 row-end-3 ring-1 ring-white">
                    <img class="h-24 w-24 md rounded-full relative object-cover" src="<?= $profile_pic ?>" alt="">
                  <div class="absolute"></div>
                </div>
              </div>
              <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                <span class="text-md whitespace-nowrap text-gray-800 font-semibold"><?= $userResult["freelance_fName"] . " " . $userResult["freelance_lName"] ?></span>
              </div>
              <!-- User Description -->
              <div class="p-4 -mt-2">
                <span class="text-sm text-gray-700">
                  <?php echo get_timeago(strtotime($userResult['gigs_creation'])); ?>
                </span>
                <div class="font-bold text-lg my-2"><?php echo ucwords($userResult['gigs_service']); ?></div>
                <div class="text-sm mb-2"><?php echo $userResult['gigs_description']; ?></div>
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
                  <img src="assets/img/stars.svg" alt="stars" width="200">
                </span>
              </div>
              <!-- Buttons -->
              <div class="grid grid-cols-2 px-5 pb-5 mt-5">
                <div class="col-span-1 w-100 flex flex-col justify-center pr-1">
                  <a href="./card_delete.php?card_id=<?php echo $userResult['gigs_id']; ?>" class="delete-button border h-10 py-2 px-4 rounded-lg tracking-wide">DELETE</a>
                </div>
                <div class="col-span-1 w-100 flex flex-col justify-center pr-1">
                  <a href="./update_card.php?card_id=<?php echo $userResult['gigs_id']; ?>" class="update-button border h-10 py-2 px-4 rounded-lg tracking-wide">UPDATE</a>
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

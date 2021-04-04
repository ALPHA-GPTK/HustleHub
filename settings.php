<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

if (isset($conn) && $conn) {
  $sql = "SELECT freelance_fName, freelance_lName, freelance_username, freelance_email, freelance_about, freelance_path FROM freelance_info WHERE freelance_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userId);
  $stmt->execute();

  $stmt_result = $stmt->get_result();
  $data = $stmt_result->fetch_row();

  if ($stmt_result->num_rows < 1) {
    echo "<script>alert('Fetch Failed..' . $conn->connect_error)window.location.href='settings.php?account_status=change_successful';</script>";
  } else {
    [$user_firstname, $user_lastname, $user_username, $user_email, $user_about, $profile_pic] = $data;
    $_SESSION["profileImage"] = $profile_pic;
  }
} else {
  echo "<script>alert('Connection Failed.' . $conn->connect_error)window.location.href='settings.php?account_status=change_successful';</script>";
}

//  Check Image Existence in DIR
$target_dir = "./assets/img/";
$sql = "SELECT freelance_path FROM freelance_info WHERE freelance_id = '$userId'";
$result = $conn->query($sql);
$userResult = $result->fetch_assoc();
$dbFilePath = $userResult['freelance_path'];
$dbFileArr = explode("/", $dbFilePath);
$filename = end($dbFileArr);
$target_file = $target_dir . $filename;

if (!(file_exists($target_file)) || empty($profile_pic)) {
  $profile_pic = "./assets/img/dummy_profile.svg";
}

?>

<!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
<title>HustleHub | Settings</title>
<div class="bg-lightBlue_8 h-screen">
  <?php require_once "profile_header.php"; ?>
  <div class="flex lg:px-36">
    <!-- Sidebar Here -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Start of SideBar -->
    <div class="flex-none text-black">
      <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 rounded-lg dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
        <div class="px-8 flex flex-row items-center justify-between">
          <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0l 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="sidebar flex-grow md:block w-full mb-44 md:pb-0 md:overflow-y-auto">
          <a class="showSingle block px-10 py-4 text-sm font-semibold cursor-pointer rounded-t-lg c-darkBlue_65 btn-sidebar active" target="1" id="btn-basic">Account</a>
          <a class="showSingle block px-10 py-4 text-sm font-semibold cursor-pointer btn-sidebar c-darkBlue_65" target="2" id="btn-security">Security</a>
          <a class="showSingle block px-10 py-4 text-sm font-semibold cursor-pointer btn-sidebar c-darkBlue_65" target="3" id="btn-deletion">Deletion</a>
        </nav>
      </div>
    </div>
    <!-- End of SideBar -->
    <!-- Sidebar Here -->

    <!-- Start of Account -->
    <div class="flex-1 lg:px-20">
      <!-- Start of Basic Information -->
      <div class="w-3/4 rounded-xl mx-auto lg:w-full xl:w-full 2xl:w-full" id="con-basicinfo">
        <div id="div1" class="targetDiv mt-5 md:mt-0 md:col-span-2">
          <div class="shadow rounded-xl">
            <div class="px-4 pt-5 pb-12 bg-white space-y-6 sm:p-6 rounded-xl">
              <div class="text-lg font-medium leading-6 text-gray-900">Basic Information</div>
              <form action="upload_image.php" method="POST" enctype="multipart/form-data">
                <div class="flex justify-center">
                  <div class="mt-1 flex items-center">
                    <!-- Profile Image -->
                    <div class="inline-block h-16 w-16 rounded-full overflow-hidden bg-gray-100">
                      <img src="<?= $profile_pic ?>" alt="profile_image">
                    </div>
                    <div class="flex flex-col space-y-2">
                      <input type="file" name="imgToUpload" value="Choose File" class="w-1/2 ml-5 add-button py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white  lg:w-full xl:w-full 2xl:w-full cursor-pointer">
                      <input type="submit" name="submit-file" value="Upload Now" class="w-1/2 ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 delete-button lg:w-full xl:w-full 2xl:w-full cursor-pointer">
                    </div>
                  </div>
                </div>
              </form>
              <form action="change_info.php" method="POST">
                <div class="px-28 flex justify-end">
                  <div name="edit" id="edit" class="cursor-pointer py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-gray-600 hover:bg-gray-800">
                    Edit
                  </div>
                </div>
                <!-- Input Fields  -->
                <div class="max-w-lg flex flex-wrap mx-auto">
                  <div class="w-full md:w-1/2 pr-2">
                    <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="fName">
                      First name
                    </label>
                    <input value="<?= $user_firstname ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="fName" id="fName" disabled />
                  </div>
                  <!-- Last Name -->
                  <div class="w-full md:w-1/2 mb-2">
                    <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="lName">Last name</label>
                    <input value="<?= $user_lastname ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="lName" id="lName" disabled />
                  </div>
                  <!-- Other Credentials -->
                  <div class="w-full space-y-2">
                    <!-- Username -->
                    <label for="username" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Username
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input value="<?= $user_username ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="text" name="username" id="username" disabled />
                      </label>
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                      </div>
                    </div>
                    <!-- Email -->
                    <label for="email" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Email
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input value="<?= $user_email ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="email" name="email" id="email" disabled />
                      </label>
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                          <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                      </div>
                    </div>
                    <div class="w-full">
                      <label for="email" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                        About
                      </label>
                      <div class="mt-1">
                        <label for="about"></label>
                        <textarea class="w-full p-3 shadow-sm text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" id="about" name="about" rows="4" disabled><?php echo $user_about; ?></textarea>
                      </div>
                    </div>

                    <!-- CANCEL AND SAVE BUTTONS -->
                    <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6 hidden" id="btnCS">
                      <button name="change-info" type="submit" class="inline-flex justify-center py-3 px-7 border cancel-button text-sm rounded-lg cursor-pointer">Cancel</button>
                      <button class="inline-flex justify-center py-3 px-9 border shadow-sm text-sm rounded-lg add-button cursor-pointer">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Account -->

      <!-- Start of Security -->
      <div class="md:grid-cols-2 md:gap-6 duration-500 hidden" id="con-security">
        <div id="div2" class="targetDiv  mt-5 md:mt-0 md:col-span-2">
          <form action="settings_changepass.php" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Security</h3>

                <!-- Input Fields  -->
                <div class="max-w-lg flex flex-wrap mx-auto">
                  <div class="w-full space-y-2">

                    <!-- Current Password -->
                    <label for="current-password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">Current
                      Password</label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="current-password" id="current-password" required />
                      </label>

                      <!-- svg hide password icon -->
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                        <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="current-password-icon">
                      </div>

                    </div>

                    <!-- New Password -->
                    <label for="new-password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      New Password
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="new-password" id="new-password" required />
                      </label>

                      <!-- svg hide password icon -->
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                        <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="new-password-icon">
                      </div>

                    </div>

                    <!-- Confirm Password -->
                    <label for="current-password" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                      Confirm Password
                    </label>
                    <div class="relative text-gray-700">
                      <label>
                        <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" type="password" name="confirm-password" id="confirm-password" required disabled />
                      </label>

                      <!-- svg check password icon -->
                      <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <img src="./assets/img/check-not.svg" alt="check-icon" class="h-6 w-6" id="confirm-password-check">
                      </div>

                    </div>

                    <!-- CANCEL AND SAVE BUTTONS -->
                    <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6">
                      <input type="reset" value="Cancel" name="cancelPass" class="inline-flex justify-center py-3 px-7 border shadow-sm text-sm rounded-lg add-button cursor-pointer"/>
                      <input type="submit" value="Save" name="changePass" class="inline-flex justify-center py-3 px-7 border cancel-button text-sm rounded-lg cursor-pointer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End of Security -->

      <!-- Start of Account Deletion -->
      <br>
      <div class="md:grid-cols-2 md:gap-6 duration-500 hidden" id="con-account">
        <div id="div3" class="targetDiv  mt-5 md:mt-0 md:col-span-2">
          <form action="delete_account.php" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                <!-- <h3 class="max-w-lg flex flex text-left">Account Deletion</h3> -->

                <!-- DELETE BUTTON -->
                <div class="max-w-full text-left">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">Account Deletion</h3>

                  <div class="px-8 flex justify-end">
                    <button name="delete" type="submit" class="py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white account-delete-button account-delete-button:hover">
                      Delete Account
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
    </div>
    <!-- End of Account Deletion -->
  </div>
</div>
<?php require_once "footer.php" ?>

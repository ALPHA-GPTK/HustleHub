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
<div class="bg-lightBlue_8">
  <?php require_once "profile_header.php"; ?>
  <div class="md:flex flex-col md:flex-row md:min-h-screen w-full lg:px-36">
    <!-- Sidebar Here -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Start of SideBar -->
    <div class="flex-col md:flex-col lg:flex-col xl:flex-col 2xl:flex-col text-black">
      <div @click.away="open = false" class="flex flex-col w-full md:w-64 bg-white rounded-lg" x-data="{ open: false }">
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

    <div class="flex-1 lg:px-10 xl:px-20 2xl:px-20">

      <!-- Start of Account -->
      <!-- Start of Basic Information -->
      <div class="flex w-full mb-10" id="con-basicinfo">
        <div id="div1" class="targetDiv rounded-xl mt-5 md:mt-0 w-full justify-center">
          <div class="flex justify-center p-6 w-5/6 md:w-5/6 lg:w-full lg:ml-10 xl:ml-20 2xl:ml-20 xl:w-full 2xl:w-full bg-white shadow rounded-xl mx-auto">
            <div class="w-5/6 md:w-5/6 lg:w-full xl:w-full 2xl:w-full">
              <div class="text-xl px-0 pt-3 lg:px-4 lg:pt-5 font-medium leading-6 text-gray-900 mb-8 font-black">Basic Information</div>

                <!-- Start of Form for Image Upload -->
                <form action="upload_image.php" method="POST" enctype="multipart/form-data">
                  <div class="flex justify-center">
                    <div class="flex- sm:flex md:flex lg:flex xl:flex 2xl:flex justify-center">
                      <!-- PROFILE IMAGE -->
                      <div class="flex flex-col justify-center align-center">
                        <div class="inline-block h-24 w-24 rounded-full overflow-hidden bg-gray-100 mx-auto mb-5">
                          <img src="<?= $profile_pic ?>" alt="profile_image" class="h-full w-full object-cover">
                        </div>
                        <div class="flex flex-col space-y-2">
                          <input type="file" name="imgToUpload" accept="image/*" value="Choose File" class="w-full add-button py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-white lg:w-full xl:w-full 2xl:w-full cursor-pointer">
                          <input type="submit" name="submit-file" value="Upload Now" class="w-full bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 delete-button lg:w-full xl:w-full 2xl:w-full cursor-pointer">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- End of Form for Image Upload -->

                <!-- Start of Form for Edit -->
                <form action="change_info.php" method="POST">
                  <div class="px-24 lg:px-28 pb-10 flex justify-center lg:justify-center xl:justify-center 2xl:justify-end">
                    <div name="edit" id="edit" class="cursor-pointer py-2 px-32 md:px-6 lg:px-6 xl:px-6 2xl:px-6 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-gray-600 hover:bg-gray-800">
                      Edit
                    </div>
                  </div>

                  <!-- Start of Input Fields  -->
                  <div class="max-w-lg flex flex-wrap mx-auto">
                    <div class="w-full pr-0 md:w-1/2 sm:pr-2 md:pr-2 lg:pr-2 xl:pr-2 2xl:pr-2">

                      <!-- FIRST NAME -->
                      <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="fName">
                        First name
                      </label>
                      <input value="<?= $user_firstname ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="text" name="fName" id="fName" disabled />
                    </div>

                    <!-- LAST NAME -->
                    <div class="w-full md:w-1/2 mb-2">
                      <label class="block mb-1 text-xs text-gray-600 font-black uppercase pt-2 sm:pt-2 md:pt-0 lg:pt-0 xl:pt-0 2xl:pt-0" for="lName">Last name</label>
                      <input value="<?= $user_lastname ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="text" name="lName" id="lName" disabled />
                    </div>

                    <!-- OTHER CREDENTIALS -->
                    <div class="w-full space-y-2">

                      <!-- USERNAME -->
                      <label for="username" class="block text-xs text-gray-600 uppercase font-black">
                        Username
                      </label>
                      <div class="relative text-gray-700">
                        <label>
                          <input value="<?= $user_username ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="text" name="username" id="username" disabled />
                        </label>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                          <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>

                      <!-- EMAIL -->
                      <label for="email" class="block text-xs text-gray-600 uppercase font-black">
                        Email
                      </label>
                      <div class="relative text-gray-700">
                        <label>
                          <input value="<?= $user_email ?>" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="email" name="email" id="email" disabled />
                        </label>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                          <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                          </svg>
                        </div>
                      </div>

                      <!-- ABOUT -->
                      <div class="w-full">
                        <label for="email" class="block text-xs text-gray-600 uppercase font-black">
                          About
                        </label>
                        <div class="mt-1">
                          <label for="about"></label>
                          <textarea class="w-full p-3 shadow-sm text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" id="about" name="about" rows="4" disabled><?php echo $user_about; ?></textarea>
                        </div>
                      </div>

                      <!-- CANCEL AND SAVE BUTTONS -->
                      <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6 hidden" id="btnCS">
                        <button name="change-info" type="submit" class="inline-flex justify-center py-3 px-7 border cancel-button text-sm rounded-lg cursor-pointer">Cancel</button>
                        <button class="inline-flex justify-center py-3 px-9 text-sm rounded-lg save-button cursor-pointer">Save</button>
                      </div>
                    </div>
                  </div>
                  <!-- End of Input Fields  -->
                </form>
                <!-- End of Form for Edit -->
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- End of Account -->

      <!-- Start of Security -->
      <div class="flex w-full hidden" id="con-security">
        <div id="div2" class="targetDiv rounded-xl mt-5 md:mt-0 w-full justify-center">
          <div class="flex justify-center p-6 w-5/6 md:w-5/6 lg:w-full lg:p-10 xl:w-full 2xl:w-full bg-white shadow rounded-xl mx-auto">
            <!-- Start of Form for Change Password -->
            <form action="settings_changepass.php" method="POST" class="w-5/6 md:w-5/6 lg:w-full xl:w-full 2xl:w-full">
              <div class="text-xl px-0 pt-3 lg:px-4 lg:pt-5 font-medium leading-6 text-gray-900 mb-8 font-black">Security</div>

              <!-- Start of Input Fields  -->
              <div class="max-w-lg flex flex-wrap mx-auto">
                <div class="w-full space-y-2">

                  <!-- CURRENT PASSWORD -->
                  <label for="current-password" class="block text-xs text-gray-600 uppercase font-black">Current
                    Password</label>
                  <div class="relative text-gray-700">
                    <label>
                      <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="password" name="current-password" id="current-password" required />
                    </label>

                    <!-- SVG HIDE PASSWORD ICON -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                      <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="current-password-icon">
                    </div>
                  </div>

                  <!-- NEW PASSWORD -->
                  <label for="new-password" class="block text-xs text-gray-600 uppercase font-black">
                    New Password
                  </label>
                  <div class="relative text-gray-700">
                    <label>
                      <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="password" name="new-password" id="new-password" required />
                    </label>

                    <!-- SVG HIDE PASSWORD ICON -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                      <img src="./assets/img/hide.svg" alt="password-icon" class="h-6 w-6 hide" id="new-password-icon">
                    </div>
                  </div>

                  <!-- CONFIRM PASSWORD -->
                  <label for="current-password" class="block text-xs text-gray-600 uppercase font-black">
                    Confirm Password
                  </label>
                  <div class="relative text-gray-700">
                    <label>
                      <input class="w-full h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" type="password" name="confirm-password" id="confirm-password" required disabled />
                    </label>

                    <!-- SVG CHECK PASSWORD ICON -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                      <img src="./assets/img/check-not.svg" alt="check-icon" class="h-6 w-6" id="confirm-password-check">
                    </div>
                  </div>

                  <!-- CANCEL AND SAVE BUTTONS -->
                  <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6">
                    <input type="reset" value="Cancel" name="cancelPass" class="inline-flex justify-center py-3 px-7 border shadow-sm text-sm rounded-lg bg-transparent cancel-button cursor-pointer" />
                    <input type="submit" value="Save" name="changePass" class="inline-flex justify-center py-3 px-9 save-button text-sm rounded-lg cursor-pointer" />
                  </div>
                </div>
              </div>
              <!-- End of Input Fields  -->
            </form>
            <!-- End of Form for Change Password -->
          </div>

        </div>
      </div>
      <!-- End of Security -->

      <!-- Start of Account Deletion -->
      <br>
      <div class="flex w-full hidden" id="con-account">
        <div id="div3" class="targetDiv rounded-xl mt-5 md:mt-0 w-full justify-center">
          <div class="flex justify-center p-6 w-5/6 md:w-5/6 lg:w-full lg:p-10 xl:w-full 2xl:w-full bg-white shadow rounded-xl mx-auto">
            <!-- Start of Form for Deletion -->
            <form action="delete_account.php" method="POST" class="w-5/6 md:w-5/6 lg:w-full xl:w-full 2xl:w-full">
              <div class="text-xl px-0 pt-3 lg:px-4 lg:pt-5 font-medium leading-6 text-gray-900 mb-8 font-black">Deletion</div>

              <!-- DELETE BUTTON -->
              <div class="px-8 flex justify-center lg:justify-end">
                <button name="delete" type="submit" class="py-4 px-9 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white account-delete-button account-delete-button:hover">
                  Delete Account
                </button>
              </div>
          </div>
          </form>
          <!-- End of Form for Deletion -->
        </div>
      </div>
    </div>
    <!-- End of Account Deletion -->

  </div>
</div>
<?php require_once "footer.php" ?>

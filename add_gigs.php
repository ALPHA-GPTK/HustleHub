<!-- Favicon -->
<link rel="shortcut icon" type="image/png" s href="assets/img/favicon.png">
<title>HustleHub | Add Gigs</title>
<div class="bg-lightBlue_8">
  <?php
  require_once "./profile_header.php";
  require_once "./dbConnection.inc";
  ?>

  <section class="mx-auto">
    <div>
      <div class="text-5xl pt-3 text-center md:mb-12 md:pt-10 lg:pt-3 xl:pt-3 2xl:pt-3 font-black mb-12">Add Gigs</div>
    </div>

    <form action="./check_gigs.php" method="POST" enctype="multipart/form-data" id="addgigs">
      <div class="antialiased flex justify-center">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6 shadow sm:overflow-hidden rounded-lg w-5/6 lg:w-2/3 xl:w-1/2 2xl:w-1/2">
          <div class="text-lg font-medium leading-6 text-gray-900 text-center pt-5">What is your service...</div>
          <div class="px-28 flex justify-end">
          </div>
          <!-- Input Fields  -->
          <div class="max-w-lg flex flex-wrap mx-auto">
            <!-- Service -->
            <div class="w-full pr-2">
              <label class="block mb-1 text-xs text-gray-600 font-black uppercase" for="fName">
                Service
              </label>

              <div class="relative margin">
                <select name="service" id="service" class="w-full appearance-none h-10 pl-3 pr-12 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 outline-none cursor-pointer">
                  <option value="">Select Service</option>
                  <?php
                  $sql = "SELECT * FROM freelance_service";
                  $result = $conn->query($sql);
                  while ($userResult = $result->fetch_assoc()) :
                  ?>
                    <option value="<?php echo strtolower($userResult['service_name']); ?>"><?php echo $userResult['service_name']; ?></option>
                  <?php endwhile; ?>
                </select>

                <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer">
                  <img src="./assets/img/dropdown-icon.svg" alt="password-icon" class="h-6 w-6 hide" id="current-password-icon">
                </div>
              </div>
            </div>

            <div class="w-full space-y-2">
              <!-- Description -->
              <label for="description" class="mt-2 block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                Description
              </label>
              <div class="relative text-gray-700">
                <label>
                  <textarea rows="20" cols="50" form="addgigs" class="w-full h-24 py-2 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="description" id="description" placeholder="Enter your description..." required></textarea>
                </label>
              </div>
              <!-- Banner -->
              <label for="banner" class="block text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                Banner Profile
              </label>
              <div class="border border-dashed border-gray-500 relative">
                <input type="file" id="banner" name="imgToUpload" multiple class="cursor-pointer relative block opacity-0 p-10 lg:p-20 z-50">
                <div class="text-center text-sm text-gray-500 p-6 lg:text-base lg:p-14 xl:pt-14 2xl:pt-16 absolute top-0 right-0 left-0 m-auto">
                  <h4 id="image-text">
                    Drop files anywhere to upload
                    <br />or
                  </h4>
                  <p id="image-text">Select Files</p>
                  <p class="pt-4 italic text-sm c-black_50" id="filename"></p>
                </div>
              </div>

              <!-- Price -->
              <label for="price" class="block pt-1 text-xs text-gray-600 dark:text-gray-400 uppercase font-black">
                Price (₱)
              </label>
              <div class="relative text-gray-700">
                <label>
                  <input onkeypress="return isNumberKey(event)" class="w-full h-10 pl-3 pr-8 text-base rounded-md border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 appearance-none" type="text" name="price" id="price" required />
                </label>
              </div>
              <!-- CANCEL AND SAVE BUTTONS -->
              <div class="flex justify-center px-4 py-3 text-right sm:px-6 space-x-6">
                <a href="./mygigs.php" class="inline-flex justify-center py-3 px-7 border border-transparent shadow-sm text-sm font-medium rounded-lg cancel-button">Cancel</a>
                <input type="submit" value="Add" name="addGigs" class="inline-flex justify-center py-3 px-9 border border-transparent shadow-sm text-sm rounded-lg add-button cursor-pointer" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</div>
<?php require_once "footer.php" ?>

<?php
require_once "./dbConnection.inc";
session_start();
if (isset($conn, $_POST["submit-file"]) && $conn) {
    $target_dir = "./assets/img/";
    $filename = htmlspecialchars(basename($_FILES['imgToUpload']['name']));
    $target_file = $target_dir . $filename;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $user_id = $_SESSION['user_id'];
    $status = 1;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $status = 0;
    }

    // Check file size
    if ($_FILES["imgToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $status = 0;
    }


    if ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
        && $imageFileType !== "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $status = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($status === 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else if (move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file)) {
        $sql = "UPDATE freelance_info SET freelance_path = ? WHERE freelance_id = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $target_file, $user_id);
        $stmt->execute();

        if ($stmt->affected_rows === 1) {
            echo "<script>alert('$filename has been uploaded')
            window.location.href='settings.php?account_status=upload_successful';
            </script>";
        } else {
            echo "The file not uploaded";
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    trigger_error("Connection Failed: " . $conn->connect_error);
}
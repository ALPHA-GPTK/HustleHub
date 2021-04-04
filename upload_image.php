<?php
require_once "./dbConnection.inc";
require_once "./function.php";
//
//getSessionValues();
//
//if (isset($conn, $_POST["submit-file"]) && $conn) {
//    $target_dir = "./assets/img/";
//    $filename = htmlspecialchars(basename($_FILES['imgToUpload']['name']));
//    $target_file = $target_dir . $filename;
//    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//    $user_id = $_SESSION['user_id'];
//    $status = 1;
//
//    // Check if file already exists
//    if (file_exists($target_file)) {
//        $sql = "SELECT freelance_path FROM freelance_info WHERE freelance_id = '$userId' AND freelance_path = '$target_file'";
//        $result = $conn->query($sql);
//        $countResult = count($result->fetch_all());
//
//        // Check if file is in database path
//        if ($countResult == 0) {
//            $sql = "UPDATE freelance_info SET freelance_path = '$target_file' WHERE freelance_id = '$userId'";
//            $conn->query($sql);
//            echo "<script>window.location.href='settings.php?upload_status=success';</script>";
//        } else {
//            echo "<script>alert('Sorry, this is your current profile picture.');
//            window.location.href='settings.php?upload_status=already-profile';
//            </script>";
//        }
//
////        $status = 0;
//    } else if ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg" && $imageFileType !== "gif") {
//        $status = 0;
//        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
//        window.location.href='settings.php?upload_status=invalid-file';
//        </script>";
//    }
//
//    if ($status != 0) {
//        if (move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file)) {
//            $sql = "UPDATE freelance_info SET freelance_path = ? WHERE freelance_id = ?;";
//            $stmt = $conn->prepare($sql);
//            $stmt->bind_param("si", $target_file, $user_id);
//
//
//            if ($stmt->execute()) {
//                echo "<script>alert('$filename has been uploaded')
//                window.location.href='settings.php?upload_status=success';
//                </script>";
//            } else {
//                echo "The file not uploaded";
//            }
//        } else {
//            echo "Sorry, there was an error uploading your file.";
//        }
//    }
//} else {
//    trigger_error("Connection Failed: " . $conn->connect_error);
//}
add_image($conn, $_POST['submit-file'], $_FILES['imgToUpload']);
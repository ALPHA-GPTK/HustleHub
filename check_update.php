<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

$activeCard = $_SESSION['active_card'];


if (isset($conn, $_POST["updateGigs"]) && $conn) {
    $target_dir = "./assets/img/";
    $filename = htmlspecialchars(basename($_FILES['uploadImage']['name']));
    $target_file = $target_dir . $filename;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $user_id = $_SESSION['user_id'];
    $status = 1;

    // Check if file already exists
    if (file_exists($target_file)) {
        $sql = "SELECT gigs_banner FROM freelance_gig WHERE gigs_id = '$activeCard' AND gigs_banner = '$target_file'";
        $result = $conn->query($sql);
        $countResult = count($result->fetch_all());

        // Check if file is in database path
        if ($countResult == 0) {
            $sql = "UPDATE freelance_gig SET gigs_banner = '$target_file' WHERE gigs_id = '$activeCard'";
            $conn->query($sql);

            //////////////////////////////

            $description = $_POST['description'];
            $price = $_POST['price'];

            if (isset($description, $price)) {
                $sql = "UPDATE freelance_gig SET gigs_description = '$description', gigs_banner = '$target_file', gigs_price = '$price' WHERE gigs_id = '$activeCard'";
                $conn->query($sql);

                unset($_SESSION['active_card']);
                // header("location: mygigs.php?update_status=success");
            } else {
                header("location: update_card?card_id=$activeCard");
            }

            /////////////////////////////

            echo "<script>window.location.href='mygigs.php?upload_status=success';</script>";
        } else {
            echo "<script>alert('Sorry, this is your current profile picture.');
            window.location.href='mygigs.php?upload_status=already-profile';
            </script>";
        }

        $status = 0;
    } else if ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg" && $imageFileType !== "gif") {
        $status = 0;
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
        window.location.href='mygigs.php?upload_status=invalid-file';
        </script>";
    }

    if ($status != 0) {
        if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $target_file)) {
            $sql = "UPDATE freelance_gig SET gigs_banner = ? WHERE gigs_id = ?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $target_file, $activeCard);


            if ($stmt->execute()) {

                ///////////////////////////////

                $description = $_POST['description'];
                $price = $_POST['price'];

                if (isset($description, $price)) {
                    $sql = "UPDATE freelance_gig SET gigs_description = '$description', gigs_banner = '$target_file', gigs_price = '$price' WHERE gigs_id = '$activeCard'";
                    $conn->query($sql);

                    unset($_SESSION['active_card']);
                    // header("location: mygigs.php?update_status=success");
                } else {
                    header("location: update_card?card_id=$activeCard");
                }

                /////////////////////////////

                echo "<script>alert('$filename has been uploaded')
                window.location.href='mygigs.php?upload_status=success';
                </script>";
            } else {
                echo "The file not uploaded";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    trigger_error("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['updateGigs'])) {
}

if (isset($_POST['cancelUpdate'])) {
    unset($_SESSION['active_card']);
    header("location: mygigs.php");
}

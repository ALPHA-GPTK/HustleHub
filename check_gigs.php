<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

if (isset($_POST['addGigs'], $conn)) {

    if (!empty($_POST['service'])) {
        
            $service = $_POST['service'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $banner = add_image($conn, $_POST["addGigs"], $_FILES["imgToUpload"], "freelance_gig");
        
            if (isset($service, $description, $banner, $price)) {
                $sql = "INSERT INTO freelance_gig(gigs_service, gigs_description, gigs_banner, gigs_price, user_id) VALUES ('$service', '$description', '$banner', '$price', (SELECT freelance_id FROM freelance_info WHERE freelance_id = '$userId'))";
                $conn->query($sql);
                echo $conn->affected_rows;
                header("location: mygigs.php");
            } else {
                header("location: add_gigs.php?input_status=noinput");
            }
    } else {
        echo "<script>alert('No Input'); window.location.href='add_gigs.php'</script>";
    }
}

if (isset($_POST['cancelGigs'])) {
    header("location: mygigs.php");
}

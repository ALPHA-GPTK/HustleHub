<?php

require_once "./dbConnection.inc";
require_once "./function.php";

getSessionValues();

if (isset($_POST['addGigs'])) {

    $service = $_POST['service'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (isset($service, $description, $price)) {
        $sql = "INSERT INTO freelance_gig(gigs_service, gigs_description, gigs_price, user_id) VALUES ('$service', '$description', '$price', (SELECT freelance_id FROM freelance_info WHERE freelance_id = '$userId'))";
        $conn->query($sql);
        header("location: mygigs.php");
    } else {
        header("location: add_gigs.php?input_status=noinput");
    }
}

if (isset($_POST['cancelGigs'])) {
    header("location: mygigs.php");
}

<?php

require_once "./dbConnection.inc";
require_once "./function.php";

$activeCard = $_SESSION['active_card'];

if (isset($_POST['updateGigs'])) {
    $service = ucwords($_POST['service']);
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (isset($service, $description, $price)) {
        $sql = "UPDATE freelance_gig SET gigs_service = '$service', gigs_description = '$description', gigs_price = '$price' WHERE gigs_id = '$activeCard'";
        $conn->query($sql);

        unset($_SESSION['active_card']);
        header("location: mygigs.php");
    } else {
        header("location: update_card?card_id=$activeCard");
    }
} else if (isset($_POST['cancelUpdate'])) {
    unset($_SESSION['active_card']);
    header("location: mygigs.php");
}

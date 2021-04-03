<?php

require_once "./dbConnection.inc";
require_once "./function.php";

$cardId = $_GET['card_id'];

$sql = "DELETE FROM freelance_gig WHERE gigs_id = '$cardId'";
$conn->query($sql);
header("location:mygigs.php");

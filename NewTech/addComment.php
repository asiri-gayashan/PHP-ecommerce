<?php

require "connection.php";


$pid = $_POST["pid"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$strRate = $_POST["strRate"];


if (empty($email)) {
    echo "Please enter email";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter valid email";
} else if (empty($pid)) {
    echo "Something went wrong";
} else if (empty($comment)) {
    echo "Please enter what you want to comment";
} else if (strlen($comment) > 200) {
    echo "Comment must be less than 200 charachters";
} else if (!is_numeric($strRate)) {
    echo "Something went wrong";
} else {

    $comRs = Database::search("SELECT * FROM `comment` WHERE `productId` = '".$pid."' AND `email` = '".$email."'");
    $comNr = $comRs->fetch_assoc();

    if($comNr >= 1){

        echo "You cannot more than one comment";

    } else {

        Database::iud("INSERT INTO `comment`(`productId`, `email`, `starRate`, `comment`) VALUES ('".$pid."','".$email."','".$strRate."','".$comment."')");
        echo "Your comment added";
    
    }

}




?>
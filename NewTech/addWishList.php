<?php

require "connection.php";

$id = $_POST["id"];
$email = $_POST["email"];

if (empty($id)) {
    echo "Somthing went wrong";
} else if (empty($email)) {
    echo "Somthing went wrong";
} else {

    $wishRs = Database::search("SELECT * FROM `wishlist` WHERE `product_id` = '" . $id . "' AND `user_email` = '" . $email . "'");
    $wishNR = $wishRs->num_rows;
    if ($wishNR == 1) {

        $wishData = $wishRs->fetch_assoc();

        Database::iud("DELETE FROM `wishlist` WHERE `id` = '" . $wishData["id"] . "'");
        echo ("Removed item from Wishlist");

    } else {

        Database::iud("INSERT INTO `wishlist`(`product_id`, `user_email`) VALUES ('" . $id . "', '" . $email . "')");
        echo ("Item added to Wichlist");


    }


}



?>
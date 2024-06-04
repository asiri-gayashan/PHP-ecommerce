<?php

require "connection.php";

$pid = $_POST["pid"];
$uemail = $_POST["uemail"];
$qty = $_POST["qty"];

if (empty($pid)) {
    echo "Somthing went wrong";
} else if (empty($uemail)) {
    echo "Somthing went wrong";
} else {

    $cartRS = Database::search("SELECT * FROM `cart` WHERE `user_email` = '" . $uemail . "' AND `product_id` = '" . $pid . "'");
    $cartNR = $cartRS->num_rows;
    if ($cartNR > 0) {

        echo ("Item already added to Cart");


    } else {

        Database::iud("INSERT INTO `cart`(`qty`, `user_email`, `product_id`) VALUES('" . $qty . "','" . $uemail . "','" . $pid . "') ");
        echo ("Item added to cart");


    }


}



?>
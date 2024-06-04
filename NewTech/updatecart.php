<?php

require("connection.php");

$cartDetails = json_decode($_POST["cartDetails"]);
// var_dump($cartDetails);



for ($i = 0; $i < sizeof($cartDetails); $i++) {
    Database::iud("UPDATE `cart` SET `qty`='" . $cartDetails[$i]->qty . "' WHERE `id` = '" . $cartDetails[$i]->cartID . "'");
}



?>
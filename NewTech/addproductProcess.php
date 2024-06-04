<?php

session_start();
if ($_SESSION["a"]) {




    require "connection.php";


    $title = $_POST["title"];
    $Autor = $_POST["Autor"];
    $isb13 = $_POST["isb13"];
    $i10 = $_POST["i10"];
    $yea = $_POST["yea"];
    $con = $_POST["con"];
    $dec = $_POST["dec"];
    $cat = $_POST["cat"];
    $stpr = $_POST["stpr"];
    $bnpr = $_POST["bnpr"];
    $qty = $_POST["qty"];
    $tax = $_POST["tax"];
    $shiptype = $_POST["shiptype"];
    $shipcost = $_POST["shipcost"];
    $pub = $_POST["pub"];
    $lang = $_POST["lang"];

    $weight = $_POST["weight"];
    $pkgtyp = $_POST["pkgtyp"];





    if (empty($title)) {
        echo ("Please enter book title");
    } else if (strlen($title) >= 100) {
        echo ("Title must less than 100 charachters");
    } else if (empty($Autor)) {
        echo ("Please enter Autor name");
    } else if (strlen($Autor) > 23) {
        echo (" Autor name must less than 20 charachters");
    } else if (!empty($isb13) && !(strlen($isb13) == 13)) {
        echo ("ISBN 13 must 13 charachters");
    } else if (empty($i10)) {
        echo ("Please enter 10 digit ISBN ");
    } else if (!is_numeric($i10)) {
        echo ("Please enter valid ISBN ");
    } else if (!(strlen($i10) == 10)) {
        echo ("ISBN 10 must 10 charachters");
    } else if (empty($yea)) {
        echo ("Please enter year ");
    } else if (!preg_match("/^[1-2][0-9]{3}$/", $yea)) {
        echo ("Year not valid");
    } else if (empty($dec)) {
        echo ("Please enter prouct description");
    } else if (strlen($dec) >= 250) {
        echo ("Description must less than 250 charachters");
    } else if ($cat == 0) {
        echo ("Please select category");
    } else if (empty($stpr)) {
        echo ("Please enter starting price");
    } else if (!preg_match("/^\d{0,5}(\.\d{1,2})?$/", $stpr)) {
        echo ("Starting price not valid");
    } else if (empty($bnpr)) {
        echo ("Please enter Buy now price");
    } else if (!preg_match("/^\d{0,5}(\.\d{1,2})?$/", $bnpr)) {
        echo ("Buy now price not valid");
    } else if (!($stpr > $bnpr)) {
        echo ("Stating price can not lower than buy now price ");
    } else if (empty($qty)) {
        echo ("Please enter quantity");
    } else if (!is_numeric($qty)) {
        echo ("Quantity not valid");
    } else if (!preg_match("/^\d{0,11}?$/", $qty)) {
        echo ("Quantity not valid");
    } else if (!empty($tax) && !(preg_match("/^\d{0,5}(\.\d{1,2})?$/", $tax))) {
        echo ("Tax price not valid");
    } else if (!preg_match("/^\d{0,5}(\.\d{1,2})?$/", $bnpr)) {
        echo ("Buy now price not valid");
    } else if (($shiptype == 2) && (!(preg_match("/^\d{0,5}(\.\d{1,2})?$/", $shipcost)) || empty($shipcost))) {
        echo ("Please enter valid shipping cost");
    } else if (empty($weight)) {
        echo ("Please enter weight");
    } else if (!preg_match("/^\d{0,11}?$/", $weight)) {
        echo ("Weight not valid");
    } else {


        $isbnRs = Database::search("SELECT * FROM `product` WHERE `isbn_10` = '" . $i10 . "'");
        $isNr = $isbnRs->num_rows;

        if ($isNr > 0) {
            echo "This Product already have in store";
        } else {



            Database::iud("INSERT INTO `product`(  `title`, `isbn_13`, `isbn_10`, `year`, `description`, `startprice`, `qty`, `tax`, 
            `publisher_id`, `condition_id`, `category_id`, `admin_id`,   `buyNow`, `author`) 
            VALUES ( '" . $title . "','" . $isb13 . "','" . $i10 . "','" . $yea . "' ,'" . $dec . "','" . $stpr . "','" . $qty . "','" . $tax . "','" . $pub . "','" . $con . "',
            '" . $cat . "','" . $_SESSION["a"]["id"] . "', '" . $bnpr . "','" . $Autor . "')");

            $productId = Database::$connection->insert_id;


            Database::iud("INSERT INTO `shipping`( `cost`, `weight`, `product_id`, `packageType_id`, `stypeId`) 
            VALUES ('" . $shipcost . "','" . $weight . "','" . $productId . "','" . $pkgtyp . "','" . $shiptype . "')");

            echo "5055";

        }







    }






} else {

    header("Location :index.php");

}



?>
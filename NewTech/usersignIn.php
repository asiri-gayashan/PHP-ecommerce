<?php

require "connection.php";

$email = $_POST["e"];
$pass = $_POST["p"];


 

$rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' AND `pass` = '" . $pass . "'");
$nr = $rs->num_rows;

if ($nr == 1) {

    $data = $rs->fetch_assoc();
    session_start();
    $_SESSION["u"] = $data;
    echo 5055;
} else {
    echo "Your email or password incorrect";
}



?>
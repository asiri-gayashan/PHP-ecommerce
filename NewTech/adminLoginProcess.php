<?php

require "connection.php";

$username = $_POST["u"];
$password = $_POST["p"];


$rs = Database::search("SELECT * FROM `admin` WHERE `email` = '" . $username . "' AND `pass` = '" . $password . "'");
$nr = $rs->num_rows;

if ($nr == 1) {

    $data = $rs->fetch_assoc();
    session_start();
    $_SESSION["a"] = $data;
    echo 5055;
} else {
    echo "Your email or password incorrect";
}
 

?>
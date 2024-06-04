<?php

require("connection.php");

$id = $_POST["id"];
Database::iud("DELETE FROM `cart` WHERE `id` = '" . $id . "'");


?>
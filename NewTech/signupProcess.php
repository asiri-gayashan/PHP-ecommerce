<?php

require "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["pass"];



if(empty($fname)) {
    echo ("Plaese enter your first name");
}else if(!preg_match('/^\pL+$/u', $fname)){
    echo ("First name is not valid, do not use symbols, numbers, spaces!");
}else if(strlen($fname) >= 30 || strlen($fname) <= 2 ){
    echo ("First name must be between 2 - 30 characters  ");
}else if (empty($lname)) {
    echo ("Plaese enter your last name");
}else if(!preg_match('/^\pL+$/u', $lname)){
    echo ("Last name is not valid, do not use symbols, numbers, spaces!");
}else if(strlen($lname) >= 30 || strlen($lname) <= 2 ){
    echo ("First name must be between 2 - 30 characters  ");
}else if (empty($email)) {
    echo ("Plaese enter your email");
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Email is not valid");
}else if(strlen($fname) >= 50 ){
    echo ("Email must be less than 50 characters  ");
}else if (empty($pass)) {
    echo ("Plaese enter password");
}else if(strlen($pass) >= 45 || strlen($pass) <= 4 ){
    echo ("Password must be between 4 - 45 characters  ");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."'");
    $nr = $rs->num_rows;
    if($nr >= 1){
        echo ("You already have an account");
    } else {

        Database::iud("INSERT INTO `user`(`email`, `fname`, `lname`, `pass`) VALUES('".$email."', '".$fname."', '".$lname."', '".$pass."')");
        echo 5055;

    }

}

?>
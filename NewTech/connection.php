

<?php

    class Database{

    public static $connection;


    public static function setupConn()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "", "ashirwadha", "3306");   
        }    
    }

    public static function iud($q)
    {

        Database::setupConn();
        Database::$connection->query($q);
    
    }

    public static function search($q)
    {
        Database::setupConn();
        $rs = Database::$connection->query($q);
        return $rs;
    }


    }




?>


 
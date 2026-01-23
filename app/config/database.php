<?php
require_once 'config.php';
class Database
{

    public static function connect()
    {
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $con;
    }
}

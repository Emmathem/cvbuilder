<?php

require_once __DIR__ . '/../helpers/conn-helper.php';

class Database
{

    private static $conn = null;

    public static function dbConnection()
    {
        global $_HOST, $_DBNAME, $_UNAME, $_PWD;

        if (!self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . $_HOST . ";dbname=" . $_DBNAME, $_UNAME, $_PWD);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e);
            }

            return self::$conn;
        } else {
            return self::$conn;
        }
    }

    private function _construct()
    {

    }


}




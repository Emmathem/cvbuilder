<?php

#!- utilize db connection disambiguation file
require_once __DIR__ . '/../../lib/helpers/conn-helper.php';

/*
 * The second configuration file to the database
 * */
class Database
{
    public $conn;

    public function dbConnection()
	{
	    global $_HOST, $_DBNAME, $_UNAME, $_PWD;

	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $_HOST . ";dbname=" . $_DBNAME, $_UNAME, $_PWD);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>

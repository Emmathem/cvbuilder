<?

#!- utilize db connection disambiguation file
require_once __DIR__ . '/../../lib/helpers/conn-helper.php';

//	Open connection to database
$conn = mysqli_connect($_HOST, $_UNAME, $_PWD, $_DBNAME)
		or die('Database Connection Error ' .mysqli_error());
?>

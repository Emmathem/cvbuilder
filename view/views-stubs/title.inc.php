<?php

$title = ucfirst( basename($_SERVER['SCRIPT_NAME'], '.php'));
$title = str_replace("_", " ", $title);
if(strtolower($title) == 'index') {
	$title = 'CvBuilder';
}
$title = ucwords($title);
?>

<?php
/**error_reporting(E_COMPILE_ERROR);
$conn = mysqli_connect("localhost","root","engineer","");
$a_link = $_GET['a_link'];
$query = "SELECT a_title FROM articles where a_link = '".$a_link."'";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){
	
$title = ucfirst( basename($_SERVER['SCRIPT_NAME'], '.php'));
$title = str_replace("_", " ", $title);
if(strtolower($title) == 'blog') {
	$title = $row['a_title'];
}
elseif 
	(strtolower($title) == 'index') {
		$title = str_replace("_", " ", $title);
			$title = "Peacful-Life";
}
else 
{
$title = ucwords($title);
}
}*/

?>
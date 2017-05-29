<?php

$title = ucfirst( basename($_SERVER['SCRIPT_NAME'], '.php'));
$title = str_replace("_", " ", $title);
if(strtolower($title) == 'index') {
	$title = 'NWT ';
}
$title = ucwords($title);
?>

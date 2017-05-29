<?php
	include("../../security/connect.php");

	$id = $_GET['id'];

	mysqli_query($conn, "DELETE FROM studentdata WHERE id = '$id'")
	or die("Cannot be deleted: ".mysqli_error($conn));

	header("Location: ../students");
	exit();
?>

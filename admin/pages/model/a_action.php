<?php
  include("../../security/connect.php");
	$userID = $_GET['userID'];

	// sending query
	mysqli_query($conn, "DELETE FROM admin WHERE userID = '$userID'")
	or die("Cannot be deleted: ".mysqli_error());

	header("Location: ../admin_settings");
	exit();
?>

<?php
	include("../../security/connect.php");

	$id = $_GET['id'];

	if(mysqli_query($conn, "DELETE FROM media WHERE id = '$id'"))
	{
        header("Location: ../manage_files.php");
		$msg = '<div style="background-color: green; padding: 10px 10px; color: white; width: 70%;"><strong>File Deleted Successfully!</strong></div>';

	}
	else {
		echo '<div style="background-color: red; padding: 10px 10px; color: white; width: 70%;"><strong>Cannot Be Deleted: File Already Dispatched</strong></div>';
	}
?>

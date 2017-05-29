<link rel="stylesheet" href = "../../assets/css/mstyle.css">
<?php
	include("../../security/connect.php");

	if(isset($_POST['delete'])) {
		$id = $_POST['selector'];

		$N = count($id);
		for ($i=0; $i < $N; $i++) {
			# code...
			mysqli_query($conn, "DELETE FROM applicants WHERE id = '$id[$i]'")
	        or die("Cannot be deleted: ".mysqli_error());
		}

		    echo "<div class='alert alert-danger'>
            <strong>Application Deleted Successfully!</strong>
            </div>";
        header("Refresh:1, url =../applications");

	}
?>

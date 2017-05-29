<?php
include("../../security/connect.php");
$id = $_GET['id'];

// sending query
mysqli_query($conn, "DELETE FROM media_cohorts WHERE id = '$id'")
or die("Cannot be deleted: ".mysqli_error($conn));

header("Location: ../dispatch-media");
exit();
?>

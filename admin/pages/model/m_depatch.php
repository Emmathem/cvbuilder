<?php
    include '../../security/connect.php';
    $id = $_GET['id'];
    $media_disp = $conn->query("INSERT INTO media_cohorts (media_id, cohort_id) SELECT `m`.`id`, `c`.`id` FROM media `m`, cohorts `c` WHERE `m`.`id` ='$id' AND `c`.`status`= 'ACTIVE'");
        if(!$media_disp)
            die("Media Not Dispatched: ".mysqli_error($conn));
        else
    // once saved, generate success message redirect back to the view page
        {
            header("location: ../dispatch-media");
            $success = '<div class="alert alert-success role="alert" alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span></button><strong>Media Dispatched Successfully!</strong></div>';
        }
?>

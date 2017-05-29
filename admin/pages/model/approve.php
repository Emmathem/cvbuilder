<link rel="stylesheet" href = "../../assets/css/mstyle.css">
<?php
error_reporting(E_COMPILE_ERROR);
include '../../security/connect.php';
/** @var $id
 *@return phpmailer
 */
    $id = $_GET['id'];

    $stud_data = $conn->query("INSERT INTO studentdata (id,fullname, useremail, userpass ,phone_no, dofb, address,
            s_origin,s_residence, occupation, edu_level, prog_lang, training_track, per_computer, regular_internet, aver_time_spent,
             training_commit, code_reason, knowledge_gained, passion_about, cohorts_id, state, created_at)
             SELECT id,fullname, useremail, userpass ,phone_no, dofb, address,
            s_origin,s_residence, occupation, edu_level, prog_lang, training_track, per_computer, regular_internet, aver_time_spent,
             training_commit, code_reason, knowledge_gained, passion_about, cohorts_id, state, created_at
             FROM applicants
             WHERE id = '$id'");
    $stud_data = $conn->query("DELETE FROM applicants WHERE id = '$id'");

    if(!$stud_data)
        die("Student Not Approved: ".mysqli_error($conn));
    else
        // once saved, generate success message redirect back to the view page
    {

         echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span></button><strong>Applicant Approved and Email Sent Successfully!</strong></div>';
        header('Refresh:2; url=../students?activated');
    }

?>

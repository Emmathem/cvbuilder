<?php
$active_page = 'applicants';
include '../lib/header.php';
?>
<?php
    $id = $_GET['id'];
    $student = approveApplicant($id);

    //Get the current UNIX Timestamp
    $now = time();

    //Get the timestamp of the person's date
    $dofb = strtotime($student['dofb']);

    //Calcuate the difference
    $difference = $now - $dofb;

    //There are 31556926 sec in a year
    $age =  floor($difference / 31556926);
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main wrap-mobile">
    <div class="row">
        <div class="col-lg-12">
            <div class="view_d" style="background-color: white; margin-top: 15px; padding: 10px 15px;">
                <div class="alert alert-success panel-title">
                    <center>
                        <strong><i class="fa fa-envelope-open fa-2x"> The Application Details of <?php echo $student['fullname']; ?></i></center></strong> </div>
                    <div class="row">
                        <div class="col-lg-7 col-lg-offset-2" style="margin-top: 5px;">
                            <div class="alert alert-warning">
                                <h4><strong>Date of Registration: <?php echo $student['created_at']; ?> | State of Training: <?php echo $student['state_name']; ?></strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11" style="padding: 10px 10px; font-size: 15px;">
                        <table align="center" class="table table-striped table-bordered table-hover table-responsive" cellpadding="10" cellspacing="10" style="width: 100%;">

                            <tr>
                                <td><label>Email Address: </label></td>
                                <td><span class="label label-info"></label><?php echo $student['useremail']; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>Phone Number: </label></td>
                                <td><span><?php echo $student['phone_no']; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>Date of Birth: </label></td>
                                <td><span><?php echo $student['dofb']; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>Age of Applicant: </label></td>
                                <td><span><?php echo "$age years"; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>Contact Address: </label></td>
                                <td><span><?php echo $student['address']; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>State of Origin: </label></td>
                                <td><span><?php echo $student['s_origin']; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>State of Residence: </label></td>
                                <td><span><?php echo $student['s_residence']; ?></span></td>
                            </tr>
                            <tr>
                                <td><label>Occupation/Education: </label></td>
                                <td><?php echo $student['occupation']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Level of Education Attainment: </label></td>
                                <td><?php echo $student['edu_level']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Do you have any prior Knowledge in Coding? :</label></td>
                                <td><?php echo $student['prog_lang']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Which of the training track are you most interested in?:</label></td>
                                <td><?php echo $student['training_track']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Do you own or have access to a Personal Computer?</label></td>
                                <td><?php echo $student['per_computer']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Do you have regular access to Internet?: </label></td>
                                <td><?php echo $student['regular_internet']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Average Time Spent on Internet Daily:</label></td>
                                <td><?php echo $student['aver_time_spent']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Will you be able to commit to three(3) <br>Months of training
                                    and complete all the courses <br>modules (online and offline): </label></td>
                                <td><?php echo $student['training_commit']; ?></td>
                            </tr>
                            <tr>
                                <td><label>Why do you want to learn to code (50 word max): </label></td>
                                <td><?php echo $student['code_reason']; ?></td>
                            </tr>
                            <tr>
                                <td><label>What do you intend to do with the knowledge<br> gained from this programs (50 word max): </label></td>
                                <td><?php echo $student['knowledge_gained']; ?></td>
                            </tr>
                            <tr>
                                <td><label>What are you passionate about? (50 word max): </label></td>
                                <td><?php echo $student['passion_about']; ?></td>
                            </tr>
                        </table>
                    </div>

                <div class="form-group" style="margin-top: 20px; margin-left: 15px;">
                    <button class="btn btn-success"><a style="color: #FFF;" href="model/approve.php?id=<?php echo $student['id']; ?>"><i class="fa fa-check"></i> Approve Application </a> </button>
                    <button class="btn btn-danger"><a style="color: #FFF;" href="model/app_action.php?id=<?php echo $student['id']; ?>"><i class="fa fa-remove"></i> Delete Application </a> </button>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

</div>
<!--/.main-->


<?php //include '../lib/footer.php'; ?>

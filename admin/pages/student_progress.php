<?php
$active_page = 'student_progress';
include ('../lib/header.php'); ?>

<?php
$id = $_GET['id'];
    $user = getAStudent($id);
    $media = getEachMediaByStudent($id);

?>
    <!-- Page Content -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main wrappanel">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin-top:20px;">
                <div class="panel panel-body">
                    <div class="col-md-6">
                        <div class="alert alert-success"><strong>The Progress of <?php echo $user['fullname']; ?></strong> </div>
                        <span class="s_details">
                            <p class="alert alert-info">Email: <strong><?php echo $user['useremail']; ?></strong></p>
                            Cohort: <b><?php echo $user['name']; ?></b> <br>
                            Phone Number: <b><?php echo $user['phone_no']; ?></b> <br>
                            State: <b><?php echo $user['state_name']; ?></b> <br>
                            Date Approved: <b><?php echo $user['created_at']; ?></b> <p></p>
                            The Materials downloaded so far:
                                    <ul class="list-group">
                                             <?php
                                                foreach ($media as $i => $m) {
                                                echo '<li class = "list-group-item"><strong>'.$m['title'].'</strong> ==> <i>'.$m['file_url'].'</i></li>';
                                            }

                                            ?>
                                    </ul>
                            </span>
                    </div>

                    <div class="col-md-6">
                        <div class="alert alert-info"><strong>The Graphical Detail of <?php echo $user['fullname']; ?></strong></div>
                        <div class="canvas-wrapper">
                            <canvas class="chart" id="pie-chart" height="251" width="502" style="width: 502px; height: 251px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4 class="panel-title">Student <i style="font-size: 12px; color: white;">(Approved Applicants)</i></h4></div>
                        <div class="panel-body">

                            <table cellspacing="0" width="100%" id="stud-data-table" class="table table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Names</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>State</th>
                                    <th>Cohort</th>
                                    <th>Approved at</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php echo studentData(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->
    <script src ="../assets/javascript/jquery.min.js"></script>
    <script src="../assets/javascript/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#stud-data-table').DataTable();
        });
        $('#stud-data-table').removeClass('display').addClass('table table-bordered');
    </script>


<?php //include '../lib/footer.php'; ?>

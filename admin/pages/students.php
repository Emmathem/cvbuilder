<?php
$active_page = 'students';
include '../lib/header.php'; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <?php include '../lib/site_info.php'; ?>
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
    <!--/.row-->

    <script src="../assets/javascript/jquery.min.js"></script>
    <script src="../assets/javascript/datatables.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#stud-data-table').DataTable();
        });
        $('#stud-data-table').removeClass('display').addClass('table table-bordered');

    </script>
</div>
<!--/.main-->
<?php //include '../lib/footer.php'; ?>

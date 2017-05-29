<?php
$active_page = 'applications';
include '../lib/header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main wrappanel">
    <?php include '../lib/site_info.php'; ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Applicants</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4 class="panel-title">Unapproved Applicants</h4></div>
                <div class="panel-body">

                    <form method="post" action="model/app_action">
                        <table id="example" cellspacing="0" width="100%" class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectbox" class=""><br><span style="color: red;">Del</span> </th>
                                    <th>S/N</th>
                                    <th>Names</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>State</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo applicants(); ?>
                            </tbody>
                        </table>
                        <button class="btn btn-danger" type="submit" name="delete"><i class="fa fa-remove"> Delete Application(s) </i></button>


                    </form>



                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

</div>
<!--/.main-->

 <script src ="../assets/javascript/jquery.min.js"></script>
    <script src="../assets/javascript/datatables.min.js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#example').removeClass('display').addClass('table table-bordered');
</script>


<script>
    $(document).ready(function(e) {
        $('#selectbox').click(function(event) {
            //onclick the checkbox
            if (this.checked) {
                $('.checkbox1').each(function() {
                    this.checked = true;
                    //select all checkboxes with class checkbox1
                });
            } else {
                $('.checkbox1').each(function() {
                    //Delect all checkboxes with class checkbox1
                    this.checked = false;
                });
            }
        });
    });

</script>
<script>
    $(document).ready(function(e) {
        $('#selectbox2').click(function(event) {
            //onclick the checkbox
            if (this.checked) {
                $('.checkbox2').each(function() {
                    this.checked = true;
                    //select all checkboxes with class checkbox1
                });
            } else {
                $('.checkbox2').each(function() {
                    //Delect all checkboxes with class checkbox1
                    this.checked = false;
                });
            }
        });
    });

</script>
<?php //include '../lib/footer.php'; ?>

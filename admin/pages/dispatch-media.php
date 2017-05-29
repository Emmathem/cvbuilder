<?php
$active_page = 'dispatch-media';
include ('../lib/header.php'); ?>
    <!-- Page Content -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main wrappanel">
        <?php include '../lib/site_info.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dispatched Files</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                     <!-- /.panel -->
                    <!--Another Panel 2-->
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h4 class="panel-title">Dispatched Files</h4></div>
                            <div id="open_panel" class="panel-collapse collapse.in table_pad">
                                <table id="media-table" class="table table-striped table-bordered" cellpadding="2" cellspacing="2">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Size</th>
                                        <th>Details</th>
                                        <th>Week</th>
                                        <th>Cohort</th>
                                        <th>Date Dispatched</th>
                                        <th>Downloads</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo adminDispatchMedia();  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End of panel 2-->
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
            $('#media-table').DataTable();
        });
        $('#example').removeClass('display').addClass('table table-bordered');
    </script>
<?php //include '../lib/footer.php'; ?>

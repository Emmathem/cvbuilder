<?php
$active_page = 'manage_files';

ini_set('upload_max_filesize', '250M');
ini_set('post_max_size', '250M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
include ('../lib/header.php');
error_reporting(E_COMPILE_ERROR);

$add_file = new USER();

if(isset($_POST['addFile']))
{
  if($add_file->upload_file($title, $type, $size, $file_url, $file_desc, $file_week, $uploadID))
    {
      $msg = "
          <div class='alert alert-success'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong>  File Uploaded Successfully
            </div>";
    }
    else
    {
      echo "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Sorry , Query could no execute...</strong>
          </div>";
    }
  }
?>

       <!-- Page Content -->
  	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main wrappanel">
    <?php include '../lib/site_info.php'; ?>
        <div id="page-wrapper"
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12" >
                    <a style="padding-left: 10px; color: #fff;: ;" data-toggle="collapse" data-parent="#accordion" href="#close_panel"><button class="btn btn-primary">Click to upload files</button></a>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">

                                    <div id="close_panel" class="panel-collapse collapse table_pad">
                                        <div class="panel-body" style="background-color: #fff;">
                                            <div class="col-md-5 col-md-offset-3">
                                                <div class="auth-alert"><?php if(isset($msg)) echo $msg; ?></div>
                                            <form action=""  method="post" enctype="multipart/form-data" class="form-horizontal" >
                                                <div class="form-group">
                                                    <label for="name" class="">File Title</label>
                                                    <input class="form-control" type="text" name="title" value="" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="">Week</label>
                                                    <?php
                                                    $options=0;
                                                    for($week=1; $week<=8; $week++)
                                                    {
                                                        $options.="<option value='Week ".$week."'>".$week."</option>";
                                                    }
                                                    ?>
                                                    <select name="file_week" class="form-control" required = 'required'>
                                                        <?php echo $options; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="prodmage" class="">File Image</label>
                                                    <input class="form-control" type="file"  name="thumb" id="thumb" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="filedetail" class="">File Description</label>
                                                    <textarea class="form-control" rows="5" cols="3" name="file_desc" required="required"></textarea>
                                                </div>
                                                <div class="form-group" style="margin-left:50px;">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <input type="submit" name="addFile" value="Submit" class="btn btn-sm btn-default form-control"/>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-lg-6 (nested) -->
                </div> <!-- /.row (nested) -->

                    <!-- /.panel -->
                     <!--Another Panel 2-->
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                        <div class="panel-heading"><h4 class="panel-title">Manage Files</h4></div>
                            <div id="open_panel" class="panel-collapse collapse.in table_pad">
                                <div class="auth-alert"><?php if(isset($msg)) echo $msg; ?></div>
                                <table id="media-table" class="table table-striped table-bordered" cellpadding="2" cellspacing="2">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Details</th>
                                            <th>Week</th>
                                            <th>Added By</th>
                                            <th>Date Uploaded</th>
                                            <th>Downloads</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo admin_manage_file();  ?>
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

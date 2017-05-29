<?php
$active_page = 'admin_settings';
require '../security/class.user.php';
//$user_status = new USER();
//
//if($user_status->getPrivilege() != USER::PRIVILEGE_SUPER)
//{
//  $user_status->redirect('../');
//}

$reg_user = new USER();

if(isset($_POST['btn-signup']))
{
  $fullname = trim($_POST['fullname']);
  $email = trim($_POST['txtemail']);
  $upass = trim($_POST['txtpass']);
  $code = md5(uniqid(rand()));

  $stmt = $reg_user->runQuery("SELECT * FROM admin WHERE userEmail=:email_id");
  $stmt->execute(array(":email_id"=>$email));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($stmt->rowCount() > 0)
  {
    $msg = "
          <div class='alert alert-warning'>
        <button class='close' data-dismiss='alert'>&times;</button>
          <strong>Sorry !</strong>  email allready exists , Please Try another one
        </div>
        ";
  }
  else
  {
    if($reg_user->register($fullname,$email,$upass,$code))
    {
      $id = $reg_user->lasdID();
      $key = base64_encode($id);
      $id = $key;

      $message = "
            Hello $fullname,
            <br /><br />
            Welcome to NWT!<br/>
            To complete your registration  please , just click following link<br/>
            <br /><br />
            <a href='http://localhost/nwt-app/admin/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
            <br /><br />
            Thanks,";

      $subject = "Confirm Registration";

      $reg_user->send_mail($email,$message,$subject);
      $msg = "
          <div class='alert alert-success'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong>
            </div>
          ";
    }
    else
    {
      echo "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Sorry , Query could no execute...</strong>
          </div>";
    }
  }
}
?>
<?php include ('../lib/header.php'); ?>
<!-- Page Content -->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php include '../lib/site_info.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
         <h1 class="page-header">Our Expert Team</h1>
        </div>
        <div class="col-md-5"> <!-- /.end of col-md-5 -->
          <div class="panel panel-default"> <!-- /.panel-default -->
              <div class="panel-heading"><h4 class="panel-title"><i class = "fa fa-plus"></i>  Add Profile of Team Member </h4></div><!-- /.end of panel-heading -->
            <div class="panel-body"><!--Panel body-->
              <div style="margin-left:3px; margin-right: 3px;">
              <div class="auth-alert"><?php if(isset($msg)) echo $msg; ?></div>
                <form class="form-horizontal" method="post" action="">
                  <div class ="form-group">
                    <label class="control-label sr-only">Fullname</label>
                    <div class="input-group">
                      <span class = "input-group-addon"><i class = "fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Enter you fullname" name="fullname" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label sr-only">Email Address</label>
                    <div class="input-group">
                      <span class = "input-group-addon"><i class = "fa fa-envelope"></i></span>
                      <input type="email" class="form-control" placeholder="Email address" name="txtemail" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label sr-only">Password</label>
                    <div class="input-group">
                      <span class = "input-group-addon"><i class = "fa fa-key"></i></span>
                      <input type="password" class="form-control" placeholder="Password" name="txtpass" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="btn-signup">Add New Admin</button>
                  </div>
                </form>
              </div> <!--end of margin-left;-->
            </div>   <!--end of panel body -->
     			</div><!-- /.end of panel-default -->
        </div> <!-- /.end of col-md-5 -->
        <div class="col-md-7">
          <div class="panel panel-default">
              <div class="panel-heading"><h4 class="panel-title">Admin Data</h4></div>
              <div class="panel-body">
                <?php echo manage_admins(); ?>
              </div>
          </div>
        </div>
   		</div> <!-- /.end of row -->


    </div> <!-- /.end of container-fluid -->
</div><!-- /#main -->
<?php include '../lib/footer.php'; ?></div>

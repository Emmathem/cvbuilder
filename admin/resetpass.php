<?php
require_once 'security/class.user.php';
$user = new USER();

if(empty($_GET['id']) && empty($_GET['code']))
{
	$user->redirect('./');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = base64_decode($_GET['id']);
	$code = $_GET['code'];

	$stmt = $user->runQuery("SELECT * FROM admin WHERE userID=:uid AND tokenCode=:token");
	$stmt->execute(array(":uid"=>$id,":token"=>$code));
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);

	if($stmt->rowCount() == 1)
	{
		if(isset($_POST['btn-reset-pass']))
		{
			$pass = $_POST['pass'];
			$cpass = $_POST['confirm-pass'];

			if($cpass!==$pass)
			{
				$msg = "<div class='alert alert-block'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Sorry!</strong>  Password Doesn't match.
						</div>";
			}
			else
			{
				$password = md5($cpass);
				$stmt = $user->runQuery("UPDATE admin SET userPass=:upass WHERE userID=:uid");
				$stmt->execute(array(":upass"=>$password,":uid"=>$rows['userID']));

				$msg = "<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						Password Changed.
						</div>";
				header("refresh:5;index.php");
			}
		}
	}
	else
	{
		$msg = "<div class='alert alert-success'>
				      <button class='close' data-dismiss='alert'>&times;</button>	No Account Found, Try again
            </div>";

	}


}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NWT ADMIN PORTAL - Dashboard</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/datepicker3.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
<link  href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--Icons-->
<script src="assets/javascript/lumino.glyphs.js"></script>

    <? require_once __DIR__ . '/../views/view-stubs/favicons.php'?>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
      .login_bg {background: url(../images/loginbgtrans.png) center no-repeat;background-attachment:fixed; }
      .other_links {color: #FFF;}
    </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>NWT </span>Admin Portal</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="dashboard">Dashboard</a>
          </li>
        </ul>
      </div>

    </div><!-- /.container-fluid -->
  </nav>
        <div class="col-sm-9 col-sm-offset-1 col-lg-10 col-lg-offset-2 main login_bg">
            <div class="container-fluid">
                <div class="row">
                  <div class="panel-body">
	                    <div class="row">
                       	  <div class="col-md-8 col-md-offset-2 animated fadeInDown">
                                <div class="panel panel-success">
                       		        <div class="panel-heading">
                            			<h4 class="modal-title">Enter New Password <i style="float:right;" class="fa fa-key fa-2x"></i></h4></div>
                                	    <div class="panel-body">
                                            <div class='alert alert-success'>
                                                <strong>Hello !</strong>  <?php echo $rows['fullName'] ?> you are here to reset your forgetton password.
                                            </div>
                                            <form class="form-signin" method="post">
                                            <h3 class="form-signin-heading">Password Reset.</h3><hr />
                                            <?php
                                            if(isset($msg))
                                            {
                                                echo $msg;
                                            }
                                            ?>
                                            <div class="form-group">
                                                <label for="new-pass" class="control-label sr-only"></label>
                                                <div class="input-group">
                                                 <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                 <input type="password" class="form-control" placeholder="New Password" name="pass" required />
                                                </div>

                                            </div>
                                            <div class="form-group">
                                            <label for="repeat-new-pass" class="control-label sr-only"></label>
                                                <div class="input-group">
                                                 <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                 <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm-pass" required />
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="modal-footer">
                                            <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Reset Your Password</button>
                                            </div>

                                          </form>
                                         </div>
                              	</div>
                            </div>
    					</div>
      				</div>
      			</div>
      		</div>
      	</div>
    </div> <!-- /container -->
   <script src="js/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="css/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="css/bootstrap/js/sb-admin-2.js"></script>
<div class="footer  modal-footer"><?php include 'footer.php'; ?></div>
  </body>
</html>

<?php
session_start();
require_once 'security/class.user.php';
$user = new USER();

if($user->is_logged_in()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-submit']))
{
	$email = $_POST['txtemail'];

	$stmt = $user->runQuery("SELECT userID FROM admin WHERE userEmail=:email LIMIT 1");
	$stmt->execute(array(":email"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() == 1)
	{
		$id = base64_encode($row['userID']);
		$code = md5(uniqid(rand()));

		$stmt = $user->runQuery("UPDATE admin SET tokenCode=:token WHERE userEmail=:email");
		$stmt->execute(array(":token"=>$code,"email"=>$email));

		$message= "
				   Hello , $email
				   <br /><br />
				   We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore this email,
				   <br /><br />
				   Click Following Link To Reset Your Password
				   <br /><br />
				   <a href='http://localhost/nwt-app/admin/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
				   <br /><br />
				   thank you :)
				   ";
		$subject = "Password Reset";

		$user->send_mail($email,$message,$subject);

		$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password.
			  	</div>";
	}
	else
	{
		$msg = "<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  This Email does not exist.
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
                       	  <div class="col-md-8 col-md-offset-1 animated fadeInDown">
                                <div class="panel panel-success">
                       		        <div class="panel-heading">
                            			<h4 class="modal-title">Recover your password <i style="float:right;" class="fa fa-key fa-2x"></i></h4></div>
                                	    <div class="panel-body">
											<form class="form-signin" method="post">
                                        		<?php
                                                    if(isset($msg))
                                                    {
                                                        echo $msg;
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <div class='alert alert-info'>
                                                        Please enter your email address. You will receive a link to create a new password via email.!
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
        									<div class="form-group">
                                    		<label for="recover-passowrd" class="control-label sr-only">Recover Password:</label>
                                            	<div class="input-group">
										        	<span class = "input-group-addon"><i class = "fa fa-envelope"></i></span>
										        	<input type="email" class="form-control" placeholder="Enter Your Registered Email Address" name="txtemail" required />
										        </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Generate new Password</button>
                                        <button class="btn  btn-default" ><a href="./">Log in</a></button>
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
      <!-- /#wrapper -->

  <script src="assets/javascript/jquery-1.11.1.min.js"></script>
  <script src="assets/javascript/bootstrap.min.js"></script>
  <script src="assets/javascript/chart.min.js"></script>
  <script src="assets/javascript/chart-data.js"></script>
  <script src="assets/javascript/easypiechart.js"></script>
  <script src="assets/javascript/easypiechart-data.js"></script>
  <script src="assets/javascript/bootstrap-datepicker.js"></script>
  <script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
</body>

</html>

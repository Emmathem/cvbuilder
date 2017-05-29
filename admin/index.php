<?php

session_start();
error_reporting(E_COMPILE_ERROR);
require_once 'security/class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
  $user_login->redirect('dashboard');
}

if(isset($_POST['submit']))
{
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if($user_login->login($username,$password))
  {
    $user_login->redirect('dashboard');
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
<link href="assets/css/mstyle.css" rel="stylesheet" type="text/css">

<!--Icons-->
<script src="assets/javascript/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

    <? require_once __DIR__ . '/../views/view-stubs/favicons.php'?>

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
          <a class="navbar-brand" href="./"><img class="ad-logo" src = "assets/images/nwt_logo-2.png" alt="NWT LOGO" align = "left"><span>Admin Portal</span></a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="dashboard">Dashboard</a>
          </li>
        </ul>
      </div>

    </div><!-- /.container-fluid -->
  </nav>
	<div class="col-sm-9 col-sm-offset-1 col-lg-10 col-lg-offset-2 main">
		 <!-- Page Content -->
        <div id="page-wrapper" class="login_bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel-body">
	                    <div class="row">
                       	  <div class="col-md-6 col-md-offset-2 animated fadeInDown">
                                <div class="panel panel-success">
                       		        <div class="panel-heading">
                            			<h4 class="modal-title">Admin Log In <i style="float:right;" class="fa fa-key fa-2x"></i></h4></div>
                                	    <div class="panel-body">
							            <p>
							        	<div class="auth-alert">
							             <?php
											if(isset($_GET['inactive']))
											{
												?>
									            <div class='alert alert-warning'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
												</div>
									            <?php
											}
											?>
									        <form class="form-signin" method="post">
									        <?php
									        if(isset($_GET['error']))
											{
												?>
									            <div class='alert alert-danger'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<strong>Wrong Details!</strong>
												</div>
									            <?php
											}
										    ?>
                                            </form>
                                        </div>

						        	<form method="post" name="login" action="">
						            	<div class="form-group">
						            	<label for = "username" class="sr-only">Email Address:</label>
						               	<div class="input-group">
						               	 <span class="btn input-group-addon"><i class="fa fa-envelope"></i></span>
						               	 <input type="text" name="username" placeholder="Enter your Email Address" class= "form-control">
						                </div>
						              </div>
						              <div class="form-group">
						                <label for="password" class="sr-only">Password:</label>
						                <div class="input-group">
						                <span class="btn input-group-addon"><i class="fa fa-eye"></i></span>
						                <input type="password" name="password" placeholder="Password" class="form-control">
						              </div>
                                        </div>
						              <div class="modal-footer">
						      	       <a href="recover_password">Forgot Password?</a>
						                <button type="submit" name="submit" class="btn btn-primary">Login</button>
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
</div>


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

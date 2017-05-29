<?php
session_start();
require_once 'security/class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('./');
}

$stmt = $user_home->runQuery("SELECT * FROM admin WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard.::NWT ADMIN PORTAL</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/mstyle.css" rel="stylesheet" type="text/css" >
<!--Icons-->
<script src="assets/javascript/lumino.glyphs.js"></script>

    <? require_once __DIR__ . '/../views/view-stubs/favicons.php'?>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<? require_once 'security/db_transact.php'; ?>

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
				<li class="pull-left"><a href="dashboard">Dashboard</a></li> &nbsp; &nbsp;
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo 'Welcome ' .$row['fullName']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a tabindex="-1" href="logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 wrap-mobile">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
	<div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading head_dash">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-user"></i>
              </div>
              <div class="col-xs-7 text-center">
                <div class="huge"><i class="fa fa-user fa-3x"></i></div>

              </div>
            </div>
          </div>
          <a href="pages/applications" format="homemenu">
            <div class="panel-footer">
              <span class="pull-left">Manage Applications</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>
        <!----Another Tab---->

        <!----Another Tab---->
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading head_dash">
            <div class="row">
             <div class="col-xs-3">
               <i class="fa fa-user"></i>
             </div>
              <div class="col-xs-7 text-right">
                <div class="huge"><i class="fa fa-user fa-3x"></i></div>
                <div></div>
              </div>
            </div>
          </div>
          <a href="pages/admin_settings" format="homemenu">
            <div class="panel-footer">
              <span class="pull-left">Manage Admin(s)</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>
      <!----Another Tab---->
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
          <div class="panel-heading head_dash">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-pencil"></i>
              </div>
              <div class="col-xs-7 text-right">
                <div class="huge"><i class="fa fa-sticky-note fa-3x"></i></div>
                <div></div>
              </div>
            </div>
          </div>
          <a href="pages/students" format="homemenu">
            <div class="panel-footer">
              <span class="pull-left">Manage Students</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>


        <!----Another Tab---->


        <!---End of Another tab---->

         <!--Another Tab-->
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading head_dash">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-upload"></i>
              </div>
              <div class="col-xs-7 text-right">
                <div class="huge"><i class="fa fa-upload fa-3x"></i></div>
              </div>
            </div>
          </div>
          <a href="pages/manage_files" format = "homemenu">
            <div class="panel-footer">
              <span class="pull-left">Manage Files</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
              </div>
          </a>
        </div>
      </div>
      </div><!--end of first row-->
      <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary ">
          <div class="panel-heading head_dash">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-upload"></i>
              </div>
              <div class="col-xs-7 text-right">
                <div class="huge"><i class="fa fa-upload fa-3x"></i></div>
              </div>
            </div>
          </div>
          <a href="pages/dispatch-media" format = "homemenu">
            <div class="panel-footer">
              <span class="pull-left">Dispatched Files</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
              </div>
          </a>
        </div>
      </div>

        </div>
        <div>
        <!---End of Another tab---->

		<?php include 'lib/site_info.php'; ?>

		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="assets/javascript/jquery-1.11.1.min.js"></script>
	<script src="assets/javascript/bootstrap.min.js"></script>
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

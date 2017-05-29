<?php
include 'title.inc.php';
session_start();
require_once '../security/class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
  $user_home->redirect('../');
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
        <title>
            <?php echo "$title | NWT ADMIN PORTAL"; ?>
        </title>

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        <link href="../assets/css/animate.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/mstyle.css" rel="stylesheet" type="text/css">

        <!--Icons-->
        <script src="../assets/javascript/lumino.glyphs.js"></script>

        <? require_once __DIR__ . '/../../views/view-stubs/favicons.php'?>

        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
        <? require_once '../security/db_transact.php'; ?>

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
                    <a class="navbar-brand" href="./"><img class="ad-logo" src = "../assets/images/nwt_logo-2.png" alt="NWT LOGO" align = "left"><span>Admin Portal</span></a>

                    <ul class="user-menu">
                        <li class="pull-left"><a href="../dashboard">Dashboard</a></li> &nbsp; &nbsp;
                        <li class="pull-left"></li>
                        <li class="pull-left"></li>
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo 'Welcome ' .$row['fullName']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a tabindex="-1" href="../logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <?php include 'side_nav.php'; ?>
        </div>
        <!--/.sidebar-->

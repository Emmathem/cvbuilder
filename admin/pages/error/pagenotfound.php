<?php
/**
 * Created by PhpStorm.
 * User: EMMATHEM
 * Date: 5/3/2017
 * Time: 12:31 PM
 */
include '../../lib/title.inc.php';
?>
<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo "$title | NWT ADMIN PORTAL"; ?></title>

<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/css/styles.css" rel="stylesheet">
<link href="../../assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="../../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/css/mstyle.css" rel="stylesheet" type="text/css">

<!--Icons-->
<script src="../../assets/javascript/lumino.glyphs.js"></script>

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
            <a class="navbar-brand" href="../../../admin"><span>NWT </span>Admin Portal</a>

            <ul class="user-menu">
                <li class="pull-left"><a href="../../dashboard">Dashboard</a></li> &nbsp; &nbsp;
                <li class="pull-left"></li>
                <li class="pull-left"></li>
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a tabindex="-1" href=""><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

</div>
<!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main wrappanel">
    <center>
        <span class="error-page">404</span>
       <h2>The Resources you are looking for has either been Moved Or Not Exist</h2>
   </center>

</div>
<!--/.main-->

<?php //include '../lib/footer.php'; ?>

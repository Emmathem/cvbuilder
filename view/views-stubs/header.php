<?php
    require_once __DIR__ . '../../../lib/Helpers/include-linkbuilder.php';
require_once __DIR__ . '/title.inc.php';
?>
<html>
<head>
    <title> <?php echo "$title | Emmathem Media Company"; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/web.css">
    <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/animate.css">
    <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/owl.theme.default.min.css">
    <link rel = "stylesheet" href = "<? echo LINK_PREFIX; ?>assets/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "<? echo LINK_PREFIX; ?>assets/css/manage.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400|Open+Sans:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
    <? require_once __DIR__ . '/favicons.php'?>
</head>
<body>
    <!-- Fixed navbar -->
    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="<? echo LINK_PREFIX; ?>"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="navlink scroll-to" href="<? echo LINK_PREFIX; ?>">Home</a></li>
                        <li><a href="<? echo LINK_PREFIX; ?>#about" class="navlink scroll-to">About</a></li>
                        <li><a href ="<? echo LINK_PREFIX; ?>blog">Blog</a></li>
                        <li><a href="<? echo LINK_PREFIX; ?>contact" class="navlink scroll-to">Contact</a></li>
                        <li>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <a href="getstarted" type="submit" class="btn btn-get-start" id="sign-in-btn-1">Click Here To Get Started</a>
                                </div>
                                
                            </form>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>

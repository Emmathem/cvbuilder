<?php
    require_once __DIR__ . '../../../lib/Helpers/include-linkbuilder.php';
require_once __DIR__ . '/title.inc.php';
?>
    <html>

    <head>
        <title>
            <?php echo "$title | Emmathem Media Company"; ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/web.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/animate.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/manage.css">
        <link rel="stylesheet" href="<? echo LINK_PREFIX; ?>assets/css/dashboard.css">
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
        <nav class="navbar navbar-default no-margin">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header fixed-brand">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                </button>
                <a class="navbar-brand" href="<?= LINK_PREFIX; ?>"></a>
            </div>
            <!-- navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
                    </li>
                </ul>
            </div>
            <!-- bs-example-navbar-collapse-1 -->
        </nav>
        </header>

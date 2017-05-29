<html>

<head>
    <title> Cv Builder | Emmathem Media Company</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/web.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400|Open+Sans:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <? require_once __DIR__ . '../../lib/Helpers/include-linkbuilder.php '?>
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
                    <a class="navbar-brand" href="">CvBuilder</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="navlink scroll-to" href="<? echo LINK_PREFIX; ?>">Home</a></li>
                        <li><a href="<? echo LINK_PREFIX; ?>#about" class="navlink scroll-to">About</a></li>
                        <li><a href="<? echo LINK_PREFIX; ?>contact" class="navlink scroll-to">Contact</a></li>
                        <li>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <a href="" type="submit" class="btn btn-get-start" id="sign-in-btn-1">Click Here To Get Started</a>
                                </div>

                            </form>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <section class = "about-page">
        <div class="wow fadeInDown" data-wow-duration=".9s" data-wow-delay=".6s"><h2>About Us</h2></div>
    </section>
    <section id = "about" class="about-us-inner about-page-bg">
      <div class="about-page-cover"></div>
       <div>
            <div class="col-md-offset-2 col-sm-11 col-md-8">
               <div class="about-us-context">

                    CvBuilder is a brand in Emmathem Media Company, where professional, review and design your Curriculum Vitae or otherwise called Resume.
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex earum praesentium doloremque, ratione recusandae, assumenda, nemo dolores voluptate doloribus nostrum impedit eligendi deleniti minima! Maiores placeat, vitae voluptatum quibusdam neque?
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis praesentium quo laudantium quos voluptatem cumque repellat. Harum ad nesciunt rem soluta excepturi sequi, quis fuga aut aliquid at. Quas, reprehenderit.
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nihil et, fugit modi impedit necessitatibus nemo voluptatem laboriosam laudantium, pariatur facere voluptatibus odit, saepe libero ipsum perspiciatis quos! Et, dolorem.
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit maxime tempore dolorem in molestias est voluptatibus sint, recusandae autem modi, sunt voluptate vero vitae id necessitatibus itaque ad! Autem, velit!
            </div>
           </div>
        </div>
    </section>

<?php include 'views-stubs/footer.php'; ?>

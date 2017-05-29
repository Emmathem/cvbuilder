<html>

<head>
    <title> Cv Builder | Emmathem Media Company</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/web.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel = "stylesheet" href = "assets/css/fontawesome.min.css">
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

    <section class="contact-page">
        <div class="contact-page-cover"></div>
        <div class="contact-inner wow fadeInDown" data-wow-duration=".9s" data-wow-delay=".4s">
            <h2>Contact Us</h2>
        </div>
    </section>
    <section id="contact" class="">
        <div>
            <div class="col-md-offset-1 col-sm-12 col-md-11">
                <div class="contact-inner">
                    <div class = "col-md-5 wow fadeInDown detail" data-wow-delay =".6s" data-wow-duration = ".9s">
                        <h3>Our Contact Details</h3>
                        <div class ="contact-address">
                            <i class = "fa fa-home"></i> Planet Nest, Redepmtion Road, Akure <br>
                            <i class = "fa fa-phone"></i> 0903533635, 07068912907 <br>
                            <i class = "fa fa-clock-o"></i> 8am - 4pm (Mon - Sat)
                        </div>
                    </div>
                    <div class = "col-md-5">
                        <form class = "form-horizontal" action = "" method = "post">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type = "text" name ="name" placeholder = "Enter your Fullname" class = "form-control">
                            </div>
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type = "email" name ="email" placeholder = "Enter your Email Address" class = "form-control">
                            </div>
                            <div class="form-group">
                               <label>Your Message:</label>
                                <textarea name = "message" class="form-control" cols = "6" rows ="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button class = "btn btn-msg" name = "submit" type = "submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'views-stubs/footer.php'; ?>

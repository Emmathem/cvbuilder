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
    <? require_once __DIR__ . '../lib/Helpers/include-linkbuilder.php '?>
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

    <div class="header-wrapper-carousel owl-carousel owl-theme">
        <?php include 'view/views-stubs/slide.php'; ?>
    </div>
    <section id="cv-info" class="cv-info-section">
        <div>
            <div class="col-sm-12 col-md-11">
                <div class="cv-info-section-inner">
                    <h3>More Facts About Your Resume</h3>
                    <div class="cv-info-slide">
                        what
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about-us-over">
        <div class="about-us-cover"></div>
        <div>
            <div class="col-sm-12 col-md-11">
                <div class="about-us-inner">
                    <h3>About Us</h3>
                </div>
                <div class="col-sm-offset-2 col-xs-12 wow fadeInLeftBig" data-wow-duration=".8s" data-wow-delay=".6s">
                    CvBuilder is a ... <a href="<? echo LINK_PREFIX; ?>about-us">read more</a>
                </div>
            </div>
        </div>
    </section>
    <section id="updates" class="cv-updates">
        <div class="col-sm-12 col-md-11">
            <div class="cv-updates-inner">
                <h3>Join Us Today and Receive Update</h3>
                <div>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only">Email address</label>
                            <input type="email" class="cv-update-form" placeholder="Enter Your Email Address">
                        </div>
                        <button type="submit" class="btn btn-cv">Submit</button>
                    </form>
                    <div class="cv-image-update wow fadeIn" data-wow-duration=".9s" data-wow-delay=".9s">
                        <img src="assets/images/bg_18.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimony" class="cv-testimony">
        <div class="cv-testimony-cover"></div>
        <div class="col-sm-12 col-md-11">
            <div class="cv-testimony-inner">
                <h3>What People Are Saying About Us.</h3>
            </div>
        </div>
    </section>
    <?php include 'view/views-stubs/footer.php'; ?>

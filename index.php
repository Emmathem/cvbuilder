<?php include 'view/views-stubs/header.php'; ?>
<div class="header-wrapper-carousel owl-carousel owl-theme">
    <?php include 'view/views-stubs/slide.php'; ?>
</div>
<section class="cv-fact-header">
    <div class="cv-fact-section-inner">
        <h3>Facts And Figures of CV</h3>
    </div>
</section>
<section class="cv-fact owl-carousel owl-theme container-fluid cv-info-section">
    <div class="cv-info-slide">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-offset-2 col-md-8 col-xs-12 ">
                    <span>
                       Your CV has less than 30 seconds to impress any potential employer
                    </span>
                </div>
            </div>
        </div>
    <div class="cv-info-slide">
            <div class=" col-md-offset-2 col-md-8  col-xs-12">
                <div class="cv-inner-info container-fluid">
                    <span> Over 70% of CVs are missing vital information and, as a result are discarded by an employer. </span>
                </div>
            </div>
        </div>
    <div class="cv-info-slide " style="margin:auto;">
        <div class="col-md-offset-2 col-md-8 col-xs-12">
            <span>In 2001, MORI conducted research that 33% of applicants have admitted to lying on their CV or job application. This figure has now risen to 8 out of 10 applicants. </span>
        </div>
    </div>
    <div class="cv-info-slide">
        <div class="col-md-offset-2 col-md-8 col-xs-12">
            <span>The Personal Statement is the most important part of your C.V, it will either entice or put of an employer.</span>
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
            <div class="art">
                The Recent Articles posted
                <?php echo date('m-d-Y') ?>... <a href="articles">Recent Articles</a>
            </div>

        </div>
    </div>
</section>
<?php include 'view/views-stubs/footer.php'; ?>

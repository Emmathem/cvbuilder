<?php include 'view/views-stubs/header.php'; ?>
    <div class="header-wrapper-carousel owl-carousel owl-theme">
        <?php include 'view/views-stubs/slide.php'; ?>
    </div>
    <section id="cv-info" class="cv-info-section">
        <div>
            <div class="col-sm-12 col-md-11">
                <div class="cv-info-section-inner">
                    <h3>More Facts About Your Resume</h3>
                    <div class=" col-md-9 col-md-offset-4 cv-info-slide">
                        Everyone knows you never get a second chance to make a first impression. But what some job seekers do not realise is that a CV is the first impression you leave on a prospective employer so it is no exaggeration to say that a bad CV can ruin your chances of being hired. 
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
                <div class ="art">
                    The Recent Articles posted <?php echo date('m-d-Y') ?>... <a href = "articles">Recent Articles</a>    
                </div>
                
            </div>
        </div>
    </section>
    <?php include 'view/views-stubs/footer.php'; ?>

<?php include 'views-stubs/header.php'; ?>
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
                    <div class = "col-md-5 wow fadeIn detail" data-wow-delay =".6s" data-wow-duration = ".9s">
                        <h3>Our Contact Details</h3>
                        <div class ="contact-address">
                            <i class = "fa fa-home"></i> Planet Nest, Redemption Road, Akure <br>
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
                                <textarea name = "message" class="form-control" cols = "6" rows ="8" placeholder = "Enter your message"></textarea>
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

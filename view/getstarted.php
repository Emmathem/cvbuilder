<?php include 'views-stubs/header.php'; ?>
<section id="contact" class="">

       <div class="col-lg-offset-3 col-lg-6 col-sm-6 col-md-6">
       <div class = "panel-heading animated fadeInDown">You Need An Account to Get Started</div>
        <div class="login-container-2">
            <div class="panel panel-primary">
                <div class="panel-body">

                     <div class="col-md-12">
                        <form class="add-admin-form" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label sr-only">Fullname</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                    <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                    <input type="text" class="form-control" placeholder="Enter Your username" name="username" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                    <input type="email" class="form-control" placeholder="Email address" name="useremail" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                    <input type="text" class="form-control" placeholder="Password" name="userpass" value="" />

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-submit" type="submit" name="submit">Register</button>
                                <a href="" href="">Already have an account?</a>
                            </div>
                            <div class = "form-group">
                               <div class = "social-login">
                                Sign Up with
                                <div class = "row container">
                                    <div class="col-sm-3"><i class = "fa fa-facebook"></i>Facebook</div>
                                    <div class="col-sm-3"><i class = "fa fa-twitter"></i>Twitter</div>
                                    <div class="col-sm-3"><i class = "fa fa-google-plus"></i>GooglePlus</div>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <div>

    </div>
</section>

<?php include 'views-stubs/footer.php'; ?>

<?php include 'views-stubs/header.php'; ?>
    <section class="contact-page">
        <div class="contact-page-cover"></div>
        <div class="contact-inner wow fadeInDown" data-wow-duration=".9s" data-wow-delay=".4s">
            <h2>You Need An Account To Start</h2>
        </div>
    </section>
  <section id="contact" class="">
        <div>
            <div class="col-md-offset-1 col-sm-12 col-md-11">
                <div class="manage-wrapper">
                    
                    <div class = "col-md-7">
                       <div class ="col-md-9">
                        <form class="add-admin-form" action="" method="POST">
                        <div class="form-group">
                            <label class="control-label sr-only">Fullname</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only">Username</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                <input type="text" class="form-control" placeholder="Enter Your username" name="username"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                <input type="email" class="form-control" placeholder="Email address" name="useremail"
                                       value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                <input type="text" class="form-control" placeholder="Password" name="userpass"
                                       value="" />
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="add-super-admin">Register
                            </button>
                            <a data-toggle="modal" data-target="#myModal" href="#myModal" href = "">Already have an account?</a>
                        </div>
                    </form>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-page"></div>
                    </div>
                    <!--Change Password Modal Box-->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login to your account <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal change-pswd-form" action="" method="post">
                        <div class="form-group" id="spwd">
                            <label class="control-label sr-only">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                <input type="email" class="form-control" placeholder="Enter Your Email Address" name="userpass">
                                <span class="input-group-addon"><i class="fa fa-envelop"></i></span>
                            </div>
                        </div>
                        <div class="form-group" id="spwd">
                            <label class="control-label sr-only">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                <input type="password" class="form-control" placeholder="Enter Your Password"
                                       name="userpass">
                                <span class="input-group-addon"><a href='#'><i class="fa fa-eye"></i></a> </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href = "getstarted">Create An Account</a>  <button type="submit" name="login" class="btn btn-success">Login to your account</button>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--end of modal-->
                </div>
            </div>
        </div>
    </section>

    <?php include 'views-stubs/footer.php'; ?>

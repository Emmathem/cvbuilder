<?php include 'views-stubs/header.php'; ?>
    <section id="contact" class="">

        <div class="col-lg-offset-3 col-lg-6 col-sm-6 col-md-6">
            <div class="panel-heading animated fadeInDown">Login To your Dashboard</div>
            <div class="login-container-2">
                <div class="panel panel-primary">
                    <div class="panel-body">

                        <div class="col-md-offset-2 col-md-8">
                            <form class="add-admin-form" action="dashboard" method="POST">
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
                                    <button class="btn btn-primary btn-submit" type="submit" name="login">Login</button>
                                    <a href="getstarted">Not Registered, click here</a>
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

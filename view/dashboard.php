<? include __DIR__.'/views-stubs/dash-head.php'; ?>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                    <li class="active">
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>My Drive</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Settings</a>
                    </li>
                    <li>
                        <a href="<?= LINK_PREFIX; ?>logout"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>logout</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid xyz">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Welcome to Your Dashboard</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eum, placeat. Sed voluptate, ipsum laborum, voluptatem eum dignissimos pariatur, sunt quos tempora quam in qui. Laudantium omnis aspernatur illum aliquid?</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <? include __DIR__.'/views-stubs/footer.php'; ?>

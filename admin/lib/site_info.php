<style>
    .wrap-mobile {
        padding-top: 10px;
    }

    @media(max-width: 627px) {
    .wrap-mobile {
        padding-top: 50px;
    }
}

</style>

		<div class="row wrap-mobile">
			<div class="col-lg-12 animated fade fadeInUp">
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle = "collapse" data-parent="#accordion" href="#closepanel"><h4 class="panel-title">Site Traffic Overview</h4>
                        </a>
                    </div>
					<div class="panel-body panel-collapse collapse" id="closepanel">
					   <div class="row">
			             <a href = "<?=ADMIN_PREFIX?>pages/applications">
                             <div class="col-xs-6 col-md-3">
				                <div class="panel panel-primary">
					               <div class="panel-body easypiechart-panel">
						              <h4>Registered/Unapproved</h4>
                                        <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo unapproved_applicants_counts(); ?>">
							                 <span class="percent count"><?php echo unapproved_applicants_counts(); ?></span>
						                </div>
					               </div>
				                </div>
			                 </div>
                        </a>
			            <a href = "<?=ADMIN_PREFIX?>pages/students">
                            <div class="col-xs-6 col-md-3">
				                <div class="panel panel-default">
					               <div class="panel-body easypiechart-panel">
						              <h4>Approved Applicants</h4>
						                  <div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo student_counts(); ?>" >
							                 <span class="percent count"><?php echo student_counts(); ?></span>
						                  </div>
					               </div>
				            </div>
			             </div>
                        </a>
			            <a href = "<?=ADMIN_PREFIX?>pages/manage_files">
                            <div class="col-xs-6 col-md-3">
				                <div class="panel panel-default">
					               <div class="panel-body easypiechart-panel">
						              <h4>Media Uploaded</h4>
						              <div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo media_counts(); ?>" >
							             <span class="percent count"><?php echo media_counts(); ?></span>
						              </div>
					               </div>
				                </div>
			                 </div>
                        </a>
                        <a href = "<?=ADMIN_PREFIX?>pages/admin_settings">
                            <div class="col-xs-6 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-body easypiechart-panel">
                                        <h4>Admins</h4>
                                        <div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo admin_counts(); ?>" >
                                            <span class="percent count"><?php echo admin_counts(); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
		              </div><!--/.row-->
                        <div class="row">
                            <a href = "<?=ADMIN_PREFIX?>pages/dispatch-media">
                            <div class="col-xs-6 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-body easypiechart-panel">
                                        <h4>Dispatched Files</h4>
                                        <div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo media_dispatch_counts(); ?>" >
                                            <span class="percent count"><?php echo media_dispatch_counts(); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
					</div><!--/.panel-body-->
				</div>
			</div>
		</div><!--/.row-->

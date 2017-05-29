<?php include ('../header.php'); ?>
        <!-- Page Content -->
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <?php include '../security/site_info.php'; ?>
        <div id="page-wrapper" class="login_bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Feedbacks</h1>
                    </div>
                    <div class="panel-body">
	                    <div class="row">
                        	<div class="col-lg-12">
                                <div class="panel panel-success">
                       		        <div class="panel-heading">
                            				View Messages
				                    </div>
                            <div class="panel-body">

                              <script type="text/javascript">
                              $(document).ready(function(){
                              changePagination('0');
                              });
                              function changePagination(pageId){
                                   $(".flash").show();
                                   $(".flash").fadeIn(4400).html
                                      ('Loading <img src="../../images/ajax-loader.gif" />');
                                   var dataString = 'pageId='+ pageId;
                                   $.ajax({
                                         type: "POST",
                                         url: "bgWorker.php",
                                         data: dataString,
                                         cache: false,
                                         success: function(result){
                                         $(".flash").hide();
                                               $("#pageData").html(result);
                                         }
                                    });
                              }
                              </script>
                     <p></p>
      							<div id="pageData"></div>
		           			<span class="flash"></span>

                    	 </div>
                         </div>
                             </div>
                              </div>
                            </div>
 			                  </div>
		                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'; ?>

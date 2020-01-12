<?php $pg = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   <!-- <meta name="author" content="Dashboard">-->
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>STUMS - Faculty of Applied sciences - SUSL</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <body>

  <section id="container" >
      <!-- TOP BAR CONTENT & NOTIFICATIONS -->
      <?php 
          include "topBar.php";
      ?>
      
      <!-- MAIN SIDEBAR MENU -->
      <!--sidebar start-->
        <!-- the sidebar code was here-->
        <?php 
          include "sidebar.php";
        ?>
      <!--sidebar end-->
      
      <!-- MAIN CONTENT -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
				<div class="container" style="background-image:url('background.jpg')">
				  <div class="row">
					  
						
								<!-- DROPDOWN BUTTONS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Select Semester</h4>
      					<!-- Single button -->
						<div class="btn-group">
						  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
						    Select Semester <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#">Year 1 Semester1</a></li>
						    <li><a href="#">Year 1 Semester2</a></li>
						    <li><a href="#">Year 2 Semester1</a></li>
							<li><a href="#">Year 2 Semester2</a></li>
						    <li><a href="#">Year 3 Semester1</a></li>
						    <li><a href="#">Year 3 Semester2</a></li>
							<li><a href="#">Year 4 Semester1</a></li>
						    <li><a href="#">Year 4 Semester2</a></li>
						    
						    
						  </ul>
						</div>
      					
      				</div><!-- /showback -->
								
							</div>    					
							
						</div>
								<div>	
									<div class="row mt">
								  <!--CUSTOM CHART START -->
									<div class="col-md-12 mt">
										
									</div>	  
								  <!--custom chart end-->
								</div><!-- /row -->	
													 <div class="col-md-12 mt">
											<div class="content-panel">
												  <table class="table table-hover">
												  <h4><i class="fa fa-angle-right"></i>Year 1 Semester1</h4>
												  <hr>
														  <thead>
															  <tr>
																  <th>#</th>
																  <th>Month 1</th>
																  <th>Month 2</th>
																  <th>Month 3</th>
																  <th>Month 4</th>
																  <th>Month 5</th>
																  <th>Month 6</th>
																  
															  </tr>
														  </thead>
														  <tbody>
														  <tr>
															  <td>Paid or Not</td>
															  <td>Paid</td>
															  <td>Paid</td>
															  <td>Paid</td>
															  <td>Paid</td>
															  <td>Not Paid</td>
															  <td>Not Paid</td>
															  
															  
														  </tr>
														  <tr>
															  <td>Paid Date</td>
															  <td>12/22017</td>
															  <td>12/22017</td>
															  <td>12/22017</td>
															  <td>12/22017</td>
															  <td>12/22017</td>
															  <td>12/22017</td>
															  
														  </tr>
														  
														  </tbody>
												  </table>
											  </div><! --/content-panel -->
										  </div><!-- /col-md-12 -->
							</div>
		  <!-- RIGHT SIDEBAR CONTENT -->                  
					  
					  
				  </div><! --/row -->
				</div>  
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - Team soft_weavers
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
 

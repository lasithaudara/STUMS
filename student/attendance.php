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

  <section id="container" >

      <!--TOP BAR CONTENT & NOTIFICATIONS-->
        <?php 
            include "topBar.php";
        ?>
      
      <!-- MAIN SIDEBAR MENU -->

      <!--sidebar start-->
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
					  
						
								<! -- THEME BUTTONS -->
							<div class="showback">
								<h4><i class="fa fa-angle-right"></i> Select Attendence</h4>
								<!-- Standard button -->
								<button type="button" class="btn btn-theme" onClick="window.location.href='attendence.html'">Month wise Attendence</button>
								<button type="button" class="btn btn-theme02" onClick="window.location.href='semattendence.html'">Semester wise Attendence</button>
								
							</div><!-- /showback -->
								
							</div>    					
							
						</div>
								<div>	
									<div class="row mt">
								  <!--CUSTOM CHART START -->
									<div class="col-md-12 mt">
										<div>
																	<!-- DROPDOWN BUTTONS -->
											<div class="showback">
												<h4><i class="fa fa-angle-right"></i>Month wise Attendence</h4>
												<!-- Single button -->
												<div class="btn-group">
												  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
													Select Month <span class="caret"></span>
												  </button>
												  <ul class="dropdown-menu" role="menu">
													<li><a href="#">January</a></li>
													<li><a href="#">Feb</a></li>
													<li><a href="#">March</a></li>
													<li><a href="#">April</a></li>
													<li><a href="#">May</a></li>
													<li><a href="#">June</a></li>
													<li class="divider"></li>
													
												  </ul>
												</div>
												
												
											</div><!-- /showback -->
										</div>
										  <div class="border-head">
											  <h3>January</h3>
										  </div>
										  <div class="custom-bar-chart">
											  <ul class="y-axis">
												  <li><span>100%</span></li>
												  <li><span>80%</span></li>
												  <li><span>60%</span></li>
												  <li><span>40%</span></li>
												  <li><span>20%</span></li>
												  <li><span>0</span></li>
											  </ul>
											  <div class="bar">
												  <div class="title">Sub1</div>
												  <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
											  </div>
											  <div class="bar ">
												  <div class="title">Sub2</div>
												  <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
											  </div>
											  <div class="bar ">
												  <div class="title">sub3</div>
												  <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
											  </div>
											  <div class="bar ">
												  <div class="title">sub4</div>
												  <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
											  </div>
											  <div class="bar">
												  <div class="title">sub5</div>
												  <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
											  </div>
											  <div class="bar ">
												  <div class="title">sub6</div>
												  <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
											  </div>
											  <div class="bar ">
												  <div class="title">sub7</div>
												  <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
											  </div>
											  
											  
										  </div>
									</div>	  
								  <!--custom chart end-->
								</div><!-- /row -->	
													 <div class="col-md-12 mt">
											<div class="content-panel">
												  <table class="table table-hover">
												  <h4><i class="fa fa-angle-right"></i>Month wise Attendence</h4>
												  <hr>
														  <thead>
															  <tr>
																  <th>#</th>
																  <th>Sub1</th>
																  <th>sub2</th>
																  <th>sub3</th>
																  <th>sub4</th>
																  <th>sub5</th>
																  <th>sub6</th>
																  <th>sub7</th>
																  <th>sub8</th>
																  <th>sub9</th>
																  <th>sub10</th>
															  </tr>
														  </thead>
														  <tbody>
														  <tr>
															  <td>Normal Attendence</td>
															  <td>60%</td>
															  <td>50%</td>
															  <td>100%</td>
															  <td>60%</td>
															  <td>50%</td>
															  <td>100%</td>
															  <td>60%</td>
															  <td>50%</td>
															  <td>100%</td>
															  <td>60%</td>
															  
														  </tr>
														  <tr>
															  <td>Attendence with Medicals</td>
															  <td>60%</td>
															  <td>70%</td>
															  <td>80%</td>
															  <td>60%</td>
															  <td>50%</td>
															  <td>100%</td>
															  <td>60%</td>
															  <td>50%</td>
															  <td>100%</td>
															  <td>50%</td>
															  
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

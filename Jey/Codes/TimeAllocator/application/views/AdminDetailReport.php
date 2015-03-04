<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:18:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.html">
   
   
   
   
    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="<?php echo base_url(); ?>assests/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assests/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/style-responsive.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assests/js/data-tables/DT_bootstrap.css" />
	
	<link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet" />
	 <link href="<?php echo base_url(); ?>assests/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assests/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-timepicker/css/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-datetimepicker/css/datetimepicker.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/jquery-tags-input/jquery.tagsinput.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/select2/select2.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/style-responsive.css" rel="stylesheet" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-datetimepicker/css/datetimepicker.css" />
	

    <title>Home</title>
</head>
<body class="full-width">
<section id="container" class="hr-menu">
      <!--header start-->
      <header class="header fixed-top">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle hr-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="fa fa-bars"></span>
              </button>

              <!--logo start-->
              <!--logo start-->
              <div class="brand ">
                  <a  class="logo">
                      <img src="<?php echo base_url(); ?>assests/images/logo.jpg" alt="">
                  </a>
              </div>
              <!--logo end-->
              <!--logo end-->
             
 <div class="top-nav hr-top-nav">
                  <ul class="nav pull-right top-menu">
                      <li>
                          <input type="text" class="form-control search" placeholder=" Search">
                      </li>
                      <!-- user login dropdown start-->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo base_url(); ?>assests/#">
                              <img alt="" src="<?php echo base_url(); ?>assests/images/avatar1_small.jpg">
                              <span class="username">John Doe</span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <li><a href="<?php echo base_url(); ?>assests/profile.html"><i class=" fa fa-suitcase"></i>Profile</a></li>
                              <li><a href="<?php echo base_url(); ?>assests/#"><i class="fa fa-cog"></i> Settings</a></li>
                              <li><a href="<?php echo base_url(); ?>assests/#"><i class="fa fa-bell-o"></i> Notification</a></li>
                              <li><a href="<?php echo base_url(); ?>assests/register.html"><i class="fa fa-key"></i> Log Out</a></li>
                          </ul>
                      </li>
                      <!-- user login dropdown end -->
                  </ul>
              </div>
</header>

</header>

	<!-- http://localhost/TimeAllocator/index.php/Admin/AdminDetailReport/2015/02/4 -->
			<?php 
			$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$segments = explode('/', $urlArray);
			$numSegments = count($segments); 
			$date= $segments[7];
            $month = $segments[6]; 
        	$year = $segments[5]; 
			?>

<div class=" col-md-12 ">


 <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            
                <section class="panel">
                    <header class="panel-heading">
                         	
						
						 
						 <form class="form-inline" id="dateform"  action="<?php echo base_url(); ?>index.php/Admin/DatePicker/<?php echo $year.'/'.$month.'/'.$date.'/'.'5' ?>" method="post" >
                               
						<label class="control-label col-md-1"> Date</label>
                               
                                    <input class="form-control form-control-inline input-medium default-date-picker" id = "sdate" name = "sdate" size="16" type="date" value= "" />
									
                                <input class="btn btn-info" type="submit" name="go" id="go" value="GO" >
                        </form>
                        <span class="tools pull-right">
                            <a href="<?php echo base_url(); ?>assests/javascript:;" class="fa fa-chevron-down"></a>
                            <a href="<?php echo base_url(); ?>assests/javascript:;" class="fa fa-cog"></a>
                            <a href="<?php echo base_url(); ?>assests/javascript:;" class="fa fa-times"></a>
														
                         </span>
						  <div style="padding-left: 450px;">
						 
						 </div>
                    </header>
					
			
					
						<div class="btn-row" >
					
						
                            <div class="btn-toolbar">
                                <div class=" col-md-12" style="padding-left: 50px;">
									
					
									<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'5' ?>">05AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'6' ?>">06AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'7' ?>">07AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'8' ?>">08AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'9' ?>">09AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'10' ?>">10AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'11' ?>">11AM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'12' ?>">12PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'13' ?>">01PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'14' ?>">02PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'15' ?>">03PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'16' ?>">04PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'17' ?>">05PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'18' ?>">06PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'19' ?>">07PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'20' ?>">08PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'21' ?>">09PM</a>
									<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Admin/AdminDetailReport/<?php echo $year.'/'.$month.'/'.$date.'/'.'22' ?>">10PM</a>
									
								
                                </div>
                            </div>
                        </div>
					<div class="row">
                <div class="col-sm-12">
                    <section class="panel">                       
                        <div class="panel-body">
                            <table class="table">
							
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User Name</th>
                                    <th>Email Id</th>
									<th>Date</th>
                                    <th>Time</th>                                    
                                    <th>Booked Date</th>
									<th>Number of Space</th>
									<th>Amount</th>
									<th>Paid</th>
									<th>Confirmed</th>
									
									<th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
									$i = 1;
                                      foreach($Event as $row){
                                ?>
								
								
								
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php  echo $row->date; ?></td>
                                    <td><?php  echo $row->Time ;?></td>
									<td><?php  echo $row->EmailId; ?></td>
                                    <td><?php  echo $row->Booked_At; ?></td>
                                    <td><?php  echo $row->No_of_places; ?></td>
									<td><?php  echo $row->No_of_places * 300; ?></td>
                                </tr>
                                 <?php $i++; };?>
                               
                                </tbody>
                            </table>
                        </div>

                    </section>
                </div>
                
			</div>

                </section>
            </div>
        </div>
		
        </section>
    </section>
    <!--main content end-->
        
	</div>
 
</div>


<div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
					  
                      <ul class="breadcrumb">
					  
					   <ul class="breadcrumb">
                        <div style="float:right; font-size: 100%;" class="col-xs-2 btn-add-task">
 <a type="submit" class="btn btn-default btn-primary" data-toggle="modal" href="<?php echo base_url(); ?>index.php/Admin/AdminLockScreen">Lock Screen</a>
                       
                    </div>  
                         </ul> 
                      </ul>
					  
                      <!--breadcrumbs end -->
                  </div>
              </div>

</section>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assests/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/data-tables/DT_bootstrap.js"></script>

<!--dynamic table initialization -->
<script src="<?php echo base_url(); ?>assests/js/dynamic_table_init.js"></script>



<script src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>assests/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-ui-1.9.2.custom.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/easypiechart/jquery.easypiechart.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.nicescroll.js"></script>

<script src="<?php echo base_url(); ?>assests/js/bootstrap-switch.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="<?php echo base_url(); ?>assests/js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="<?php echo base_url(); ?>assests/js/select2/select2.js"></script>
<script src="<?php echo base_url(); ?>assests/js/select-init.js"></script>


<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assests/js/scripts.js"></script>

<script src="<?php echo base_url(); ?>assests/js/toggle-init.js"></script>

<script src="<?php echo base_url(); ?>assests/js/advanced-form.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assests/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assests/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.pie.resize.js"></script>


<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assests/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assests/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url(); ?>assests/js/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="<?php echo base_url(); ?>assests/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/calendar/clndr.js"></script>
<script src="<?php echo base_url(); ?>assests/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/calendar/moment-2.2.1.js"></script>
<script src="<?php echo base_url(); ?>assests/js/evnt.calendar.init.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo base_url(); ?>assests/js/gauge/gauge.js"></script>
<!--clock init-->
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assests/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assests/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assests/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assests/js/morris-chart/morris.js"></script>
<script src="<?php echo base_url(); ?>assests/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo base_url(); ?>assests/js/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->

<script src="<?php echo base_url(); ?>assests/js/scripts.js"></script>
<!--script for this page-->
</body>

<!-- Mirrored from bucketadmin.themebucket.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:19:20 GMT -->
</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/grids.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:19:49 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.html">

    <title>Add event</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/style-responsive.css" rel="stylesheet" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/js/bootstrap-datepicker/css/datepicker.css" />
	

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

   

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assests/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assests/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assests/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="<?php echo base_url(); ?>assests/index.html" class="logo">
        <img src="<?php echo base_url(); ?>assests/images/logo.jpg" alt="">
    </a>
   
</div>
<!--logo end-->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo base_url(); ?>assests/#">
                <img alt="" src="<?php echo base_url(); ?>assests/images/avatar1_small.jpg">
                <span class="username"><?php echo $username; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo base_url(); ?>assests/#"><a href="<?php echo base_url(); ?>index.php/user/UserProfile" ><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="<?php echo base_url(); ?>assests/#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo base_url(); ?>assests/#"><a href="<?php echo base_url(); ?>index.php/user/userBeforeLogin" ><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
           
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar end-->
    <!--main content start-->
	
			<!-- http://localhost/TimeAllocator/index.php/user/userAddevent/2015/02/4 -->
			<?php 
			$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$segments = explode('/', $urlArray);
			$numSegments = count($segments); 
			$date= $segments[7];
            $month = $segments[6]; 
        	$year = $segments[5]; 
			?>
			
    <section id="main-content"  >
        <section class=" wrapper site-min-height">
            <div class="row">
               
                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                               <form class="form-inline" id="dateform"  action="<?php echo base_url(); ?>index.php/user/Pickdate/<?php echo $year.'/'.$month.'/'.$date.'/'.'5' ?>" method="post" >
                                <label class="control-label col-md-1"> Date</label>
                               
                                    <input class="form-control form-control-inline input-medium default-date-picker"  name="sdate" id="sdate" size="16" type="date" value= $year  />
                
									 <input class="btn btn-info" type="submit" name="go" id="go" value="GO" >
                            
                            </form>
                            
						</div>
                    </section>
                </div>
            </div>
			
			
             <div class="row">
			 
			 <div class="col-lg-2" >
                    <section class="panel">
                        <div class="panel-body">05.00AM-06.00AM</div>
						<div class="panel-body">Available :  <?php echo $Available[5]; ?></div>
						<div class="position-center">
							<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'5' ?>">Book</a>
						</div>
				
                    </section>
                </div>
			 
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">06.00AM-07.00AM</div>
						<div class="panel-body">Available :  <?php echo $Available[6]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'6' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">07.00AM-08.00AM</div>
						<div class="panel-body">Available :  <?php echo $Available[7]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'7' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">08.00AM-09.00AM</div>
						<div class="panel-body">Available :  <?php echo $Available[8]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'8' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">09.00AM-10.00AM</div>
						<div class="panel-body">Available :  <?php echo $Available[9]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'9' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">10.00AM-11.00AM</div>
						<div class="panel-body">Available : <?php echo $Available[10]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'10' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                
            </div>
			
			<div class="row">
			
			<div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">11.00AM-12.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[11]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'11' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">12.00PM-01.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[12]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'12' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">01.00PM-02.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[13]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'13' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">02.00PM-03.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[14]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'14' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">03.00PM-04.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[15]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info" href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'15' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">04.00PM-05.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[16]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'16' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                
            </div>
			
			<div class="row">
			
			<div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">05.00PM-06.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[17]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'17' ?>">Book</a>
					
						</div>
                    </section>
                </div>
			
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">06.00PM-07.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[18]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'18' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">07.00PM-08.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[19]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'19' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">08.00PM-09.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[20]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'20' ?>">Book</a>
					
						</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">09.00PM-10.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[21]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'21' ?>">Book</a>
					
						</div>
                    </section>
                </div>
				
				<div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">10.00PM-11.00PM</div>
						<div class="panel-body">Available :  <?php echo $Available[22]; ?> </div>
						<div class="position-center">
						<a type="button" class="btn btn-info"  href="<?php echo base_url(); ?>index.php/user/Available/<?php echo $year.'/'.$month.'/'.$date.'/'.'22' ?>">Book</a>
					
						</div>
                    </section>
                </div>
               
            </div>
			
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
</div>

<div class="panel-body">
                                                  
						</div>
<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assests/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assests/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assests/js/sparkline/jquery.sparkline.js"></script>


<script src="<?php echo base_url(); ?>assests/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-ui-1.9.2.custom.min.js"></script>

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


<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.pie.resize.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-tags-input/jquery.tagsinput.js"></script>
<script src="<?php echo base_url(); ?>assests/js/select2/select2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assests/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assests/js/scripts.js"></script>

<script src="<?php echo base_url(); ?>assests/js/toggle-init.js"></script>

<script src="<?php echo base_url(); ?>assests/js/advanced-form.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="<?php echo base_url(); ?>assests/js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="<?php echo base_url(); ?>assests/js/select2/select2.js"></script>
<script src="<?php echo base_url(); ?>assests/js/select-init.js"></script>

</body>

<!-- Mirrored from bucketadmin.themebucket.net/grids.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:19:49 GMT -->
</html>

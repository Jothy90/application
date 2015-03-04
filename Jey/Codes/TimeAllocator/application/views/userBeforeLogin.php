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
    
     <link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet" />

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
                  <a href="home" class="logo">
                      <img src="<?php echo base_url(); ?>assests/images/logo3.jpg" alt="">
                  </a>
              </div>
              <!--logo end-->
              <!--logo end-->
              <div class="horizontal-menu navbar-collapse collapse ">
			  <div style="
        padding-left: 850px;">
                  <ul class="nav navbar-nav">
				  
                      <li class="active"><a href="<?php echo base_url(); ?>index.php/user/UserLogin">SIGN IN</a></li>
                      <li ><a href="<?php echo base_url(); ?>index.php/user/register">SIGN UP </a></li>
                     
                   
                  </ul>
</div>
                      
              </div>
</header>



<section id="main-content">
<section class="wrapper">

        <div style="width:800px; margin-left:140px;" >

            <div style="width:320px; float:left; margin-left:60px; height:480px; background-color:#1fb5ad; margin-top:40px;">
                <div class="cal-day" >
                    <div style="margin-left:10px;" >
                        <span><?php echo $currentdate['year']; echo "/";echo $currentdate['month'];echo "/";echo $currentdate['date']; ?></span>
                    <?php
                    $jd=cal_to_jd(CAL_GREGORIAN,$currentdate['month'],$currentdate['date'],$currentdate['year']);
                    echo(jddayofweek($jd,1));
                    ?>
                     </div>
                </div>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                    <ul class="event-list" style="overflow: hidden; margin-left:10px;width: 300px; height: auto;">

                        
                    </ul>
                
                </div>
                
           

            </div>

            <div style="width:400px; float:right;height:800px; margin-right:0px; margin-top:35px;">
                 <?php echo $calendar; ?>

            </div>

         </div>
          
                                        
                                        
</section>
</section>
<footer class="footer-section">
          <div class="text-center">
              2014 Law
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>

</section>

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

<script src="<?php echo base_url(); ?>assests/js/cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


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
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url(); ?>assests/js/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="<?php echo base_url(); ?>assests/js/cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/calendar/clndr.js"></script>
<script src="<?php echo base_url(); ?>assests/js/cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
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
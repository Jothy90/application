<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:20:36 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.html">

    <title>Profile</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/style-responsive.css" rel="stylesheet" />

    
</head>

<body class="full-width">

<section id="container" class="hr-menu" >
<!--header start-->
<header class="header fixed-top">
<!--logo start-->

<!--logo end-->
<div class="navbar-header">
              <button type="button" class="navbar-toggle hr-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="fa fa-bars"></span>
              </button>

              <!--logo start-->
              <!--logo start-->
              <div class="brand ">
				<a class="logo">
                      <img src="<?php echo base_url(); ?>assests/images/logo3.jpg" alt="">
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
                              <span class="username"><?php echo $username; ?></span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <li><a href="<?php echo base_url(); ?>index.php/user/UserProfile"><i class=" fa fa-suitcase"></i>Profile</a></li>
                              <li><a href="<?php echo base_url(); ?>assests/#"><i class="fa fa-cog"></i> Settings</a></li>
                              <li><a href="<?php echo base_url(); ?>assests/#"><i class="fa fa-bell-o"></i> Notification</a></li>
                              <li><a href="<?php echo base_url(); ?>index.php/user/userBeforeLogin"><i class="fa fa-key"></i> Log Out</a></li>
                          </ul>
                      </li>
                      <!-- user login dropdown end -->
                  </ul>
              </div>
</div>
</header>
<!--header end-->

<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-3">
                           <div class="profile-pic text-center">
                               <img src="<?php echo base_url(); ?>assests/images/lock_thumb.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="profile-desk">
                               <h1>David Rojormillan</h1>
                               <span class="text-muted">Product Manager</span>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                               </p>
                               <a href="<?php echo base_url(); ?>index.php/user/UserTimeline" class="btn btn-primary">View Timeline</a>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="profile-statistics">
                            
                               <ul>
                                   <li>
                                       <a href="<?php echo base_url(); ?>assests/#">
                                           <i class="fa fa-facebook"></i>
                                       </a>
                                   </li>
                                   <li class="active">
                                       <a href="<?php echo base_url(); ?>assests/#">
                                           <i class="fa fa-twitter"></i>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="<?php echo base_url(); ?>assests/#">
                                           <i class="fa fa-google-plus"></i>
                                       </a>
                                   </li>
                               </ul>
							   
							    
							   
                           </div>
                       </div>
					   
					   
					  
					   </div>
                    
                </section>
				</div>
            </div>
            <div class="col-md-12">
                <section class="panel">
			<header class="panel-heading tab-bg-dark-navy-blue">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="<?php echo base_url(); ?>assests/#overview">
                                    Overview
                                </a>
                            </li>
                            
                            <li>
                                <a data-toggle="tab" href="<?php echo base_url(); ?>assests/#contacts" class="contact-map">
                                    Contacts
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="<?php echo base_url(); ?>assests/#settings">
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content tasi-tab">
                            <div id="overview" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="recent-act">
                                            <h1>Recent Activity</h1>
                                            <div class="activity-icon terques">
                                                <i class="fa fa-check"></i>
                                            </div>
                                          <div class="activity-desk">
                                                <h2 class="yellow">12 december 2013</h2>
                                                <p>put a case lastly finished</p>
                                            </div>

                                        </div>
                                    </div>
									</div>
                            </div>
                            
							<div id="contacts" class="tab-pane ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="prf-contacts">
                                            <h2> <span><i class="fa fa-map-marker"></i></span> location</h2>
                                            <div class="location-info">
                                                <p>Postal Address<br>
                                                    PO Box 16122 Collins Street West<br>
                                                    Victoria 8007 Australia</p>
                                                <p>Headquarters<br>
                                                    121 King Street, Melbourne<br>
                                                    Victoria 3000 Australia</p>
                                            </div>
                                            <h2> <span><i class="fa fa-phone"></i></span> contacts</h2>
                                            <div class="location-info">
                                                <p>Phone	: +61 3 8376 6284 <br>
                                                    Cell		: +61 3 8376 6284</p>
                                                <p>Email		: <a class="__cf_email__" href="<?php echo base_url(); ?>assests/cdn-cgi/l/email-protection.html" data-cfemail="bfdbdec9d6dbffcbd7dad2daddcadcd4dacb91d1dacb">[email&nbsp;protected]</a><script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
/* ]]> */
</script><br>
                                                    Skype		: david.rojormillan</p>
                                                <p>
                                                    Facebook	: https://www.facebook.com/themebuckets <br>
                                                    Twitter	: https://twitter.com/theme_bucket
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="map-canvas"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="settings" class="tab-pane ">
                                <div class="position-center">
                                    <div class="prf-contacts sttng">
                                        <h2>  Personal Information</h2>
                                    </div>
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"> Avatar</label>
                                            <div class="col-lg-6">
                                                <input type="file" id="exampleInputFile" class="file-pos">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Interested in</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="c-name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Lives In</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="lives-in" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Country</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Description</label>
                                            <div class="col-lg-10">
                                                <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="prf-contacts sttng">
                                        <h2> socail networks</h2>
                                    </div>
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Facebook</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="fb-name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Twitter</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="twitter" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Google plus</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="g-plus" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Flicr</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="flicr" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Youtube</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="youtube" class="form-control">
                                            </div>
                                        </div>

                                    </form>
                                    <div class="prf-contacts sttng">
                                        <h2>Contact</h2>
                                    </div>
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Address 1</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="addr1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Address 2</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="addr2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Phone</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Cell</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="cell" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Skype</label>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" " id="skype" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">
<ul class="right-side-accordion">
<li class="widget-collapsible">
    <a href="<?php echo base_url(); ?>assests/#" class="head widget-head red-bg active clearfix">
        <span class="pull-left">work progress (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row side-mini-stat clearfix">
                <div class="side-graph-info">
                    <h4>Target sell</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="target-sell">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>product delivery</h4>
                    <p>
                        55%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-delivery">
                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info payment-info">
                    <h4>payment collection</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-collection">
						<span class="pc-epie-chart" data-percent="45">
						<span class="percent"></span>
						</span>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>delivery pending</h4>
                    <p>
                        44%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="d-pending">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="col-md-12">
                    <h4>total progress</h4>
                    <p>
                        50%, Deadline 12 june 13
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="<?php echo base_url(); ?>assests/#" class="head widget-head terques-bg active clearfix">
        <span class="pull-left">contact online (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="<?php echo base_url(); ?>assests/#"><img src="<?php echo base_url(); ?>assests/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="<?php echo base_url(); ?>assests/#">Jonathan Smith</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="<?php echo base_url(); ?>assests/#"><img src="<?php echo base_url(); ?>assests/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="<?php echo base_url(); ?>assests/#">Anjelina Joe</a></h4>
                    <p>
                        Available
                    </p>
                </div>
                <div class="user-status text-success">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="<?php echo base_url(); ?>assests/#"><img src="<?php echo base_url(); ?>assests/images/chat-avatar2.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="<?php echo base_url(); ?>assests/#">John Doe</a></h4>
                    <p>
                        Away from Desk
                    </p>
                </div>
                <div class="user-status text-warning">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="<?php echo base_url(); ?>assests/#"><img src="<?php echo base_url(); ?>assests/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="<?php echo base_url(); ?>assests/#">Mark Henry</a></h4>
                    <p>
                        working
                    </p>
                </div>
                <div class="user-status text-info">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="<?php echo base_url(); ?>assests/#"><img src="<?php echo base_url(); ?>assests/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="<?php echo base_url(); ?>assests/#">Shila Jones</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <p class="text-center">
                <a href="<?php echo base_url(); ?>assests/#" class="view-btn">View all Contacts</a>
            </p>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="<?php echo base_url(); ?>assests/#" class="head widget-head purple-bg active">
        <span class="pull-left"> recent activity (3)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        just now
                    </p>
                    <p>
                        <a href="<?php echo base_url(); ?>assests/#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        2 min ago
                    </p>
                    <p>
                        <a href="<?php echo base_url(); ?>assests/#">Jane Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        1 day ago
                    </p>
                    <p>
                        <a href="<?php echo base_url(); ?>assests/#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="<?php echo base_url(); ?>assests/#" class="head widget-head yellow-bg active">
        <span class="pull-left"> shipment status</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="col-md-12">
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
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
<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assests/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url(); ?>assests/https://maps.googleapis.com/maps/api/js?v=3.exp&amp;AMP;sensor=false"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assests/js/scripts.js"></script>
<script>

    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

$('.contact-map').click(function(){

    //google map in tab click initialize
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'click', initialize);
});

</script>



</body>

<!-- Mirrored from bucketadmin.themebucket.net/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:20:37 GMT -->
</html>

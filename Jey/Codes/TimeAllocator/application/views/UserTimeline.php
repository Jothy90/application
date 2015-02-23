<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:20:38 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.html">

    <title>Timeline page</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/style-responsive.css" rel="stylesheet" />

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
<a class="logo">
 <img src="<?php echo base_url(); ?>assests/images/logo3.jpg" alt="">
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
                <li><a href="<?php echo base_url(); ?>index.php/user/UserProfile"><i class=" fa fa-suitcase"></i>Profile</a></li>
                              <li><a href="<?php echo base_url(); ?>assests/#"><i class="fa fa-cog"></i> Settings</a></li>
                              
                              <li><a href="<?php echo base_url(); ?>index.php/user/userBeforeLogin"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-off-1 col-sm-12">
                <div class="timeline">
                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show first">
                                <a href="<?php echo base_url(); ?>assests/#" class="btn btn-primary">Today</a>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon red">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="timeline-date">08:25 am</span>
                                    <h1 class="red">1 hour ago</h1>
                                    <p>Purchased new stationary items for head office </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item ">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon green">
                                        <i class="fa fa-beer"></i>
                                    </span>
                                    <span class="timeline-date">10:00 am</span>
                                    <h1 class="green">2 hours ago</h1>
                                    <p>Completed Coffee meeting with <a href="<?php echo base_url(); ?>assests/#">Stive Martin</a> regarding the Product Promotion</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon blue">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                    <span class="timeline-date">11:35 am</span>
                                    <h1 class="blue">10 hours ago</h1>
                                    <p>3 new photo Uploaded on facebook fan page</p>
                                    <div class="album">
                                        <a href="<?php echo base_url(); ?>assests/#">
                                            <img alt="" src="<?php echo base_url(); ?>assests/images/sm-img-1.jpg">
                                        </a>
                                        <a href="<?php echo base_url(); ?>assests/#">
                                            <img alt="" src="<?php echo base_url(); ?>assests/images/sm-img-2.jpg">
                                        </a>
                                        <a href="<?php echo base_url(); ?>assests/#">
                                            <img alt="" src="<?php echo base_url(); ?>assests/images/sm-img-3.jpg">
                                        </a>
                                        <a href="<?php echo base_url(); ?>assests/#">
                                            <img alt="" src="<?php echo base_url(); ?>assests/images/sm-img-1.jpg">
                                        </a>
                                        <a href="<?php echo base_url(); ?>assests/#">
                                            <img alt="" src="<?php echo base_url(); ?>assests/images/sm-img-2.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon purple">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="purple">4:30</h1>
                                    <p>Outdoor visit at California State Route 85 with John Boltana & Harry Piterson regarding to setup a new show room.</p>
                                    <p>
                                        <i class=" fa fa-exclamation-sign"></i> New task added for <span><a href="<?php echo base_url(); ?>assests/#" class="purple">Denial Collins</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon light-green">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="light-green">10 June | Friday</h1>
                                    <p>Jonatha Smith</a> added new milestone <span><a href="<?php echo base_url(); ?>assests/#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show">
                                <a href="<?php echo base_url(); ?>assests/#" class="btn btn-default">Yesterday</a>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon yellow">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="yellow">4:30</h1>
                                    <p>Montly Regular Medical check up at Greenland Hospital by the doctor <span><a href="<?php echo base_url(); ?>assests/#" class="yellow">  Berry Moor </a></span> </p>

                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon ">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="">4:55</h1>
                                    <p>Download the new updates of SAP ERP Solution</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>

                                    <span class="timeline-icon blue">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="blue">10 June | Friday</h1>
                                    <p>Jonatha Smith added new milestone <span><a class="blue" href="<?php echo base_url(); ?>assests/#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show">
                                <a href="<?php echo base_url(); ?>assests/#" class="btn btn-default">20 December 2013</a>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon ">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="">13 March | Sunday</h1>
                                    <p>Download the new updates of SAP ERP Solution</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>

                                    <span class="timeline-icon red">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="red">5:33</h1>
                                    <p>Jonatha Smith added new milestone <span><a class="red" href="<?php echo base_url(); ?>assests/#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
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


<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assests/js/scripts.js"></script>

</body>

<!-- Mirrored from bucketadmin.themebucket.net/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:20:38 GMT -->
</html>

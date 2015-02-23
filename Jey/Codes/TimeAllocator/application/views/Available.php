<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:19:39 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.html">

    <title>Available</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assests/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<?php 
            $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $segments = explode('/', $urlArray);
            $numSegments = count($segments); 
            $time=$segments[8];
            $date= $segments[7];
            $month = $segments[6]; 
            $year = $segments[5]; 
         ?>
  <body class="login-body">

    <div class="container">

      <form class="form-signin" role="form" action="<?php echo base_url(); ?>index.php/event/book?tag=<?php echo $year.'/'.$month.'/'.$date.'/'.$time ?>" method="post" accept-charset="utf-8" >

        <h2 class="form-signin-heading">Book Now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="int" class="form-control" required name = "No_of_space" id = "No_of_space"  placeholder = "No of spaces"autofocus>
                
            </div>
            
            <button class="btn btn-lg btn-login btn-block" type="submit">Book</button>

           
        <?php if ( $this->session->flashdata( 'message' ) ) : ?>
              <p><?php echo $this->session->flashdata( 'message' ); ?></p>
        <?php endif; ?> 


        </div>

         
      </form>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assests/bs3/js/bootstrap.min.js"></script>

  </body>

<!-- Mirrored from bucketadmin.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:19:39 GMT -->
</html>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:20:51 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.html">

    <title>Login</title>

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
  <body >

    <div class="container">

      <form class="form-signin" role="form" action="<?php echo base_url(); ?>index.php/user/validateRegister" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">register now</h2>
        <div class="login-wrap">
           
            <input type="text" class="form-control" required name="name" id="name" placeholder="Full Name" autofocus>
            <input type="text" class="form-control" required name="address" id="address" placeholder="Address" autofocus>
            <input type="email" class="form-control" required name="email" id="email"  placeholder="Email">
			
            <input type="text" class="form-control" name="city" id="city" placeholder="City/Town" autofocus>
			
			<div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="sample-radio" id="radio-01" value="Male" type="radio" checked /> Male
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="sample-radio" id="radio-02" value="Female" type="radio" /> Female
                </label>
            </div>
			

           
            <input type="text" class="form-control" required name="username" id="username" placeholder="User Name" autofocus>
            <input type="password" class="form-control" required name="password" id="password" placeholder="Password" onchange="form.password1.pattern = this.value;" title="Password must contain at least 6 characters, including UPPERCASE,lowercase and numbers.">
            <input type="password" class="form-control" required name="password1" id="password1" placeholder="Re-type Password">
            <label class="checkbox">
                <input type="checkbox" required name="check" id="check" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label>
			<div style="
        padding-left: 150px;">
            <button class="btn btn-lg btn-login " type="submit">Submit</button>
			</div>
		<!--	<button class="btn btn-lg btn-login " type="submit">Cancel</button> -->

            <div class="registration">
                Already Registered.
                <a class="" href="<?php echo base_url(); ?>index.php/user/UserLogin">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assests/bs3/js/bootstrap.min.js"></script>

  </body>

<!-- Mirrored from bucketadmin.themebucket.net/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Oct 2014 09:20:51 GMT -->
</html>
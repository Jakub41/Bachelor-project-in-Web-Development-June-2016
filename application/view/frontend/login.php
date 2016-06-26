<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Ezboxrecipes :: Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/cloud-admin.css" >

	<link href="<?php echo URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/animatecss/animate.min.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

</head>
<body class="login">
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>img/logo/logoEzbox.png" height="240" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">SignIn</h2>
								<div class="divide-40"></div>
								<p id="error" class="error alert-danger">
								<?php
								
								echo(isset($_SESSION["accountactivation"])?$_SESSION["accountactivation"]:'');
								if(isset($_SESSION["accountactivation"]))
								{
								 session_destroy();
								 }
								?>
								
								</p>
								<form role="form" id="userlogin" method="POST" enctype="multipart/form-data" action="<?php echo URL.'login/LoginCustomer'; ?>">
								  <div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" name="user_email" >
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="exampleInputPassword1" name="user_password" >
								  </div>
								  <div class="form-actions">
									<label class="checkbox"> <input type="checkbox" class="uniform" value=""> Remember me</label>
									<button type="submit" name="submit" class="btn btn-danger">Login</button>
								  </div>
								</form>
								<!-- SOCIAL LOGIN -->
								<div class="divide-20"></div>
								<div class="center">
									<strong>Or login using your social account</strong>
								</div>
								<div class="divide-20"></div>
								<div class="social-login center">
									<a class="btn btn-primary btn-lg">
										<i class="fa fa-facebook"></i>
									</a>
									<a class="btn btn-info btn-lg">
										<i class="fa fa-twitter"></i>
									</a>
									<a class="btn btn-danger btn-lg">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
								<!-- /SOCIAL LOGIN -->
								<div class="login-helpers">
									<a href="<?php echo URL; ?>forgot_password/ForgotPassword">Forgot Password?</a> <br>
									Don't have an account with us? <a href="<?php echo URL; ?>signup/SignupCustomer">Register
										now!</a><br>
										<a href="<?php echo URL; ?>">Back to home</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->

	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?php echo URL; ?>js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?php echo URL; ?>js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php echo URL; ?>bootstrap-dist/js/bootstrap.min.js"></script>


	<!-- UNIFORM -->
	<script type="text/javascript" src="<?php echo URL; ?>js/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="<?php echo URL; ?>js/script.js"></script>
	<script>
		jQuery(document).ready(function() {

			//App.setPage("login");  //Set current page
			//App.init(); //Initialise plugins and elements
	$("#userlogin").submit(function(event)
     {

        event.preventDefault();
       $.post("<?php echo URL; ?>login/LoginCustomer",{"formdata":$("#userlogin").serialize()},function(result)
       {
	   console.log(result);
           var obj=jQuery.parseJSON(result);
		   console.log(obj);
		   $(".error").html("");
		   if(obj.error!==undefined)
	       {
	        $("#error").html(obj.error);
	       }
		   if(obj.sendmailurl!==undefined)
		   {
		     $.get("<?php echo URL; ?>signup/sendemail",function(result)
			  {
		     
		        console.log(result);
	          })
		   
		   }
		   if(obj.url!==undefined)
	       {
	        document.location=obj.url;
	       }
       })



     })


		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>

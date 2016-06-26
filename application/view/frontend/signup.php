<?php
	require_once(APP.'model/recaptchalib.php');
    //$publickey = "6LelO_gSAAAAADjDXJxY8WgWuc7bDioPwvHHgk5X";
	$publickey = "6LfINiETAAAAAJ0k0oKHY62ljF4-2EyXhonhPqHH";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Ezboxrecipes :: Signup</title>
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
			<!-- REGISTER -->
			<section id="signup_customer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">Register <br>
									<small><a href="<?php echo URL; ?>">Back to home</a></small>
								</h2>

								<?php if (isset($action_msg)) {
									echo $action_msg;
								} ?>
								<p id="error" class="error alert-danger"></p>
								<div class="divide-40"></div>
								<form role="form" name="form" enctype="multipart/form-data" method="POST" action="<?php echo URL.'signup/SignupUser' ;?>" id="usersingup">
								  <div class="form-group">
									<label for="exampleInputName">First Name</label>
									<i class="fa fa-font"></i>
									<input type="text" class="form-control" id="exampleInputName" name="first_name" required>
								  </div>
								  <div class="form-group">
									<label for="exampleInputUsername">Last Name</label>
									<i class="fa fa-font"></i>
									<input type="text" class="form-control" id="exampleInputName" name="last_name" >
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" name="email" required >
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
								  </div>
            						<?php echo recaptcha_get_html($publickey).'<br />'.@$_REQUEST['captcha_msg']; ?>

								  <div class="form-actions">
									<label class="checkbox">
										<input type="checkbox" class="uniform" value="" required> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
									</label>
									<button type="submit" value="signup" class="btn btn-success">Sign Up </button>
								  </div>
								</form>
								<!-- SOCIAL REGISTER -->
								<div class="divide-20"></div>
								<div class="center">
									<strong>Or register using your social account</strong>
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
								<!-- /SOCIAL REGISTER -->
								<div class="login-helpers">
									<a href="<?php URL; ?>login/LoginCustomer"> Back to Login</a> <br>
									<a href="<?php echo URL; ?>"> Back to home</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/REGISTER -->

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
	$("#usersingup").submit(function(event)
     {

        event.preventDefault();

	   $.post("<?php echo URL; ?>signup/SignupUser",{"formdata":$("#usersingup").serialize()},function(result)
       {
	       console.log(result);
		   var obj=jQuery.parseJSON(result);
		   
		  $(".error").html("");
		  if(obj.error!==undefined)
	       {
	        $("#error").html(obj.error);
	       }
		   if(obj.url!==undefined)
		   {
		   
	          $.get("<?php echo URL; ?>signup/sendemail",function(result)
			  {
		     
		        console.log(result);
	          })
		   
		   }
           /*var obj=jQuery.parseJSON(result);
		   console.log(obj);
		   $(".error").html("");
		   if(obj.error!==undefined)
	       {
	        $("#error").html(obj.error);
	       }
		   if(obj.url!==undefined)
	       {
	        document.location=obj.url;
	       }*/
       })



     })

		
		
			App.setPage("login");  //Set current page
			App.init(); //Initialise plugins and elements
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

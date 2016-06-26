<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>FoodService :: Forgot Password</title>
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
			
			
			<!-- FORGOT PASSWORD -->
			<section id="forgot_password">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">Reset Password</h2>
								<div class="divide-40">
									<p id="error" class="error alert-danger">
									</p>

								</div>
																	<br>
								<form role="form" role="form" method="POST" id="forgotpasswordform" action="<?php echo URL; ?>forgot_password/ResetPassword">
								  <div class="form-group">
									<label for="exampleInputEmail1">Enter your Email address</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" name="email">
								  </div>
								  <div class="form-actions">
						<button type="submit" class="btn btn-info">Send Me Reset Instructions</button>
								  </div>
						</form>
								<div class="login-helpers">
									<a href="<?php echo URL; ?>frontend/login">Back to Login</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- FORGOT PASSWORD -->
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
	$("#forgotpasswordform").submit(function(event)
     {

        event.preventDefault();
	   $.post("<?php echo URL; ?>forgot_password/ResetPassword",{"formdata":$("#forgotpasswordform").serialize()},function(result)
       {
	       console.log(result);
           var obj=jQuery.parseJSON(result);
		   console.log(obj);
		   $(".error").html("");
		   if(obj.error!==undefined)
	       {
	        $("#error").html(obj.error);
	       }
		   if(obj.url!==undefined)
	       {
	            $.get("<?php echo URL; ?>forgot_password/sendemail",function(result)
                {
				console.log(result);
				})
	       }
       })
     })
	})
	</script>
	
	<!-- /JAVASCRIPTS -->
</body>
</html>
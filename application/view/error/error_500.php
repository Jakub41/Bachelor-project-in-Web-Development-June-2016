<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Error 500</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>css/responsive.css" >
	
	<link href="font-awesome/css/font-awesome.min.<?php echo URL; ?>css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	
	<!-- PAGE -->
	<section id="page">
				<div class="row">						
						<div class="row">
							<div class="col-md-12 not-found text-center">
							   <div class="error-500">
								  500
							   </div>
							</div>
							<div class="col-md-12  not-found text-center">
							   <div class="content">
								  <h3>Oops! Something went wrong</h3>
								  <p>
									Don't worry! We're working on it.
								  </p>
								  <div class="btn-group">
									<a href="<?php echo URL; ?>" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Go Back to Site</a>
								  </div>
							   </div>
							</div>
						 </div>
				</div>
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
	
		
	<!-- DATE RANGE PICKER -->
	<script src="<?php echo URL; ?>js/bootstrap-daterangepicker/moment.min.js"></script>
	
	<script src="<?php echo URL; ?>js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="<?php echo URL; ?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="<?php echo URL; ?>js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="<?php echo URL; ?>js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="<?php echo URL; ?>js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("widgets_box");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>
<?php 
	session_start();
	// session_unset();
	// session_destroy();
	$_SESSION['isThatOK'] = 'NotOK';
	$_SESSION['email'] = '';
	$_SESSION['password'] = '';

	echo "Logging Out...";
	header('location:'.URL.'frontend/index');
 ?>
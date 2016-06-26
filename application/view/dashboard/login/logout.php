<?php 
	session_start();

	session_unset();
	session_destroy();
	require APP.'view/dashboard/login/login.php';
 ?>
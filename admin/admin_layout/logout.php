<?php
	session_start();
	$_SESSION['user_name'] = null;
	$_SESSION['user_password'] = null;
	$_SESSION['user_email'] = null;
	$_SESSION['user_role'] = null;
	header('location:../../index.php');
 ?>
<?php
	require_once "controllers/SignupController.php";
	//require_once "controllers/EmployeeControllers.php";
	$username = $_GET["uname"];
	$res = checkUsernameValidity($username);
	echo $res;
?>
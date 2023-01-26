<?php
	session_start();
	if(!isset($_SESSION["user"])){
	header("Location: index.php");
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
	<fieldset>
			 <legend align="center" >
			 
			 <tr>
			 <style>
			 
		  </style>
			<div class="text-center">				  				    
				<td><h1  align="center" style="font-family:verdana;">WELCOME <?php echo $_SESSION["user"];?> Manager Dashboard</h1></td>
			</div>		
			      </tr>
				    </legend>
	<form action="" method="post">
		<div class="text-center">
			<a href="AddEmployee.php" class="btn btn-danger">Add Employee</a>
			<a href="AllEmployers.php" class="btn btn-warning">All Employers</a>			
			<a href="AddTickets.php" class="btn btn-danger">Add Tickets</a>
			<a href="AllTickets.php" class="btn btn-warning">All Tickets</a>
			<a href="AddShipInformation.php" class="btn btn-danger">Add Ship Information</a>
			<a href="AllShipInformation.php" class="btn btn-warning">All Ship Information</a>
			<a href="index.php" class="btn btn-primary">Logout</a>		
		</div>
		</fieldset>
	
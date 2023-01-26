<?php
    require_once 'controllers/SalaryBonusController.php';
	//session_start();	 
	$result = getAllEmployeeSalaryBonus();
	//echo"<pre>";
	//print_r($categories);
	//echo"</pre>";
	
	if(!isset($_SESSION["employee_salary_bonus"])){
	
	}
?>

<!DOCTYPE html>
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
				<td><h1  align="center" style="font-family:verdana;">WELCOME <?php echo $_SESSION["user"];?> All Employers Salary Bonus</h1></td>
			</div>		
			      </tr>
				    </legend>
	<form action="" method="post">
		<div class="text-center">
			<a href="AddEmployeeSalaryBonus.php" class="btn btn-danger">Add Employee Salary Bonus</a>
			<a href="UpdateEmployeeSalaryBonus.php" class="btn btn-warning">Update Employee Salary Bonus</a>			
				
			<a href="index.php" class="btn btn-primary">Logout</a>		
		</div>
		
	
		
		<table align="center" border="1" style="border-collapse:collapse">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>UserName</th>
				<th>Employers_Salary</th>
				<th>Salary_Bonus</th>
			</tr>
		</thead>
<tbody>
<?php
    foreach($result as $row){
		
        echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Username"]."</td>";
        echo "<td>".$row["Employers_Salary"]."</td>";
        echo "<td>".$row["salary_Bonus"]."</td>";
		//echo'<td><a href="UpdateEmployee.php" class="btn btn-success">Edit</a></td>';
		//echo'<td><a href="DeleteEmployee.php" class="btn btn-danger">Delete</td>';
		echo"</tr>";
    }
?>
</tbody>
		</table>
		</form>
		</legend>
		</fieldset>
		</div>
	</body>
</html>



 
<?php
    require_once 'controllers/ManagerController.php';	 
	$result = getManagerDetails();
	//echo"<pre>";
	//print_r($categories);
	//echo"</pre>";
	session_start();
	if(!isset($_SESSION["manager"])){
		//$_SESSION["manager"]=$user["Username"];
	//header("Location: index.php");
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
				<td><h1  align="center" style="font-family:verdana;">WELCOME <?php echo $_SESSION["user"];?>Manager Details</h1></td>
			</div>		
			      </tr>
				    </legend>
	<form action="" method="post">
		<div class="text-center">
			<a href="UpdateManager.php" class="btn btn-warning">Update Manager</a>			
			<a href="DeleteManager.php" class="btn btn-danger">Delete Manager</a>	
			<a href="index.php" class="btn btn-primary">Logout</a>		
		</div>
		
	
		
		<table align="center" border="1" style="border-collapse:collapse">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Date Of Birth</th>
				<th>Action</th>
				<th>Action</th>
				
			</tr>
		</thead>
<tbody>
<?php
    foreach($result as $row){
		
        echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Username"]."</td>";        
        echo "<td>".$row["Email"]."</td>";
        echo "<td>".$row["Phone_Number"]."</td>";
        echo "<td>".$row["Address"]."</td>";
        echo "<td>".$row["Gender"]."</td>";
		echo "<td>".$row["Date_Of_Birth"]."</td>";
		echo'<td><a href="UpdateManager.php" class="btn btn-success">Edit</a></td>';
		echo'<td><a href="DeleteManager.php" class="btn btn-danger">Delete</td>';
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
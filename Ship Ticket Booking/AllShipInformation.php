<?php
    require_once 'controllers/ShipInformationControllers.php';	 
	$result = getAllShipInformation();
	//echo"<pre>";
	//print_r($categories);
	//echo"</pre>";
	if(!isset($_SESSION["ship_information"])){
	
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
		            <td><h1  align="center" style="font-family:verdana;">WELCOME <?php echo $_SESSION["user"];?> All Ship Information</h1></td>
			</div>		
			      </tr>
				    </legend>
	<form action="" method="post">
		<div class="text-center">
			<a href="AddShipInformation.php" class="btn btn-danger">Add Ship Information</a>
			<a href="UpdateShipInformation.php" class="btn btn-warning">Update Ship Information</a>			
			<a href="DeleteShipInformation.php" class="btn btn-danger">Delete Ship Information</a>			
			<a href="index.php" class="btn btn-primary">Logout</a>		
		</div>
		
	
		
		<table align="center" border="1" style="border-collapse:collapse">
		<thead>
			<tr>
				<th>Ship ID</th>
				<th>Ship Name</th>
				<th>Ship Class</th>
				<th>Ship Type</th>
				<th>Ship Origin</th>
				<th>Displacement</th>
				<th>Shipping Time</th>
				<th>Discription</th>
				<th>Action</th>	
				<th>Action</th>	
			</tr>
		</thead>
<tbody>
<?php
    foreach($result as $row){
		echo "<tr>";
        echo "<td>".$row["Ship_ID"]."</td>";
        echo "<td>".$row["Ship_Name"]."</td>";
        echo "<td>".$row["Ship_Class"]."</td>";
        echo "<td>".$row["Ship_Type"]."</td>";
        echo "<td>".$row["Ship_Origin"]."</td>";
        echo "<td>".$row["Displacement"]."</td>";
		echo "<td>".$row["Shipping_Time"]."</td>";
		echo "<td>".$row["Discription"]."</td>";
		echo'<td><a href="UpdateShipInformation.php" class="btn btn-success">Edit</a></td>';
		echo'<td><a href="DeleteShipInformation.php" class="btn btn-danger">Delete</td>';
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



 
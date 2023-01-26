<?php
    require_once 'controllers/TicketsControllers.php';	 
	$result = getAllTickets();
	//echo"<pre>";
	//print_r($categories);
	//echo"</pre>";
	if(!isset($_SESSION["ship_tickets"])){
	
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
				    
		            <td><h1  align="center" style="font-family:verdana;">WELCOME <?php echo $_SESSION["user"];?> All Tickets</h1></td>
			</div>		
			      </tr>
				    </legend>
	<form action="" method="post">
		<div class="text-center">
			<a href="AddTickets.php" class="btn btn-danger">Add Tickets</a>
			<a href="UpdateTickets.php" class="btn btn-warning">Update Tickets</a>			
			<a href="DeleteTickets.php" class="btn btn-danger">Delete Tickets</a>			
			<a href="index.php" class="btn btn-primary">Logout</a>		
		</div>
		
	
		
		<table align="center" border="1" style="border-collapse:collapse">
		<thead>
			<tr>
				<th>Ship ID</th>
				<th>Ship Name</th>
				<th>Leaving From</th>
				<th>Going To</th>
				<th>Date Of Journey</th>
				<th>Return Date</th>				
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
        echo "<td>".$row["Leaving_From"]."</td>";
        echo "<td>".$row["Going_To"]."</td>";
        echo "<td>".$row["Date_Of_Journey"]."</td>";
        echo "<td>".$row["Return_Date"]."</td>";
		echo'<td><a href="UpdateTickets.php" class="btn btn-success">Edit</a></td>';
		echo'<td><a href="DeleteTickets.php" class="btn btn-danger">Delete</td>';
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



 
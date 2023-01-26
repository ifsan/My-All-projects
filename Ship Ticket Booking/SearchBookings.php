<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Ship Schedule Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 200px
			}
			</style>
		<!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<img class="card-image" src="diamond.jpg"/> 
		<h1 id="title">
			Cruise Marine
		</h1>
		<div>
			<ul>
			<div class="nav-bar">
				<a href="admin_header.php">Home</a>
				<a href="admin_header.php">Dashboard</a>
				<a href="index.php">Logout</a>
			</ul>
		</div>
		</div>
		<form action="ship_available_details.php" method="post">
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The ship Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid ship Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Origin</td>
					<td class="fix_table">Destination</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="origin" required></td>
					<td class="fix_table"><input type="text" name="destination" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Date</td>
					<td class="fix_table">Arrival Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" required></td>
					<td class="fix_table"><input type="date" name="arr_date" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Time</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="time" name="dep_time" required></td>
					<td class="fix_table"><input type="time" name="arr_time" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Ship ID</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="jet_id" required>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
		</form>
		<!--check out addling local host in links and other places

		-->
	</body>
</html>
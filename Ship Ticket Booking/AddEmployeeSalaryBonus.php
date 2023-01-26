<?php
	session_start();
	$_SESSION['message']="";
	require_once "models/db_config.php";
	
	$id="";
	$err_id="";	
	$name="";
	$err_name="";
    $uname="";
	$err_uname="";
	$bonus="";
	$err_bonus="";
	$salary="";
	$err_salary="";
	
	$hasError=false;
	$err_message="";
	
	
	 	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["id"])){
		   $err_id="*ID Required";
		   $hasError = true;
		}	 
		else{
		   $id = htmlspecialchars($_POST["id"]);
		}
		
		if(empty($_POST["name"])){
		   $err_name="*Name Required";
		   $hasError = true;
		}	 
		else{
		   $name = htmlspecialchars($_POST["name"]);
		}
		
		if(empty($_POST["uname"])){
		   $err_uname="*Username Required";
		   $hasError = true;
		}
		else if(strlen($_POST["uname"])<5)
		{
		  $err_uname="*Username Must Contain At Least 5 Character";
		  $hasError = true;
		}
		else{
		   $uname = htmlspecialchars($_POST["uname"]);
		}
		
		if(empty($_POST["bonus"])){
		   $err_bonus="*Employers Salary Bonus Required";
		   $hasError = true;
		}
		
		else{
		   $bonus = htmlspecialchars($_POST["bonus"]);
		}
	   
		if(empty($_POST["salary"])){
		   $err_salary="*Employers Salary Required";
		   $hasError = true;
		}
		
		else{
		   $salary = htmlspecialchars($_POST["salary"]);
		}
		
		if(!$hasError){
			//$_SESSION["employers"]=$name;
			$query = "insert into employee_salary_bonus values('$id','$name','$uname','$salary','$bonus')";
			execute($query);							  
		}
	}
	
	
?>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
			<style>
				.btn-mine{
					background-color:tomato;
					color:white;
					border:none;
					width:40%;
					height:30%;
				}
				.btn-mine:hover{
					background-color:red;
				}
				.btn-mine:active{
					background-color:green;
				}
			</style>
	</head>
    <body>	
		
		<div class="signupdiv">		 		  		
			<table align="center" >
				<tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				</tr>							   
			</table>
			
			<fieldset>
			<legend align="center">
				<tr>				  				    
		            <td><h1 align="center" style="font-family:verdana;">Add Employee Salary Bonus</h1></td>					
				</tr>
			</legend>
			
			
			<form action="" method="post" class="form-horizontal form-material" onsubmit="return validate()">
				<div class="form-group">			
				 <table align="center" style="border-collapse:collapse;">
				 <tr>
					<td><span> ID</span></td>
					<td>:
						<input type="number" placeholder="ID" id="id" name="id" value="<?php echo $id?>">
						<span id="err_id"><?php echo $err_id?></span></td>
				</tr>
				<tr>
					<td><span>Name</span></td>
					<td>:
						<input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name?>">
						<span id="err_name"><?php echo $err_name?></span></td>
				</tr>
					<tr>
					<td><span> Username</span></td>
					<td>:
						<input type="text" placeholder="Username" id="uname" name="uname" value="<?php echo $uname?>">
						<span id="err_uname"><?php echo $err_uname?></span></td>
				</tr>
				<tr>
					<td><span>Employers Salary</span></td>
					<td>:
						<input type="number" placeholder="Salary" id="salary" name="salary" value="<?php echo $salary?>">
						<span id="err_salary"><?php echo $err_salary?></span></td>
				</tr>
				<tr>
					<td><span>Employers Salary Bonus</span></td>
					<td>:
						<input type="number" placeholder="Bonus" id="bonus" name="bonus" value="<?php echo $bonus?>">
						<span id="err_bonus"><?php echo $err_bonus?></span></td>
				</tr>
					   <td colspan="2" align="center">
						<p><span><input type="checkbox"></span>I agree to the terms of services</p>
						</td>
						</tr>
					    <tr>						
						   <td colspan="2" align="center"><input class="btn-mine my-font" type="submit"  value="Add Salary" name="signup">	</td>						   
					    </tr>
						
				  </table>
			  
			  </form>
			  </fieldset>
		  </div>
		  </div>
	 </body>
	 <script>
		function get (id){
			return document.getElementById(id);
		}
	   function validate(){
		   //alert("ADD");
		   cleanUp();
		   var hasError=false;
		   if(get("id").value == ""){
			   get ("err_id").innerHTML="*ID Required<br>";
			   get ("err_id").style.color="red";
			   hasError=true;			   
		   }
		   if(get("name").value == ""){
			   get ("err_name").innerHTML="*Name Required<br>";
			   get ("err_name").style.color="red";
			   hasError=true;			  
		   }
		   if(get("uname").value == ""){
			   get ("err_uname").innerHTML="*Username Required<br>";
			   get ("err_uname").style.color="red";
			   hasError=true;			   
		   }
		   if(get("salary").value == ""){
			   get ("err_salary").innerHTML="*Salary Required<br>";
			   get ("err_salary").style.color="red";
			   hasError=true;			   
		   }
		   if(get("bonus").value == ""){
			   get ("err_bonus").innerHTML="*Salary Bonus Required<br>";
			   get ("err_bonus").style.color="red";
			   hasError=true;			   
		   }
		   
		   //alert (err_msg);
		   if(!hasError){
		   return true;
		   }		  
			   return false;
		   
	   }
		function cleanUp(){
			get ("err_id").innerHTML="";
			get ("err_name").innerHTML="";
			get ("err_uname").innerHTML="";	
			get ("err_salary").innerHTML="";
			get ("err_bonus").innerHTML="";
		}
			
		
	//alert("This is Add Employee");
	 
	 </script>
</html>

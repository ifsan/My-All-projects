<?php
	require_once "models/db_config.php";
	session_start();
	$uname = "";
	$err_uname = "";
	$id = "";
	$err_id = "";
	$class = "";
	$err_class = "";
	$type = "";
	$err_type = "";
	$origin = "";
	$err_origin = "";
	$displacement = "";
	$err_displacement = "";
	$time = "";
	$err_time = "";
	$discription = "";
	$err_discription = "";
	$hasError=false;
	$err_message="";	
	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["uname"])) {
			$err_uname = "* Ship Name required";
		} 
		else {
			$uname = $_POST["uname"];
		}

		if (empty($_POST["id"])) {
			$err_id = "* Ship ID required";
		} 
		else {
			$id = $_POST["id"];
		}

		if (empty($_POST["class"])) {
			$err_class = "*Ship Class required";
		} 
		else {
			$class = $_POST["class"];
		}

		if (empty($_POST["type"])) {
			$err_type = "*Ship type required";
		} 
		else {
			$type = $_POST["type"];
		}

		if (empty($_POST["origin"])) {
			$err_origin = "*Origin required";
		} 
		else {
			$origin = $_POST["origin"];
		}

		if (empty($_POST["displacement"])) {
			$err_displacement = "*Displacement(Tons) required";
		} 
		else {
			$displacement = $_POST["displacement"];
		}
		
		if (empty($_POST["time"])) {
			$err_time = "*Shipping time required";
		} 
		else {
			$time = $_POST["time"];
		}
		
		if (empty($_POST["discription"])) {
			$err_discrioption = "*Discription required";
		} 
		else {
			$discription = $_POST["discription"];
		}
		
		if(!$hasError){
			//$_SESSION["ship_tickets"]=$name;
			$query = "insert into ship_information values('$id','$uname','$class','$type','$origin','$displacement','$time','$discription')";
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
					height:50%;
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
		 
		  			  			  
		      <table align="center">
				  <tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span>
					</td>
				  </tr>
			      
			  </table>
			  <fieldset>
			 <legend align="center">
			 <tr>
				  
				    <!--<td align="center"><img src="resources/user.png" width="150px" height="150px"></td>-->
		            <td><h1 align="center" style="font-family:verdana;">Add Ship Information</h1></td>
					
			      </tr>
				    </legend>
			  
		<form action="" method="post" onsubmit="return validate()">
			<table align="center">
				<tr>
					<td><span>Ship ID</span></td>
					<td>:
						<input type="number" placeholder="Ship ID" id="id" name="id" value="<?php echo $id?>">
						<span id="err_id"><?php echo $err_id?></span></td>
				</tr>
				
				<tr>
					<td><span>Ship Name</span></td>
					<td>:
						<input type="text" placeholder="Ship Name" id="uname" name="uname" value="<?php echo $uname?>">
						<span id="err_uname"><?php echo $err_uname?></span></td>
				</tr>
				<tr>
					<td><span>Ship Class</span></td>
					<td>:
						<input type="text" placeholder="Ship Class" id="class" name="class" value="<?php echo $class?>">
						<span id="err_class"><?php echo $err_class?></span></td>
				</tr>				
				<tr>
					<td><span>Ship Type</span></td>
					<td>:
						<input type="text" placeholder="Ship Type" id="type" name="type" value="<?php echo $type?>">
						<span id="err_type"><?php echo $err_type?></span></td>
				</tr>
				<tr>
				   <td><span>Shipping Origin</td>
				   <td>:
				     <select id="origin" name="origin" value="<?php echo $origin;?>">
					      <option value="">Choose One</option>
					      <option value="Dhaka To Barishal">Dhaka To Barishal</option>
						  <option value="Dhaka To Shariatpur">Dhaka To Shariatpur</option>
						  <option value="Dhaka To Elisha(Bhola)">Dhaka To Elisha(Bhola)</option>
						  <option value="Dhaka To Chandpur">Dhaka To Chandpur</option>
				          <option value="CoxsBazar To Saint Martin">CoxsBazar To Saint Martin</option>
						  <option value="Saint Martin To CoxsBazar">Saint Martin To CoxsBazar</option>
				          <option value="Barishal To Dhaka">Barishal To Dhaka</option>
						  <option value="Barishal To Shariatpur">Barishal To Shariatpur</option>
						  <option value="Barishal To Elisha(Bhola)">Barishal To Elisha(Bhola)</option>
						  <option value="Barishal To Chandpur">Barishal To Chandpur</option>
						  <option value="Chittagong to Dhaka">Chittagong to Dhaka</option>
						  <option value="Chittagong to CoxsBazar">Chittagong to CoxsBazar</option>
						  <option value="Chadnpur To Dhaka">Chadnpur To Dhaka</option>
						  <option value="Chadnpur To Shariatpur">Chadnpur To Shariatpur</option>
						  <option value="Chadnpur To Barishal">Chadnpur To Barishal</option>
						  <option value="Chadnpur To Elisha(Bhola)">Chadnpur To Elisha(Bhola) </option>
						  <option value="Elisha(Bhola) To Dhaka">Elisha(Bhola) To Dhaka</option>
						  <option value="Elisha(Bhola) To Barishal">Elisha(Bhola) To Barishal</option>
						  <option value="Elisha(Bhola) To Shariatpur">Elisha(Bhola) To Shariatpur</option>
						  <option value="Elisha(Bhola) To Chandpur">Elisha(Bhola) To Chandpur</option>						 
						  <option value="Shariatpur To Dhaka">Shariatpur To Dhaka</option>
						  <option value="Shariatpur To Barishal">Shariatpur To Barishal</option>
						  <option value="Shariatpur To Chandpur">Shariatpur To Chandpur</option>
						  <option value="Shariatpur To Elisha(bhola)">Shariatpur To Elisha(bhola)</option>										
		             </select>
					 <span id="err_origin"><?php echo $err_origin?></span></td>
					 </td>
				</tr> 
				<tr>
					<td><span>Displacement(Tons)</span></td>
					<td>:
						<input type="text" placeholder="Displacement(Tons)" id="displacement" name="displacement" value="<?php echo $displacement?>">
						<span id="err_displacement"><?php echo $err_displacement?></span></td>
				</tr>
				<tr>
					<td><span>Shipping Time</span></td>
					<td>:
						<input type="text" placeholder="hh:ii:ss" id="time" name="time" value="<?php echo $time?>">
						<span id="err_time"><?php echo $err_time?></span></td>
				</tr>								
				<tr>
					<td><span>Ship Discription</span></td>
					<td>:
						<input type="text" placeholder="Ship Discription" id="discription" name="discription" value="<?php echo $discription?>">
						<span id="err_discription"><?php echo $err_discription?></span></td>
				</tr>
					<tr>
					   <td colspan="2" align="center">
						<p><span><input type="checkbox"></span>I agree to the terms of services</p>
						</td>
						</tr>
				<tr>
					<p id="p1">
					   <td colspan="2" align="center"><input class="btn-mine my-font" type="submit"  value="ADD" name="signup">	</td>
					</p>   
					</tr>
			</table>	
		</form>
		</fieldset>
	</body>
	<script>
		function get (id){
			return document.getElementById(id);
		}
	   function validate(){
		   //alert("ADD Tickets");
		   cleanUp();
		   var hasError=false;
		   if(get("id").value == ""){
			   get ("err_id").innerHTML="*Ship ID Required<br>";
			   get ("err_id").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("uname").value == ""){
			   get ("err_uname").innerHTML="*Ship Name Required<br>";
			   get ("err_uname").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("class").value == ""){
			   get ("err_class").innerHTML="*Ship Class Required<br>";
			   get ("err_class").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("type").value == ""){
			   get ("err_type").innerHTML="*Shipping Type Required<br>";
			   get ("err_type").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("origin").value == ""){
			   get ("err_origin").innerHTML="*Shipping Origin Required<br>";
			   get ("err_origin").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("displacement").value == ""){
			   get ("err_displacement").innerHTML="*Displacement(Tons) Required<br>";
			   get ("err_displacement").style.color="red";			   
			   hasError=true;   
		   }
		   if(get("time").value == ""){
			   get ("err_time").innerHTML="*Shipping Time Required<br>";
			   get ("err_time").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("discription").value == ""){
			   get ("err_discription").innerHTML="*Discription Required<br>";
			   get ("err_discription").style.color="red";
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
			get ("err_uname").innerHTML="";
			get ("err_class").innerHTML="";
			get ("err_type").innerHTML="";
			get ("err_origin").innerHTML="";
			get ("err_displacement").innerHTML="";
			get ("err_time").innerHTML="";
			get ("err_discription").innerHTML="";
		}	 
	 </script>
</html>
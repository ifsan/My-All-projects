<?php
	require_once 'models/db_config.php';
	
	//declare validation veriables
	if(isset($_POST["manager_details"])){
		//do validation
		insertManager($_POST["id"]);
		insertManager($_POST["name"]);
		insertManager($_POST["uname"]);
		insertManager($_POST["pass"]);
		insertManager($_POST["email"]);
		insertManager($_POST["num"]);
		insertManager($_POST["add"]);
		insertManager($_POST["gender"]);
		insertManager($_POST["birth"]);
	}
	
	function insertManager($id,$name,$uname,$pass,$email,$num,$add,$gender,$birth){
		$query = "insert into manager values('$id','$name','$uname','$pass','$email','$num','$add','$gender','$birth',)";		
		execute($query);
		header("Location: ManagerDetails.php");
	}
	function getEmployers($id){
		$query = "select * from manager where id=$id and name=$name and uname=$uname and pass=$pass and email=$email and num=$num and add=$add and gender=$gender and birth=$birth";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getManagerDetails(){
		$query = "select * from manager";
		$result = get($query);		
		return $result;		
	}
?>
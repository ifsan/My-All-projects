<?php
	require_once 'models/db_config.php';
	session_start();
	//declare validation veriables
	if(isset($_POST["add_employers"])){
		//do validation
		insertEmployers($_POST["id"]);
		insertEmployers($_POST["name"]);
		insertEmployers($_POST["uname"]);
		insertEmployers($_POST["pass"]);
		insertEmployers($_POST["email"]);
		insertEmployers($_POST["num"]);
		insertEmployers($_POST["add"]);
		insertEmployers($_POST["gender"]);
		insertEmployers($_POST["birth"]);
	}
	
	function insertEmployers($id,$name,$uname,$pass,$email,$num,$add,$gender,$birth){
		$query = "insert into employers values('$id','$name','$uname','$pass','$email','$num','$add','$gender','$birth',)";		
		execute($query);
		header("Location: AllEmployers.php");
	}
	function getEmployers($id,$name,$uname,$pass,$email,$num,$add,$birth){
		$query = "select * from employers where id=$id and name=$name and uname=$uname and pass=$pass and email=$email and num=$num and add=$add and gender=$gender and birth=$birth";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllEmployers(){
		$query = "select * from employers";
		$result = get($query);		
		return $result;		
	}
	
	function UpdateEmployee($id,$name,$uname,$pass,$email,$num,$add,$birth){
		$query = "update employers set name='$name' where id=$id";
		execute($query);
		header("Location: AllEmployers.php");
	}
	
	function checkUsernameValidity($username){
		$query = "select * from employers where Username='$username'";
		$result = get($query);
		
		if(count($result) > 0){
			return "false";
		}
		return "true";
		}
?>
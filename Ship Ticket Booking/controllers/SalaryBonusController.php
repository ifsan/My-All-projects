<?php
	require_once 'models/db_config.php';
	session_start();
	//declare validation veriables
	if(isset($_POST["add_employee_salary_bonus"])){
		//do validation
		insertEmployeeSalaryBonus($_POST["id"]);
		insertEmployeeSalaryBonus($_POST["name"]);
		insertEmployeeSalaryBonus($_POST["uname"]);
		insertEmployeeSalaryBonus($_POST["salary"]);
		insertEmployeeSalaryBonus($_POST["bonus"]);
		
	}
	
	function insertEmployeeSalaryBonus($id,$name,$uname,$salary,$bonus){
		$query = "insert into employee_salary_bonus values('$id','$name','$uname','$salary','$bonus')";		
		execute($query);
		header("Location: AllEmployeeSalaryBonus.php");
	}
	function getEmployeeSalaryBonus($id,$name,$uname,$salary,$bonus){
		$query = "select * from employee_salary_bonus where ID=$id and Name=$name and Username=$uname and Employers_Salary=$salary and Salary_Bonus=$bonus";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllEmployers(){
		$query = "select * from employee_salary_bonus";
		$result = get($query);		
		return $result;		
	}
	
	function UpdateEmployee($id,$name,$uname,$salary,$bonus){
		$query = "update employee_salary_bonus set name='$name' where id=$id";
		execute($query);
		header("Location: AllEmployeeSalaryBonus.php");
	}
	
	
?>
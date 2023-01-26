<?php
	require_once 'models/db_config.php';
	session_start();
	//declare validation veriables
	if(isset($_POST["add_shipinformation"])){
		//do validation
		insertShipInformation($_POST["id"]);
		insertShipInformation($_POST["name"]);
		insertShipInformation($_POST["class"]);
		insertShipInformation($_POST["type"]);
		insertShipInformation($_POST["origin"]);
		insertShipInformation($_POST["displacement"]);
		insertShipInformation($_POST["time"]);
		insertShipInformation($_POST["discription"]);
	}
	
	function insertShipInformation($id,$name,$class,$type,$origin,$diplacement,$time,$discription){
		$query = "insert into ship_information values('$id','$uname','$class','$type','$origin','$displacement','$time','$discription')";		
		execute($query);
		header("Location: AllShipInformation.php");
	}
	function getShipInformation($id){
		$query = "select * from ship_information where id=$id and uname=$uname and class=$class and type=$type and origin=$origin and displacement=$displacement and time=$time and discription=$discription";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllShipInformation(){
		$query = "select * from ship_information";
		$result = get($query);		
		return $result;		
	}
?>
<?php
	require_once 'models/db_config.php';
	session_start();
	//declare validation veriables
	if(isset($_POST["add_tickets"])){
		//do validation
		insertTickets($_POST["id"]);		
		insertTickets($_POST["uname"]);
		insertTickets($_POST["from"]);
		insertTickets($_POST["to"]);
		insertTickets($_POST["date_of_journey"]);
		insertTickets($_POST["return_date"]);
		insertTickets($_POST["journey_time"]);
		insertTickets($_POST["return_time"]);
	}
	
	function insertTickets($id,$uname,$from,$to,$date_of_journey,$return_date,$journey_time,$return_time){
		$query = "insert into ship_tickets values('$id','$uname','$from','$to','$date_of_journey','$return_date','$journey_time','$return_time')";		
		execute($query);
		header("Location: AllTickets.php");
	}
	function getTickets($id){
		$query = "select * from ship_tickets where id=$id and uname=$uname and from=$from and to=$to and date_of_journey=$date_of_journey and return_date=$return_date and journey_time=$journey_time and return_time=$return_time";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllTickets(){
		$query = "select * from ship_tickets";
		$result = get($query);		
		return $result;		 
	}
?>
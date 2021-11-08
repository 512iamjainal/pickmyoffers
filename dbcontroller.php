<?php
class DBController {
	$servername = "localhost";
	$username = "sanjay008";
	$password = "Sanjay@123";
	$db="pickmyoffer";
	
	function __construct() {
		echo 'hello my';
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		$sa = mysql_select_db($this->database,$conn);
		if($sa)
{
	echo 'sanjay connected';
}

	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>
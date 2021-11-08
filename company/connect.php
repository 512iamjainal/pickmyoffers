<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="pickmyoffer";
// Create connection
$con =mysqli_connect($servername, $username, $password,$db);
if($con)
{
	//echo "connected";
	//mysql_select_db($db);
}
// Check connection
else {
    die("Connection failed: " . $con->connect_error);
}
?> 
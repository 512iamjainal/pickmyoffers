<?php
include ('connect.php');

$email = $_POST['e'];

$fetchdata = "select * from users where email = '".$email."'";
	$result = mysql_query($fetchdata);
	if(mysql_num_rows($result) > 0)
	{
		
	}
	else
	{
		echo "Email Id Not Registered Please Check";
	}


?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//include("connect.php");
//print_r($con);
function GetUserAvailableBalance($user_id)
{
	global $con;
	$available_balance = 0;
	$query_avl_bal= "SELECT new_balance FROM users WHERE id = '".$user_id."'";
	//echo $query;
	$result = mysqli_query($con,$query_avl_bal);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['new_balance'] != "")
		{
			$available_balance = $row['new_balance'];
		}
	}
	else
	{
		$available_balance = 0;
	}
	
	return  round($available_balance,2);
}
function GetUserTotalBalance($user_id)
{
	global $con;
	$balance = 0;
	$query_balance = "select balance from users where id = '".$user_id."'";
	//echo $query;
	$result = mysqli_query($con,$query_balance);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['balance'] != "")
		{
			$balance = $row['balance'];
		}
	}
	else
	{
		$balance = 0;
	}
	
	return round($balance,2);
}
function GetMetaValue($meta_key)
{
	global $con;
	$meta_value = "";
	$query = "select meta_value from settings where meta_key = '".$meta_key."'";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['meta_value'] != "")
		{
			$meta_value = $row['meta_value'];
		}
	}
	else
	{
		$meta_value = "";
	}
	
	return $meta_value;
}
function UpdateUserClickBalance($user_id,$coupon_id)
{
	global $con;
	$msg = 0;
	$query = "select balance,new_balance from users where id = '".$user_id."'";
	$result = mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		$rate = GetMetaValue('rate');
		$balance = $row['balance'] + $rate;
		$new_balance = $row['new_balance'] + $rate;
		
		$update_query = "update users set balance = '".$balance."',new_balance='".$new_balance."' where id='".$user_id."'";
		$update_result = mysqli_query($con,$update_query);
		if($update_result)
		{
			//Insert Record in Ckick_history Table
			$insert_click_history = "INSERT INTO click_history(coupon_id,amount,user_id,CreatedAt) VALUES ('".$coupon_id."','".$rate."','".$user_id."','".date('Y-m-d H:i:s')."')";
			$result_click_history = mysqli_query($con,$insert_click_history);
			$msg = 1;
		}
		else
		{
			$msg = 0;
		}
	}
	else
	{
		$msg = 0;
	}
	return $msg;
}
function GetUserDetails($user_id){
	global $con;
	$query = "select * from users where id='".$user_id."'";
//	echo $query;
	
	$resultuserdetails = mysqli_query($con,$query);
	
	

		if(mysqli_num_rows($resultuserdetails)>0)
	   // echo mysql_num_rows($resultuserdetails);
//	echo "hello";
		{
		$data=mysqli_fetch_assoc($resultuserdetails);

	}
	return $data;
}

 
?>
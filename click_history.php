<?php
	include_once('connect.php');
	include_once('company/functions.php');
	
	$rate = GetMetaValue('rate');
	//print_r($_POST['data']);
	if(isset($_POST) && !empty($_POST))
	{
		$coupon_id = $_POST['coupon_id'];
		$user_id = $_POST['user_id'];
		
		$res = UpdateUserClickBalance($user_id,$coupon_id);
		//echo $res;
		if($res == 1)
		{
			echo "Success";
		}
		
	}
?>
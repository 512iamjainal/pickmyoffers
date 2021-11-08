<?php
include_once("header.php");
include_once("sidebar.php");
$id=$_GET['del'];
$res = "UPDATE users SET isdeleted = 0 WHERE id = '$id'";
$result = mysql_query($res,$con);
//echo $res;
//exit;
if($result == 1)
{
	echo '<script>window.location.href="users.php";</script>';
	
    //header("Location:user.php");
}
else
{
      // echo "not deleted".  mysqli_error($con);
	  echo "error";
}
include('footer.php');
?>
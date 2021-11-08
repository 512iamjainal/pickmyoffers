<?php

include_once('connect.php');
 session_start();
 

	if(!isset($_SESSION['id']))
	{
		header('location:../login.php');
	}
 $id=$_SESSION['id'];
 if(isset($_POST["s1"]))
 {

$contact=$_POST["contact"];
$fname=$_POST["name"];  
$lname=$_POST["lname"];
// echo $lname;
$email=$_POST["email"];

$qry= "update users set fname='".$fname."',lname='".$lname."',email='".$email."',phone='".$contact."' where id='".$id."'";
echo $qry;
echo "<br>";
  $rs=mysqli_query($con,$qry);
  echo $rs;
  if($rs)
  {
   
   echo "success ";
  }
  else
  {
  echo "error";
   
  }  
}
?>

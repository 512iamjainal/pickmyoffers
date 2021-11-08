<?php 
include "connect.php";
// if(isset($_POST['delete']))
// {

    $id=$_GET["id"];
    echo $id;
    //$qry="UPDATE coupons SET isdeleted='1' WHERE id='1' ";
   $qry="delete from coupons where id='$id'";
   echo $qry;
    $rs=mysqli_query($con,$qry);
   // while($r=mysql_fetch_assoc($rs))
     if($rs)
      {
      // echo $qry;
      echo "success";
  }
  else
  {
    // echo $qry;
    echo "error";
  }
  ?>
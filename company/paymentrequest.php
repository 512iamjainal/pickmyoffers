<?php 
include "header.php";
include "sidebar.php";
include "connect.php";
$user_id=$_SESSION['id'];
//$user_id=1;
$msg="";
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['s1']))
{
  
// $description=$_POST['description'];
$amount=$_POST['mini_amount'];
$Paper_link=$_POST['Paper_link']; 
// if(empty($amount)||empty($Paper_link))
// {
//   echo "Please Fill up the filed";
// }
  $balance=GetUserAvailableBalance($user_id);
  //echo $balance;
  

  $metavalue=GetMetaValue('mini_amount');

  //echo $metavalue;
 
  if($metavalue<=$balance)
  {
    
    if($amount<=$balance){
    //$queryinset="insert into user_request (user_id,$key,status,CreatedAt)values ('".$user_id."','".$value."','Pending','".date('d-m-y H:i:s')."') ";
   // $queryinset="insert into user_request (user_id,mini_amount,Paper_link ,description,status,CreatedAt)values ('".$user_id."','".$amount."','".$Paper_link."','".$description."','Pending','".date('Y-m-d H:i:s')."') ";
      $queryinsert="insert into user_request (user_id,mini_amount,Paper_link,status,CreatedAt)values ('".$user_id."','".$amount."','".$Paper_link."','Pending','".date('Y-m-d H:i:s')."') ";
    $result=mysqli_query($con,$queryinsert);
    echo  $queryinsert;
   
    $queryinsertlog="insert into payment_log (user_id,mini_amount,status,CreatedAt)values ('".$user_id."','".$amount."','Pending','".date('Y-m-d H:i:s')."') ";
    $resultlog=mysqli_query($con,$queryinsertlog);
   //echo  $queryinsetlog;
   
   
    $newbalance= $balance-$amount;
    //  echo $newbalance;

    $updatebalancequery="update users set new_balance='".$newbalance."' where id='".$user_id."'";
   // echo $updatebalancequery;
    $updateresult=mysqli_query($con,$updatebalancequery);
   
  // echo $queryinset;
  //echo "success";
  $msg=1;
  }
  
  else
  {
     
    //echo "you have insufficient balance";
    $msg=0;
  }
}
else
{
   $msg=3;
}



}
  
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Payment Request
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payment Request</li>
      </ol>
    </section>
  <section class="content">
        <div class="row">
            <div class="col-md-8 page-content col-md-offset-2">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center"></h2> 


        <div class="row">
                        <div class="col-sm-12">
                            <div class="form-errors form-errors-pad"></div>
                            <?php  if($msg == '1')
     {
   ?>
     <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo "Your Request Successfuly Send"; ?>
              </div>
   <?php
    }
    if($msg == '3')
    {
   ?>
     <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Fail!</h4>
                <?php echo "You Have Insufficient Balance , Available Balance Must be Greater than or equal to $metavalue "; ?>
              </div>
    <?php } 
     if($msg == '0')
    {
   ?>
     <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Fail!</h4>
                <?php echo "You Have Insufficient Balance , Available Balance Must be Less than Requested Amount  "; ?>
              </div>
    <?php } ?>                   
                            
                    <form name="sentMessage" id="contactForm" method="post" enctype="multipart/form-data">				
									     <div class="form-group">
                                    <label class="control-label col-sm-2" >Amount </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" placeholder="Enter Amount" title="Enter Amount" name="mini_amount" value= "" type="text" required >
                                    </div>
                                    </div>
                                    <br>   
                                   <br>
                                      <div class="form-group">
                                    <label class="control-label col-sm-2" >Paypal Email </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" placeholder="Enter Paypal Email" title="Enter Paypal Email" name="Paper_link" value= "" type="text" required>
                                    </div>
                                    </div>
                                    <br>   
                                  
                                  <!--  <div class="form-group">
                                    <label class="control-label col-sm-2">Remark </label>
                                    <div class="col-sm-8">
                                    
                                       <textarea class="form-control" row='2' name="description"></textarea>                               
                                    <br>
                                    </div>
                                  </div>
                                        <br> -->
                                        
									<div class="form-group">        
                                                <div class="col-sm-offset-2 col-sm-5">
                                                    <div><input type="submit" class="btn btn-lg btn-primary btn-block" name="s1" value="Submit"></div>
                                                </div>
                                             </div>
											 </form>
											 </div>
											 </div>
											 </div>
											 </div>
											 </div>
											 </div>
											 </div>
											
<?php
include "footer.php";
?> 
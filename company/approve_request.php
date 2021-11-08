<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['aid']))
  {
    //echo "success";
  //echo "<br>";
        $approvequery="update user_request set status='Approved', CreatedAt='".date('Y-m-d H:i:s')."'  where id='".$_GET['aid']."' ";
        //echo $approvequery;
        echo "<br>";
        $resultapprove=mysqli_query($con,$approvequery);

        $logupdate="insert into payment_log (user_id,mini_amount,status,CreatedAt)values('".$_GET['id']."','".$_GET['amount']."','Approved','".date('Y-m-d H:i:s')."' )";
   // echo $logupdate;

     $logresult=mysqli_query($con,$logupdate);
    }
if(isset($_GET["rid"]))
  {
    $amount=$_GET['amount'];
    $id2=$_GET["rid"];
    $qry="update user_request set status='Rejected' , CreatedAt='".date('Y-m-d H:i:s')."' where id='$id2'";
    mysqli_query($con,$qry);
    $balance=GetUserAvailableBalance($_GET['id']);
    //echo $balance;
    $newbalance= $balance+$amount;
    //echo $newbalance;

  $updatquery="update users set new_balance='".$newbalance."' where id='".$_GET['id']."'";

  //echo $updatquery;
  $updatetresult=mysqli_query($con,$updatquery);
 $logupdatequery="insert into payment_log (user_id,mini_amount,status,CreatedAt)values('".$_GET['id']."','".$_GET['amount']."','Rejected','".date('Y-m-d H:i:s')."' )";
     $logupdateresult=mysqli_query($con,$logupdatequery);
  }

    $query_select="select * from user_request";
    //echo $query;

    $result=mysqli_query($con,$query_select);

  
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      User Requests Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Requests Details</li>
      </ol>
    </section>
  <section class="content">
        <div class="row">
            <div class="col-md-10 page-content col-md-offset-1">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center"></h2> 
              
            
        <div class="row">
                        <div class="col-sm-12">
                            <div class="form-errors form-errors-pad"></div>
                            
                            
                    <form name="sentMessage" id="contactForm" novalidate method="post" enctype="multipart/form-data">

    <ul  class="nav nav-tabs" data-toggle="tabs">
        <!-- <li class=""><a href="user_request.php"><i class="fa fa-fw fa-cog"></i> Pending Requests</a></li>
        <li class="active exam"><a href=""><i class="fa fa-fw fa-user"></i> Approved Requests</a></li>
    <li class=""><a href="reject_request.php"><i class="fa fa-fw fa-user"></i> Rejected Requests</a></li>
 -->   
  <li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Pending')" id="defaultOpen"><i class="fa fa-fw fa-cog"></i> Pending Requests</a></li>
        <li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Approve')" ><i class="fa fa-fw fa-user"></i> Approved Requests</a></li>
    <li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Rejected')" ><i class="fa fa-fw fa-user"></i> Rejected Requests</a></li>
 
  </ul>
     <div class="row">
        <div  id="Pending" class="tabcontent">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <form>
                                <table class="table table-hover">
                                  <b><caption>User Requests Details</caption></b>

                                    <tr>
                                      <th>Srno.</th>
                                      <th>User Name </th>
                                     <!--  <th>Remark</th> -->
                                      <th>Amount</th>
                                      <th>Date</th>
                                      <th>Status</th>

                                    </tr>
                                    <?php
                                   
                  //echo $result;
                  if(mysqli_num_rows($result))
                //  echo mysql_num_rows($result);
                  {
                                   while($rec=mysqli_fetch_assoc($result))
                                    {
                                       $i=1;
                                      if($rec["status"]=="Pending")
                                      {
                                        $data= GetUserDetails($rec["user_id"]);
                                       echo"<tr>";
                    
                                            
                                            echo"<td>".$i."</td>";
                                             echo"<td>".$data["fname"]."</td>";
                                     
                                            // echo"<td>".$rec["description"]."</td>";
                                            
                                            echo"<td >".$rec["mini_amount"]."</td>";
                                            echo"<td >".$rec["CreatedAt"]."</td>";
                                           
                                            echo"<td>".$rec["status"]."</td>";
                                             echo"<td><a href=user_request.php?aid=".$rec['id']."&id=".$rec["user_id"]."&amount=".$rec["mini_amount"]." class='btn btn-primary'>Approve</a></td>";
                                            echo"<td><a href=user_request.php?rid=".$rec['id']."&id=".$rec["user_id"]."&amount=".$rec["mini_amount"]." class='btn btn-danger'>Reject</a></td>";
                                            
                                           
                                      echo"</tr>";
                                      }
                                      
                                    }
                                  $i++;
                                    ?>
                                 </table>
                              </form>
                            </div>
                          </div>
                  </div>
                   <?php
                        }
                          ?>
         <div  id="Approve" class="tabcontent">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <form>
                                <table class="table table-hover">
                                  <b><caption>User Requests Details </caption></b>

                                    <tr>
                                      <th>Srno.</th>
                                      <th>User Name </th>
                                      <!-- <th>Remark</th> -->
                                      <th>Amount</th>
                                      <th>Date</th>
                                      <th>Status</th>

                                    </tr>
                                    <?php
                                   
                  //echo $result;
                                    $result=mysqli_query($con,$query_select);
                  if(mysqli_num_rows($result))
                //  echo mysql_num_rows($result);
                  {

                                   while($rec=mysqli_fetch_assoc($result))
                                    {
                                      $i=1;
                                      if($rec["status"]=="Approved")
                                      {
                                        $data= GetUserDetails($rec["user_id"]);
                                       echo"<tr>";
                    
                                          
                                            echo"<td>".$i."</td>";
                                             echo"<td>".$data["fname"]."</td>";
                                     
                                            // echo"<td>".$rec["description"]."</td>";
                                            
                                            echo"<td >".$rec["mini_amount"]."</td>";
                                            echo"<td >".$rec["CreatedAt"]."</td>";
                                           
                                            echo"<td>".$rec["status"]."</td>";
                                           
                                      echo"</tr>";
                                      }
                                     
                                    }
                                         $i++;
                                    ?>
                                 </table>
                              </form>
                            </div>
                          </div>
                  </div>
                   <?php
                        }
                          ?>
                   <div  id="Rejected" class="tabcontent">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <form>
                                <table class="table table-hover">
                                  <b><caption>User Requests Details </caption></b>

                                    <tr>
                                      <th>Srno.</th>
                                      <th>User Name </th>
                                     <!--  <th>Remark</th> -->
                                      <th>Amount</th>
                                      <th>Date</th>
                                      <th>Status</th>

                                    </tr>
                                    <?php
                                    
                  //echo $result;
                                    $result=mysqli_query($con,$query_select);
                  if(mysqli_num_rows($result))
                //  echo mysql_num_rows($result);
                  {
                   
                                   while($rec=mysqli_fetch_assoc($result))
                                    {
                                       $i=1;
                                      if($rec["status"]=="Rejected")
                                      {
                                        $data= GetUserDetails($rec["user_id"]);
                                       echo"<tr>";
                                      
                                            
                                            echo"<td>".$i."</td>";
                                             echo"<td>".$data["fname"]."</td>";
                                     
                                            // echo"<td>".$rec["description"]."</td>";
                                            
                                            echo"<td >".$rec["mini_amount"]."</td>";
                                            echo"<td >".$rec["CreatedAt"]."</td>";
                                           
                                            echo"<td>".$rec["status"]."</td>";
                                           
                                      echo"</tr>";
                                      }
                                      
                                    }
                                          $i++;
                                    ?>
                                 </table>
                              </form>
                            </div>
                          </div>
                          <?php
                        }
                          ?>
                  </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    //alert(tablinks);
    console.log(tablinks);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php

                  
include "footer.php";
?>
<?php 
include "header.php";
include "sidebar.php";
include "connect.php";
$user_id=$_SESSION['id'];
$history="select * from user_request where user_id='".$user_id."' ";
//echo $history;
$result=mysqli_query($con,$history);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      My History
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My History</li>
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
                            
                            
                                                   <table class="table table-striped">
                                  <b><caption>My History</caption></b>

                                    <tr>
                                      <th>Srno.</th>
                                      
                                      <th>Amount</th>
									   <!-- <th>Remark</th> -->
                                      <th>Status</th>
									  <th>Date of Apply</th>
                                      
                                    </tr>
                                    <?php
                                   $i=1;
									//echo $result;
									if(mysqli_num_rows($result)>0)
									//echo mysql_num_rows($result);
                        
									           {
                               while($rec=mysqli_fetch_assoc($result))
                                 {
                                   echo"<tr>";
                                   echo"<td>".$i."</td>";
                                   echo"<td>".$rec["mini_amount"]."</td>";
										            	// echo"<td>".$rec["description"]."</td>";
                                  echo"<td>".$rec["status"]."</td>";
											            echo"<td>".$rec["CreatedAt"]."</td>";
                                  echo"</tr>";
                                  $i++;
                                  }
                                      
                                    }
									                   
                                    ?>
                                 </table>
                             
                            </div>
                          </div>
                  </div>
                </div>
              </div>
        </div>

<?php
include "footer.php";
?>
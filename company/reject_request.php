<?php
include "header.php";
include "sidebar.php";
$query="select * from user_request where status='Rejected'";
//echo $query;

$result=mysqli_query($con,$query);
//print_r ($result);
//	echo $query;
	
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

    <ul id="example-tabs2" class="nav nav-tabs" data-toggle="tabs">
        <li class=""><a href="user_request.php"><i class="fa fa-fw fa-cog"></i> Pending Requests</a></li>
        <li class=""><a href="approve_request.php"><i class="fa fa-fw fa-user"></i> Approved Requests</a></li>
		<li class="active exam"><a href=""><i class="fa fa-fw fa-user"></i> Rejected Requests</a></li>
    </ul>
     <div class="row">
        <div class="tab-content">
        <div class="tab-pane active" id="exam">       
                 
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <form>
                                <table class="table table-hover">
                                  <b><caption>User Requests Details</caption></b>

                                    <tr>
                                      <th>Srno.</th>
                                      <th>User Id </th>
                                      <th>Remark</th>
                                      <th>Amount</th>
                                      <th>Date</th>
                                      <th>Status</th>

                                    </tr>
                                    <?php
                                   
									//echo $result;
									if(mysql_num_rows($result))
								//	echo mysql_num_rows($result);
                     $i=1;
									{
                                   while($rec=mysql_fetch_assoc($result))
                                    {
                                      if($rec["status"]=="Rejected")
                                      {
                                       echo"<tr>";
                    
                                            echo"<td>".$i."</td>";
                                              echo"<td>".$rec["user_id"]."</td>";
                                            
                                            echo"<td>".$rec["description"]."</td>";
                                            
                                            echo"<td >".$rec["mini_amount"]."</td>";
                                            echo"<td >".$rec["CreatedAt"]."</td>";
                                            echo"<td>".$rec["status"]."</td>";
                                          
                                      echo"</tr>";
                                      }
                                      $i++;
                                    }
									
                                    ?>
                                 </table>
                              </form>
                            </div>
                          </div>
                  </div>
        </div>
        </div>
      </div>
  </div>
</div>
</div>
</div>
</div>

<?php
}
									
include "footer.php";
?>
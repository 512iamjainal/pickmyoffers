<?php
include "header.php";
include "sidebar.php";
$query="select * from Subscriber where isdeleted='0'";
$result=mysqli_query($con,$query);

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     	Subscriber's  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subscriber's </li>
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
                    	 <div class="row">
        <div class="tab-content">
        <div class="tab-pane active" id="exam">       
                 
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <form>
                                <table class="table table-hover">
                                  <b><caption>Subscriber List</caption></b>

                                    <tr>
                                      <th>Srno.</th>
                                      <th>Email</th>
                                      
                                       <th>Date</th>
                                     
                                    </tr>
                                    <?php
                                    $i=1;
									//echo $result;
									if(mysqli_num_rows($result)>0)
									//echo mysql_num_rows($result);
									{
                                   while($rec=mysqli_fetch_assoc($result))
                                    {
                                     
                                     
                                        // $data= GetUserDetails($rec["user_id"]);

                                      echo"<tr>";
									  
                                            
                                            echo"<td>".$i."</td>";

                                            // echo"<td  >".$data["fname"]."</td>";
                                            
                                            echo"<td>".$rec["email"]."</td>";
                                            echo"<td>".$rec["CreatedAt"]."</td>";
                                            
                                      echo"</tr>";
									  $i++;
                                      }
                                      
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
include "footer.php";
?>
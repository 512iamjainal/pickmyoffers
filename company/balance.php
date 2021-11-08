<?php 
include "header.php";
include "sidebar.php";
 //print_r($_SESSION);
   $id=$_SESSION['id'];
    $qry="SELECT * FROM users WHERE id = '$id'";
   //echo $qry;


	?>
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Earning
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Earning</li>
      </ol>
    </section>
	<section class="content" style="min-height:500px;">
		<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>$50</h3>

              <p>Available Earning</p>
            </div>
            <div class="icon">
              <i class="ion ion-money"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>$50<sup style="font-size: 20px"></sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>$100</h3>

              <p>Total Earning</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
	
	
	
	
	<div class="row">
        <div class="tab-content">
        <div class="tab-pane active" id="exam">       
                  <div class="col-md-12 col-md-offset-0">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">

                            <div class="table-responsive" >
						
  <table class="table table-striped">
  	<caption>My Balance</caption>
  	<tr>
  		<th>Name</th>
  		<th>Contact</th>
      <th>Email</th>
  		<th>Balance</th>
  		<th>New Balance</th>
      
  	</tr>
  	<?php
    $rs1=mysqli_query($con,$qry);
   //echo $rs1;
  	while($res=mysqli_fetch_assoc($rs1))

    {

  		echo "<tr>";
  		echo "<th>".$res['fname']."</th>";
  		echo "<th>".$res['phone']."</th>";
      echo "<th>".$res['email']."</th>";
  		echo "<th>".$res['balance']."</th>";
  		echo "<th>".$res['new_balance']."</th>";
  	
      echo "</tr>";
    }
	?>
	</table>
	
</div></div></div></div></div></div></div></section></div>
	<?php
    include "footer.php";
  	?>
  		
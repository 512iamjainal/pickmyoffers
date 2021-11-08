<?php 
include "header.php";
include "sidebar.php";

include "connect.php";

?>
<style type="text/css">
.box
{
  background-color: #FFF;
    width: 750px;
    border: #b3b3b3 1px solid;
    margin-bottom: 20px;
     margin-bottom: 10px;
    border-radius: 4px;
}
  .boxoffer
{
  background-color: #f6f4ee;
    width: 680px;
    border: #black 1px solid;
    margin: 0px auto;
    margin-bottom: 20px;
    margin-top: 10px;
    min-height: 85px;
    border-radius: 4px;
}

</style>
<script language="JavaScript">
        function cnf()
        {
           ch=confirm("Are You Sure Delete ?");
           return ch;
        }
</script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Coupons
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Coupons</li>
      </ol>
    </section>
	<section class="content">
  
  <div class="row">
    <div class="tab-content">
                <div class="tab-pane active" id="exam">         
                        <div class="col-md-11 col-md-offset-0">
                                    <div class="panel panel-default">
 <div class="panel-body">
  <div class="col-xs-6 col-md-6 col-md-offset-2 box">
<div class="media">
 <?php if(isset($_SESSION['role']) && $_SESSION['role']==0)
           {
      $qry="SELECT * FROM coupons WHERE isdeleted='0' ";
//echo $qry;
      }else
      {
          $qry="SELECT * FROM coupons WHERE user_id='". $_SESSION['id']."' and isdeleted='0' ";
//echo $qry;
      }
$rs1=mysqli_query($con,$qry);

//echo $rs1;
while($rec=mysqli_fetch_assoc($rs1))

{
  // echo "echo";
  $company_name=$rec["company_name"];
  // echo $company_name;
  $img=$rec["company_image"];
   ?>

      
        <div class="row boxoffer">
          <div class="col-xs-14 col-md-10">
          <h3 class="mt-0"><b>Company Name: </b><?php echo $company_name;   ?> </h3>
          <p><b>Description :</b><?php echo $rec["description"]; ?> </p>
          <p><b>Coupon code:</b>  <?php echo $rec["coupon_code"]; ?> </p>
          <p><b>Coupon Link :</b> <?php echo $rec["coupon_link"]; ?> </p>
          <p><b>Offer :</b><?php echo $rec["offer"]; ?> </p>
          <p> <b>Create date:</b><?php echo $rec["createdAt"]; ?> </p>
          <p><b> Expire date:</b><?php echo $rec["expire_date"]; ?> </p>
          <?php
      echo "<div class ='row'>";
            
            echo "<div class ='col-sm-2'><a href=edit_coupon.php?id=".$rec["id"].
            "  ><button class='btn-Success btn'>Update</button></a></div>";
            echo "<div class ='col-sm-2'><a href=delete_coupon.php?id=".$rec["id"].
            "  onclick='return cnf()' ><button class='btn-danger btn' name='delete'>Delete</button></a></div> </div>  ";
     
?>
        </div>
          <br>
          </div>
        
         <?php 
        }
         ?>
         </div>
    </div>
  </div>

</div>
</div>
</div></div>
</div></div>


<?php 
// }
// else
// {
// 	<div class="alert alert-warning" role="alert">Data Not Found...!!!!</div>
// }
//include "footer.php";
?>

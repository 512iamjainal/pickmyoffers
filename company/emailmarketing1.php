<?php
include "header.php";
include "sidebar.php";
$query="SELECT * from coupons where isdeleted='0'";
$result=mysqli_query($con,$query);
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Email Marketing
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Email Marketing</li>
      </ol>
    </section>
  <section class="content">
        <div class="row">
            <div class="col-md-12 page-content col-md-offset-1">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center"></h2> 
             
        <div class="row">
                       <form action="emailmarketing.php" method="POST">

						<table class="table table-hover">
						<tr>
						<td></td>
						<!--<td>SR No.</td>-->
						
						<td>
						Username
						</td>
						<td>
						Category
						</td>
						<td>
						Company Name
						</td>
						<td>
						Coupon Code/Coupon Link
						</td>
						<td>
						Expire Date
						</td>
						</tr>
						
						<?php
$i=1;

$total = mysqli_num_rows($result);

while($rec = mysqli_fetch_array($result)) {

 
 
?>
						<tr>
						
						<td><input type="checkbox" name="coupons[]" value="<?php echo $rec["id"]; ?>" ></td>
						<!-- <td><?php echo $i;?></td> -->
						<td>
						<?php
						$data=GetUserDetails($rec['user_id']);
						echo $data["fname"];
						?>
						</td>
						<td>
						<?php  
						$catquery=mysqli_query($con,"SELECT * FROM category");
		                  $row=mysqli_fetch_assoc($catquery);
		                  echo $row['category_name'];
						  ?>
						</td>
						<td>
						<?php echo $rec['company_name'];?>
						</td>
						<td>
						<?php 
						//if($rec['coupon_code']!=' '){
						echo $rec['coupon_code'];
						echo $rec['coupon_link'];
						//}
						?>
						</td>
						<td>
						<?php echo $rec['expire_date'];?>
						</td>
						</tr>
						<?php
$i++;
}
?>
<tr >
<td colspan="4"><input type="submit" name="send" value="send" /> </td>
</tr>

						</table>
						</form>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						
<?php
include "footer.php";
?>
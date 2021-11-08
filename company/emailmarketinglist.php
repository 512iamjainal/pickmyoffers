<?php
include "header.php";
include "sidebar.php";
$query="select * from coupons where isdeleted='0'";
$result=mysql_query($query);
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
            <div class="col-md-10 page-content col-md-offset-1">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center"></h2> 
             
        <div class="row">
                        <div class="col-md-12">
						
						
						<table>


<?php
$i=0;

$total = mysql_num_rows($result);
echo $total;
while($rec = mysql_fetch_array($result)) {
 if($i/2==0)
 
?>
<tr>
<?php

echo $i;
?>

<td><input type="checkbox" name="coupons[]" value="<?php echo $rec["Id"]; ?>" ></td>

<td>
<div class=" col-md-12  ">
										<div class="media">
											<div class="panel panel-danger">
												<div class="panel-body">
													<div class="row">
														<div class=" col-md-2">
<?php
                                              if($rec['company_image'] != "")
                                              {
                                                if (file_exists("images/".$rec['company_image'])) {
                                                  $src = $rec['company_image'];
                                                }
                                                else
                                                {
                                                  $src = "noimage.jpg";
                                                }
                                              }
                                              else
                                              {
                                                $src = "noimage.jpg";
                                              }
                                            ?>
															<img src="images/<?php echo $src; ?> " style="height:70px; width:70px;"/>
														</div>
														<div class=" col-md-7" >
															<p class="font"><?php echo $rec['description']; ?> </p>
														</div>
														<div class="col-md-3">
															<span class="font"><?php echo $rec['offer']; echo"% OFF"; ?> </span>
														</div>
													</div>
													<div class="row " style="margin-top: 10px;">
														<div class="col-md-9 ">
															<a id="icon-text" class="icon-text" style="margin-right:10px;"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i> Save</a>
															<a style="margin-right:10px;"><i class="fa fa-history" aria-hidden="true" ></i><span id="clock"></span> Few Second</a>
															<a ><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
														</div>
														<div class="col-md-3 ">
															<?php if($rec['coupon_link'] != "") { ?>
															<a href="<?php echo $rec['coupon_link'];?>" class="btn btn-primary click_history" align="center" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="">Get Deal</a>
															<?php }else{ ?>
															<a href="couponcode.php?cid=<?php echo $rec['id']; ?>" class="btn btn-primary click_history" align="center" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="">Show Code</a>
															<?php } ?>
														</div>
											
														<div class="col-md-12 ">
															<h3 class="mt-0 font" style="float: right; padding-bottom: 0px;  margin-top: 10px;" > <?php echo $rec['company_name']; ?> </h3>
														</div>
													</div>
													</div>
													</div></div>
													</div>
												
                                 <?php 
                               // }//End While
                            //}//End If
                            //else
                            //{
                              //  echo "You have no Coupons";
                            //}
                            ?>    
                
</td>
</div>
<?php
//}
//if($i/2!=0){
?>

 <td><input type="checkbox" name="labourdetails[]" value="<?php echo $rec["Id"]; ?>" ></td>

<td>
 <div class="col-xs-12 col-md-12  ">
										<div class="media">
											<div class="panel panel-danger">
												<div class="panel-body">
													<div class="row">
														<div class=" col-md-2">
<?php
                                              if($rec['company_image'] != "")
                                              {
                                                if (file_exists("images/".$rec['company_image'])) {
                                                  $src = $rec['company_image'];
                                                }
                                                else
                                                {
                                                  $src = "noimage.jpg";
                                                }
                                              }
                                              else
                                              {
                                                $src = "noimage.jpg";
                                              }
                                            ?>
															<img src="images/<?php echo $src; ?> " style="height:70px; width:70px;"/>
														</div>
														<div class=" col-md-7" >
															<p class="font"><?php echo $rec['description']; ?> </p>
														</div>
														<div class="col-md-3">
															<span class="font"><?php echo $rec['offer']; echo"% OFF"; ?> </span>
														</div>
													</div>
													<div class="row " style="margin-top: 10px;">
														<div class="col-md-9 ">
															<a id="icon-text" class="icon-text" style="margin-right:10px;"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i> Save</a>
															<a style="margin-right:10px;"><i class="fa fa-history" aria-hidden="true" ></i><span id="clock"></span> Few Second</a>
															<a ><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
														</div>
														<div class="col-md-3 ">
															<?php if($rec['coupon_link'] != "") { ?>
															<a href="<?php echo $rec['coupon_link'];?>" class="btn btn-primary click_history" align="center" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="">Get Deal</a>
															<?php }else{ ?>
															<a href="couponcode.php?cid=<?php echo $rec['id']; ?>" class="btn btn-primary click_history" align="center" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="">Show Code</a>
															<?php } ?>
														</div>
											
														<div class="col-md-12 ">
															<h3 class="mt-0 font" style="float: right; padding-bottom: 0px;  margin-top: 10px;" > <?php echo $rec['company_name']; ?> </h3>
														</div>
													</div>
													</div>
													</div>
													</div>
													</div></div>
													
												
                                 <?php 
                               // }//End While
                            //}//End If
                            //else
                            //{
                              //  echo "You have no Coupons";
                            //}
                            ?>    
                
</td>
<?php
//}
?>

</tr>
<?php
$i++;
}
?>
<tr >
<td colspan="4"><input type="button" name="sand" value="sand"  /> </td>
</tr>
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
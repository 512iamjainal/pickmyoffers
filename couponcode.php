<?php
include "header.php";

?>
<div class="container" style="margin-bottom:20px;">

        <div class="row" style="margin-top:20px;">
            <div class="col-md-7 page-content col-md-offset-0">
                     <div class="row" style="background: #fff;min-height: 200px;">
					 <?php 
					 if(isset($_GET['cid']))
					{ 
						$query = "select * from coupons where id='".$_GET['cid']."' and isdeleted = 0";
						$result = mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0)
						{
							$row = mysqli_fetch_assoc($result);
							if($row['company_image'] != "")
							{
								if (file_exists("images/".$row['company_image'])) {
									$src = $row['company_image'];
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
                        <div class="col-sm-12 text-center" style="margin-top: 20px;">
                              <img src="images/<?php echo $src; ?> " style="height:80px; width:80px;"/>
						</div>
						<div class="col-md-12 text-center" style="margin-top: 20px;">
							<h3>  <?php echo "hello welcome    " .$row['company_name'];?></h3>
						</div>
                        <div class="col-md-12 text-center" style="margin-top: 20px;background: lightgray;padding: 20px;">
							<p>Copy and paste this code</p>
							<p><input type="text" id="dynamic_copy_code" value="<?php echo $row['coupon_code']; ?>" style="width: 120px;text-align: center;font-weight: bold;font-size: 20px;" readonly ><span style="background: #259fc4;padding: 10px;border-radius: 0px 3px 3px 0px;color: #fff;cursor: pointer;" id="copy-dynamic">Copy</span>
						</div>    
                        <div class="clearfix"></div>

                            <!--<div class="row">
                              <div class="col-md-12 ">

                              <div class="col-md-4 text-right">
                                <i class="glyphicon glyphicon-floppy-save"></i>
                                <?php
                                echo "code";
                                ?>
                              </div>
                              <div class="col-md-3">
                                <i class="fa fa-fw fa-user"></i>
                                <?php 
                                echo "50% off";
                                ?>

                              </div>
                              <div class="col-md-3">
                                <i class="fa fa-fw fa-user"></i>
                                <?php
                                echo "expire date";

                                ?>
                              </div>
                              </div>
                            </div>--->

                              <!---<div class="row">
                                <div class="col-md-12">
                                <div class="col-xs-6 col-md-4 text-center">
                                <a href="<?php echo $rec['coupon_link'];?>" class="btn btn-primary click_history" align="right" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="padding: 17px 70px; "><i class="fa fa-fw fa-user">Save</i> </a>
                                 </div>
                                 <div class="col-xs-6 col-md-4 text-center">
                                
                                  <a href="<?php echo $rec['coupon_link'];?>" class="btn btn-primary click_history" align="right" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="padding: 17px 70px;"><i class="fa fa-fw fa-user">Send As Email </i></a>
                                 </div>
                                 <div class="col-xs-6 col-md-4 text-center">
                                 
                                  <a href="<?php echo $rec['coupon_link'];?>" class="btn btn-primary click_history" align="right" name='add' id="" data-userid="<?php echo $rec['user_id']; ?>" data-couponid="<?php echo $rec['id']; ?>" target="_blank" style="padding: 17px 70px; "><i class="fa fa-fw fa-user">Send As Text</i> </a>
                                 </div> 
                              </div>
                            </div>--->
							
							<div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px;">
							<p style="margin-bottom: 0px;"><b>Details:</b><?php echo $row['description']; ?></p>
							
						</div>    
                     
					<?php } } ?>
                    </div><!---.row--->
                </div><!---.col-md-7-->
              </div><!-- row class closed -->
              </div> <!--Contains page content over -->
<?php
include "footer.php";
?>
<?php                                                                               
include("header.php");
?>

<style>

	/*head 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    cursor: pointer;
}*/

.cls-img
{
	height:120px;
	width:90px;
	border: 1px solid white;
	border-radius:5px;
	
	
}
.design
{
	height:42px;
	width:600px;
	border: 1px solid black;
	background-color: #ffe276;
	margin-bottom: 0;
    border-bottom: #B3B3B3 1px solid;
	border-radius: 4px 4px 0px 0px;
	
}
.subtitle
{
	font-size: 18px;
    padding-left: 20px;
    line-height: 38px;
    color:black;
    font-weight: bold;
    display: inline;
	 xborder-bottom: #B3B3B3 1px solid;
}
.box
{
	box-shadow: 2px 2px 0px 1px black;
	background-color: #FFF;
    width: 600px;
    border: #b3b3b3 1px solid;
    margin-bottom: 20px;
    border-radius: 4px;
}
.add
{
	width: 264px;
    height: 204px;
	margin-bottom: 20px;
	margin-bottom: 20px;
	border-radius: 5px;
	cursor: pointer;
}
.boxoffer
{
	box-shadow: 0px 0px 1px 2px black;
	background-color: lightskyblue;
    width: 552px;
    border: #black 1px solid;
    margin: 0px auto;
    margin-bottom: 20px;
    min-height: 85px;
    border-radius: 4px;
	padding: 10px;
}
.img{
	width:150px;
	hight:100px;
}
.sanbox
{
	padding-top: 10px;
    padding-bottom: 10px;
}
a {
    background-color: rgba(0, 136, 204, 0.13);
}
.nav-tabs>li>a {
    margin-right: 0px;
    line-height: 1.0;
    border: 0.5px solid rgba(0, 0, 0, 0.17);
    border-radius: 6px 6px 0 0;
}
.nav-tabs>li>a:hover {
    border-color: #eee rgba(204, 204, 204, 0.98) #ddd;
}
bootstrap.min.css:5
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: rgba(197, 203, 236, 0.45);
}

li a:hover {
    color: rgba(150, 126, 199, 0.99);
    font-size: 14px;
/*font-weight: bold;*/
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #3dc4d2;
}
li a:hover {
    color: rgba(0, 68, 204, 0.84);
    font-size: 14px;
    /*font-weight: bold;*/
}
#corner {
    font-size: 18px;
    background-color:  #ffffff;
    bottom: 55px;
    right: -421px;
      border: 2px solid ;
    border-radius: 5px;
    position: absolute;
}
a {
    background-color: rgba(0, 136, 204, 0.02);
}
a {
    color: #0044cc;
    outline: none !important;
    -moz-transition: all .2s ease-in;
    -webkit-transition: all .2s ease-in;
    -o-transition: all .2s ease-in;
    transition: all .2s ease-in;
}
.nav-tabs a.active{
	text-decoration: none;
    background-color: #3dc4d2;
}
.btn-primary{
	background-color:#259fc4;
	border-radius:5px;
}
</style>


<div class="container" style="min-height:450px;">
	<!-- 
	<div class="row" style="margin-top:20px;">
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div> 
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
	</div>-row1 -->
	<!-- <div class="row" style="">
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		
		<div class="col-sm-4 sanbox" style="border: 1px solid gray;background:gray;min-height:74px;line-height: 52px;text-align: center;">
			<span style="color:black;margin-right:10px;font-size:20px;">Free Shipping</span><span style="color:red;margin-right:10px;font-size:20px;">+</span><span style="color:black;font-size:20px;">Coupon Codes</span>
		</div>
		 
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
	</div>row2 ---> 
	<!-- <div class="row" style="">
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div> 
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
		<div class="col-sm-2 sanbox" style="border: 1px solid gray;">
		<a href="#">
		   <img src=" images/logo.jpg" class="img"/>
		   </a>
		</div>
	</div><!-row3
	
 -->
	<?php
	// $query = "select * from coupons where isdeleted = 0 ORDER BY createdAt DESC";
	// //echo $query;
	// $coupons=mysql_query($query);
	?>
	<br>
	<div class="clearfix"></div>
<div class="row">
	<div class="col-md-7">
 <ul  class="nav nav-tabs responsive">
      <?php 
     /// print_r($_SESSION);//echo $_SESSION['id']; ?> 
  <?php if(isset($_SESSION['id'])&&isset($_SESSION['id'])!='')
  {
  ?>
	<li ><a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'MyCoupon')" id="defaultOpen"> My Coupon</a></li>
    <?php 
	}
	?>
	<li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, ' latestCoupon')" >  Latest Coupon</a></li>
    <li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'ExpiresoonCoupon')" > Expire Soon Coupon</a></li>
 
  </ul>
     <div class="row">
	 <?php 
	
	 if(isset($_SESSION['id'])!=" ")
  {
  ?>
        <div  id="MyCoupon" class="tabcontent" >
		<?php 
  }
  ?>
    	 <div class="col-xs-12 col-md-12 col-md-offset-0 ">
            <div class="panel panel-danger">
 			<div class="panel-heading">
				<h2 class="subtitle">Today's My Coupons & Free Shipping Codes</h2>
		 </div>

		
	
		<div class="panel-body">
									<?php
									
                                   $qry="SELECT * FROM coupons WHERE user_id = '".@$_SESSION['id']."' and isdeleted='0' ORDER by createdAt DESC";
                                  //echo $qry;
                                  $rs1=mysqli_query($con,$qry);
                                  //echo $rs1;
                                  if(mysqli_num_rows($rs1)!=0)
                                  {
                                  while($rec=mysqli_fetch_assoc($rs1))

                                  {
                                  	 $d=date('Y-m-d');
                                       if($d==$rec['expire_date'])
                                       {
                                       }else{
                                    // echo "echo";
                                    $company_name=$rec["company_name"];
                                    // echo $company_name;
                                    $img=$rec["company_image"];
                                     
                                     ?>

                                    

                                      <div class="col-xs-12 col-md-12 col-md-offset-0 ">
										<div class="media">
										<div class="panel panel-danger">
 										<div class="panel-body">
 											<div class="row">
 		 									
                            <div class="col-md-2">
                         	<!-- <span class="font" id="corner">36% of hklnjkdn vhkl lhkd dhjlaghl </span> -->
                                          
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

                                      <div class=" col-md-7 " >

					<!-- <h3 class="mt-0 font" style="font-size:26"> <?php echo $rec['company_name']; ?> &nbsp; & &nbsp; <?php echo $data['company_name'];   ?> </h3> -->
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
											
											<div class="col-md-12">
											<h3 class="mt-0 font" style="float: right; padding-bottom: 0px; margin-top: 10px;" > <?php echo $rec['company_name']; ?> </h3>
									</div>
									
										
										  </div>
										  </div>
                               </div>
                           </div>
                           </div>
                    
                                
                                 <?php 
                                }
                                }
                            	}
                                else
                                {
									if(isset($_SESSION['id']))
									{
										echo "You have no Coupons";
									}
									else{
										?>
											Please Signup or Login for Upload New Coupon.
											<br/>
											<div style="margin-top: 20px;text-align: center;">
												<a href="register.php" class="btn btn-primary" style="margin-right:10px;">Register</a>
												<a href="login.php" class="btn btn-primary" style="margin-left:10px;">Login</a>
											</div>
										<?php
									}
                                }
                                 ?>
                               
                </div>
            </div>
          </div>
          <?php  ?>
          </div><!--#Mycoupon End-->
		  
        <div  id=" latestCoupon" class="tabcontent">
			<div class="col-xs-12 col-md-12 col-md-offset-0 ">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h2 class="subtitle">Today's My Coupons & Free Shipping Codes</h2>
					</div>
					<div class="panel-body">
                        <?php
                            $query="SELECT * FROM coupons WHERE isdeleted='0' ORDER by createdAt DESC";
                            $result=mysqli_query($con,$query);
                            if(mysqli_num_rows($result)!=0)
                            {
                                while($rec=mysqli_fetch_assoc($result))
                                {
                                    $company_name=$rec["company_name"];
                                    $img=$rec["company_image"];
                        ?>
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
									</div>
                                
                                 <?php 
                                }//End While
                            }//End If
                            else
                            {
                                echo "You have no Coupons";
                            }
                            ?>    
                </div>
            </div>
          </div>
          </div><!---Latest Coupon End--->
          <!-- </div> -->
        <div  id="ExpiresoonCoupon" class="tabcontent">
			<div class="col-xs-12 col-md-12 col-md-offset-0 ">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h2 class="subtitle">Today's My Coupons & Free Shipping Codes</h2>
					</div>
					<div class="panel-body">
                    <?php
                    
                    $query1="SELECT * FROM coupons WHERE expire_date >= DATE(now()) AND expire_date <= DATE_ADD(DATE(now()), INTERVAL 1 DAY)";
                    $result1=mysqli_query($con,$query1);
                    if (mysqli_num_rows($result1)>0)
                    {
                        while($rec=mysqli_fetch_assoc($result1))
                        {
                            $company_name=$rec["company_name"];
                            $img=$rec["company_image"];
                    ?>
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
									</div>
                                
                                 <?php 
                                } //End WHile
                            } //End If
                            else
                            {
								echo "You have no Coupons";
                            }
                                 ?>
                              
					</div>
				</div>
			</div>
		</div><!----Expired Coupon ENd--->
			
			
          </div><!-- .col-md-7 --> 
          
          <div class="col-md-5"></div> <!-- .col-md-5 -->
         </div> <!-- row --> 
    </div>
</div>
<script type="text/javascript">
$('.icon-text').on('click', function() {
     var notice = 'Save';

     if ( $(this).text().trim() == notice ) {
          notice = 'Saved';
     }

     $(this).find('i').toggleClass('fa fa-heart-o fa fa-heart ').parent().contents().last()[0].textContent = notice;  
});
</script>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    //alert(tablinks);
   // console.log(tablinks);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php include("footer.php"); ?>
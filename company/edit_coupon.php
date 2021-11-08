<?php
//error_reporting(E_ALL);
require_once "header.php";
include "sidebar.php";

if(isset($_POST['btnCoupon']))
{
	//echo "heloo";
	
	$categories=$_POST['categories'];
	echo $categories;
	$companyname=$_POST['companyname'];
	$description=$_POST['description'];
	
	$couponcode=$_POST['couponcode'];
	$couponlink=$_POST['couponlink'];
	$expiredate=$_POST['expiredate'];
	$offer=$_POST['offer'];
	$cid="";

	   
					 $file = time()."-".$_FILES['companylogo']['name'];
				      $file_loc = $_FILES['companylogo']['tmp_name'];
			    	  $file_size = $_FILES['companylogo']['size'];
					  $file_type = $_FILES['companylogo']['type'];
					  $folder="../images/";

					    // new file size in KB
					  $new_size = $file_size/1024;  
					  // new file size in KB
					  
					  // make file name in lower case
					  $new_file_name = strtolower($file);
					  // make file name in lower case
					  
					  $final_file=str_replace(' ','-',$new_file_name);
					  
					  move_uploaded_file($file_loc,$folder.$final_file);
					  echo $final_file;
		
					 if(isset($_FILES) && $_FILES['companylogo']['name'] != "")
					 {
					 	$and_query = ",company_image = '".$final_file."'";
					 }
					
					$qry="update coupons set category='".$categories."',company_name='".$companyname."'".$and_query.", description='".$description."',coupon_code='".$couponcode."', coupon_link='".$couponlink."', offer='".$offer."',expire_date='".$expiredate."' where id='".$_GET['id']."'";
					//echo $qry;
					
					$result=mysqli_query($con,$qry);
						//echo $qry;

				
				
			}
					
	
	

// $id=$_GET["id"];
// echo $id;
// $qry1="select * from coupons where id='".$id."' ";
$qry1="select * from coupons where id='".$_GET['id']."' ";
//echo $qry1;
$rs1=mysqli_query($con,$qry1);
print_r($rs1);
while ($rec=mysqli_fetch_assoc($rs1)) {
	$coupon_code=$rec['coupon_code'];
 $company_image=$rec['company_image'];
$coupon_link=$rec['coupon_link'];
$company_name=$rec['company_name'];
$offer=$rec['offer'];
$description=$rec["description"];
$category=$rec['category'];
$expiredate=$rec['expire_date'];

}
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Coupon
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Coupon</li>
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
                            
                            
                    <form name="sentMessage" id="contactForm" novalidate method="post" enctype="multipart/form-data">
                        
						
						<div class="row control-group">
						
							 <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label for="exampleInputFile">Categories </label>
	                             <select class="form-control" name="categories">
								
									<?php
										$cat_query="select * from category";
										$catquery=mysqli_query($con,$cat_query);
										//echo "<option  value=".$category.">".$category."</option>";
									 while($row=mysqli_fetch_assoc($catquery))
									 {
										
									// // echo "<option  value=".$category.">".$category."</option>";
  							// 		 echo "<option  value=".$row['category_id'].">".$row['category_name']."</option>";
									
									// }?>
										 
									        <option value="<?php echo $row['category_id'] ?>" <?php 
									            if($row['category_id'] == $category) { 
									            echo " selected"; 
									            } ?>><?php echo $row['category_name'] ?>
									            	
									            </option>
									    <?php } 
									?>
 									
								</select> 
								  <!-- <input type=text name='categories' class='form-control' placeholder='Company Name' id=fname data-validation-required-message='Please enter your company name.' value=<?php echo $category;?> required> -->
								
							</div>
							
							
							
                            <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label>Company Name</label>
                                <input type='text' name='companyname' class='form-control' placeholder='Company Name' id='fname' data-validation-required-message="Please enter your company name." value= <?php echo "'$company_name'";?> required>
                                <p class='help-block text-danger'></p>
                               
                            </div>
                            
                            <div class="form-group col-xs-12 col-md-6 floating-label-form-group controls">
							<label>Company Logo</label>
							 <input type="file" id="uploadImageFile" name="companylogo" value="Upload Image" accept="image/gif, image/jpeg, image/png ,image/jpg"   required data-validation-required-message="Please select image." > 
								 	 <p class="help-block text-danger"></p>
								 	 <?php echo "<img src=../images/".$company_image." name='image'  height=150 width=150 class=img-circle>";?>
							 	
                            </div>
                        </div>
						
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label for="comment">Description:</label>
								
 								 <textarea class="form-control" name="description" rows="5" id="content" placeholder="Post description"  required data-validation-required-message="Please enter  description."><?php echo $description;?></textarea>
                                	<p class="help-block text-danger"></p>
                              
							</div>
						</div>
                        
                        
                         
                     	<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Coupon Code</label>
                                <input type="text" name="couponcode" class="form-control" placeholder="Coupon code" id="password" required data-validation-required-message="Please enter coupon code." value=<?php echo "'$coupon_code'";?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                     
                     	
                     	<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Coupon Link</label>
                                <input type="link" name="couponlink" class="form-control" placeholder="Coupon Link" id="confirmpassword" required data-validation-required-message="Please enter your coupon link." value=<?php echo "'$coupon_link'"; ?> >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                       <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Offer</label>
                                <input type="text" name="offer" class="form-control" placeholder="Offer" id="phone" required data-validation-required-message="Please enter your offer." value=<?php echo "'$offer'"; ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						
						      
                       <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Expire Date</label>
                              <div class="input-group date"  class="datepicker" id='expirydatepicker'>
                      <input type="text" class="form-control" name='expiredate' value=<?php echo $expiredate;?>>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                    </div>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div> 
						<script type="text/javascript">
									$(function () {
										$('#datetimepicker5').datepicker({
											defaultDate: "11/1/2013",
											disabledDates: [
												moment("12/25/2013"),
												new Date(2013, 11 - 1, 21),
												"11/22/2013 00:53"
											]
										});
									});
								</script>
						
                        
                        
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
						
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="btnCoupon">Submit Coupon</button>
                            </div>
                        </div>
                    </form>
</div>
                    </div>
                </div>
            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.row -->
    </div>
   
<!-- /.main-container --><div class="clear"></div>

<?php
require_once "footer.php";
?>
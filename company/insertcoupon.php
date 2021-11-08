<?php
//error_reporting(E_ALL);
require_once "header.php";
// include "header.php";
include "sidebar.php";
include "connect.php";

if(isset($_POST['btnCoupon']))
{
  $categories=$_POST['categories'];
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
  
  if(move_uploaded_file($file_loc,$folder.$final_file)){

          $qry="insert into coupons (user_id, category, company_name, company_image, description, coupon_code, coupon_link, offer, expire_date, createdAt) values('".$_SESSION['id']."','".$categories."','".$companyname."','".$final_file."','".$description."','".$couponcode."','".$couponlink."','".$offer."','".$expiredate."','".date("Y-m-d H:i:s")."')";
          
          //$qry="insert into coupons (`user_id`, `category`, `company_name`, `company_image`, `description`, `coupon_code`, `coupon_link`, `offer`, `expire_date`, `createdAt`) values('".$_SESSION['id']."','".$categories."','".$companyname."','".$final_file."','".$description."','".$couponcode."','".$couponlink."','".$offer."','".$expiredate."','".date("Y-m-d H:i:s")."')";
          //echo $qry;
		  //exit;
          // $result=mysql_query($qry);
          $result=mysqli_query($con,$qry);
          //echo $result;
          
              // echo "success insert";
			  }

}
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Coupon
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Coupon</li>
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
                            
                            
                    <form name="sentMessage" id="contactForm"  method="post" enctype="multipart/form-data">
                        
            
            <div class="row control-group">
            
               <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label for="exampleInputFile">Categories </label>
                              <select class="form-control" name="categories">
                
                  <?php
                   $cat_query="SELECT * FROM category";

                    $catquery=mysqli_query($con,$cat_query);
                  while($row=mysqli_fetch_assoc($catquery))
                  {
                    
                  
                    echo "<option  value=".$row['category_id'].">".$row['category_name']."</option>";
                  
                  }
                  ?>
                  
                </select> </div>
              
              
              
                            <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label>Company Name</label>
                                <input type="text" name="companyname"class="form-control" placeholder="Company Name" id="fname" data-validation-required-message="Please enter your company name." required>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-group col-xs-12 col-md-6 floating-label-form-group controls">
              <label>Company Logo</label>
                   <input type="file" id="companylogo" name="companylogo" value="Upload Image" accept="image/gif, image/jpeg, image/png ,image/jpg"   required data-validation-required-message="Please select image." required> 
                                                  <p class="help-block text-danger"></p>

                            </div>
                        </div>
            
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label for="comment">Description:</label>
                 <textarea class="form-control" name="description" rows="5" id="content" placeholder="Post description"  required data-validation-required-message="Please enter  description." required></textarea>
                                  <p class="help-block text-danger"></p>
                               
              </div>
            </div>
              
                         
                     <!--  <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Coupon Code</label>
                                <input type="text" name="couponcode" class="form-control" placeholder="Coupon code" id="password" required data-validation-required-message="Please enter coupon code.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                     
                      
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Coupon Link</label>
                                <input type="link" name="couponlink" class="form-control" placeholder="Coupon Link" id="confirmpassword" required data-validation-required-message="Please enter your coupon link.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div> -->

                           <div class="row control-group">
                                 <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label class="control-label col-xs-12" ></label>
                                    <div class="col-sm-7">
                                        <label class="radio-inline" for="R1">
                                      <input type='radio' name='Coupon' id='R1'  value='yes' onclick="ShowHideDiv()" checked> Coupon Code
                                    </label>
                                    <label class="radio-inline" for="R2">
                                      <input type='radio' name='Coupon' id='R2'  value='no' onclick="ShowHideDiv()"> Coupon Link
                                    </label>  
                                  
                             </div>
                            </div>
                          </div>
                            <div id="textbox"  class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label>Coupon Code</label>
                          <input type="text" class="form-control" id="txtPassportNumber" name='couponcode' />
                           <p class="help-block text-danger"></p>
                         </div>

                        </div>
                         <div id="textbox1" style="display: none" class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label>Coupon Link</label>
                          <input type="text" class="form-control" id="txtPassportNumber"  name='couponlink'/>
                           <p class="help-block text-danger"></p>
                         </div>
                         
                        </div>
                     <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Offer</label>
                                <input type="text" name="offer" class="form-control" placeholder="Offer" id="phone" required data-validation-required-message="Please enter your offer." required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
            
                  
                       <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Expire Date</label>
                              <div class="input-group date"  class="datepicker" id='expirydatepicker'>
                      <input type="text" class="form-control" name='expiredate'>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                    </div>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div> 
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
<!-- /.main-container --><div class="clear"></div>
</div>
 <script type="text/javascript">
    function ShowHideDiv() {
        var R1 = document.getElementById("R1");
        var textbox = document.getElementById("textbox");
   // alert(textbox);
    //console.log(textbox);
        textbox.style.display = R1.checked ? "block" : "none";
        var R2 = document.getElementById("R2");
        var textbox1 = document.getElementById("textbox1");
    //alert(textbox1);
    //console.log(textbox1);
        textbox1.style.display = R2.checked ? "block" : "none";

    }
 </script>

<?php
require_once "footer.php";
?>
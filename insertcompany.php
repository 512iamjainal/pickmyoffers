<?php
require_once "header.php";
if(isset($_POST['btnCompany']))
{
	$categories=$_POST['categories'];
	
	$companylink=$_POST['companylink'];

	               
					
					$companyregistration="insert into category_company (`category_id`, `company`) values('".$categories."','".$companylink."')";
					$companyregistrationresult=mysql_query($companyregistration);
					echo $couponregistration;
					if($companyregistrationresult)
					{
						
							echo "success insert";
					}
					else
					{
							echo "error insert";
					}
	
	
	
}
?>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 page-content col-md-offset-2">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center">Register a new company</h2> 
             
        <div class="row">
                        <div class="col-sm-12">
                            <div class="form-errors form-errors-pad"></div>
                            
                            
                    <form name="sentMessage" id="contactForm" novalidate method="post" enctype="multipart/form-data">
                        
						
						<div class="row control-group">
						
							 <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label for="exampleInputFile">Categories </label>
	                            <select class="form-control" name="categories">
								
									<?php
									
										$catquery=mysql_query("select * from category");
									while($row=mysql_fetch_assoc($catquery))
									{
										
									
  									echo "<option  value=".$row['category_id'].">".$row['category_name']."</option>";
									
									}
									?>
 									
								</select> </div>
							
							</div>
                     	
                     	<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Company Link</label>
                                <input type="link" name="companylink" class="form-control" placeholder="company Link" id="confirmpassword" required data-validation-required-message="Please enter your comapany link.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                       
                        
                        
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
						
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="btnCompany">Save Company</button>
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
    <!-- /.container -->
</div>
<!-- /.main-container --><div class="clear"></div>
<script>
</script>
<?php
require_once "footer.php";
?>
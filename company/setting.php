<?php
//error_reporting(E_ALL);
require_once "header.php";
include "sidebar.php";



?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
    if(isset($_POST['save']))
{
    
    print_r($_POST);

    unset($_POST['save']);
    print_r($_POST);
   
    $i=($_POST);
  foreach ($i as $key => $value) {
    echo "$value <br>";
     echo "$key <br>";
     $query_setting="update settings set meta_value='".$value."' where meta_key='".$key."'";
   
     echo $query_setting;
     
       $result=mysqli_query($con,$query_setting);
}
}
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Setting
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setting</li>
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

							
							
							
                            <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label>Rate</label>
                                <input type='text' name='rate' class='form-control'  id='txtrate' data-validation-required-message="Please enter your company name." value=" <?php echo GetMetaValue('rate');?> " required>
                                <p class='help-block text-danger'></p>
                               
                            </div>
                             <div class="form-group col-xs-12 col-md-12 floating-label-form-group controls">
                                <label>Minimum Amount </label>
                                <input type='text' name='mini_amount' class='form-control'  id='rate' data-validation-required-message="Please enter your company name." value=" <?php echo GetMetaValue('mini_amount');?>" required>
                                <p class='help-block text-danger'></p>
                               
                            </div>
                           
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
						
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="save">Save</button>
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
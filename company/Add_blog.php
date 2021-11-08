<?php
include "header.php";
include "sidebar.php";
include "connect.php";

if(isset($_POST['save']))
{
  
 
  $title=$_POST['title'];
  $description=$_POST['description'];
 $file = time()."-".$_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
  $file_size = $_FILES['image']['size'];
  $file_type = $_FILES['image']['type'];
   $folder="../images/";

    // new file size in KB
  $new_size = $file_size/1024;  
  // new file size in KB
  
  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name);
  
  if(move_uploaded_file($file_loc,$folder.$final_file)){
  $qry="insert into blog (`user_id`, `title`, `description`, `image`, `createdAt`) values('".$_SESSION['id']."','".$title."','".$description."','".$final_file."','".date("Y-m-d H:i:s")."')";
    echo $qry;

          $result=mysqli_query($con,$qry);
          //echo $result;
          
}
}
?>
<script type="text/javascript">

</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blog</li>
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
                                <label>Title</label>
                                <input type="text" name="title"class="form-control" placeholder="Enter Title" id="title" data-validation-required-message="Please enter your Title." required>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-group col-xs-12 col-md-6 floating-label-form-group controls">
              					<label>Image</label>
                  					 <input type="file" id="image" name="image" value="Upload Image" accept="image/gif, image/jpeg, image/png ,image/jpg"   required data-validation-required-message="Please select image." > 
                                                  <p class="help-block text-danger"></p>

                            </div>
                        </div>
            
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label for="comment">Description:</label>
                 <textarea class="form-control" name="description" rows="5" id="blog_editor" placeholder="Enter Description"  required data-validation-required-message="Enter Description."></textarea>
                                  <p class="help-block text-danger"></p>
                               
              </div>
            </div>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
            
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="save">Submit Blog</button>
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
<?php
include "footer.php";
?>
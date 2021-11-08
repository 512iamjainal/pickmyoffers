<?php
include "header.php";
include "sidebar.php";
$query="select * from blog";
$result=mysql_query($query)
?>
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
            <div class="col-md-8 page-content col-md-offset-0">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center"></h2> 
             
        <div class="row">
                        <div class="col-sm-6">
                            <div class="form-errors form-errors-pad"></div>
                            <div class="container">

                            	<div class="panel panel-default">
                            
                            <div class="panel-body">
                                <?php
                                while($data=mysql_fetch_assoc($result)){

                                echo "hello";
                                echo $data['id'];
                                ?>
                                 <div class="media">
        <div class="media-left media-middle">
       <div class="panel panel-success"><img src=" ./images/<?php  $data['image'];  ?> " style="height:70px; width:70px;"/></div>
           </div>
           <div class="media-body">
            <h4 class="media-heading "><?php echo $data['title']; ?></h4>
           <div><?php echo $data["description"]; ?> </div>
           </div>
           </div> 
           <?php
           }
           ?>
                            	
                            </div>
                        </div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

<?php
include "footer.php";
?>
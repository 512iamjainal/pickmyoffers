<?php
include "header.php";
include "sidebar.php";
include "connect.php";

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
	

<?php
if(isset($_POST['send'])){
    if(!empty($_POST['coupons'])){
		//print_r($_POST);
		 $array_string = implode(',',$_POST['coupons']);
		$query = "select * from coupons where id IN (".$array_string.") AND isdeleted = 0";
		//echo $query;
		$result = mysqli_query($con,$query);
		$i = 1;
		$html="";
		while($row = mysqli_fetch_assoc($result))
		{
			if($i%2 == 0){$float = "left;";}else{$float = "left;border-right:1px solid;"; 
			
			$html .='<div style="border:1px solid;width:700px;display:table;clear: both;background-color: white;">';
			}

				$html .='<div style="width:50%;float:left; '.$float.'">
				<div  style="
    
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 5px;
    margin-right: 0px;
    width: 120px;
	float: left;
    
">
				
				<img src="../images/'. $row['company_image'].'"  width="120" height="120" >
				</div>
				
				<div  style="float: left;margin-left: 15px;margin-top: 15px;">
				<p>'. $row['description'].' </p>

				<span style="font-weight:bold;background-color: green; color:white; padding:2px 5px;">'. $row['offer'].' %OFF </span>
				
				<span style="font-size:25px;float:right;margin-top: 15px;">'.$row['company_name'].'</span>
				
				</div>
				</div>';
		
			
			if($i%2 == 0){ $html.='</div>'; }
			$i++;
		}
		echo $html;
			
	}
}
?>


						</div>
						</div>
						</div>
						</div>
						</div>
						</section>
						</div>
						

<?php 
;
echo $style;
include "footer.php";
?>
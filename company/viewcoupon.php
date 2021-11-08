<?php
include "header.php";
include "sidebar.php";

?>
<style type="text/css">
.box
{
  background-color: #FFF;
    width: 750px;
    border: #b3b3b3 1px solid;
    margin-bottom: 20px;
     margin-bottom: 10px;
    border-radius: 4px;
}
  .boxoffer
{
  background-color: #f6f4ee;
    width: 680px;
    border: #black 1px solid;
    margin: 0px auto;
    margin-bottom: 20px;
    margin-top: 10px;
    min-height: 85px;
    border-radius: 4px;
}

</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
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

    <ul  class="nav nav-tabs" data-toggle="tabs">
       
  <?php if(isset($_SESSION['role']) && $_SESSION['role']==0)
           {?>
  <li ><a href="javascript:void(0)" class="active" class="tablinks" onclick="openCity(event, 'MyCoupon')" ><i class=""></i> My Coupon</a></li>
  <?php
}
  ?>
        <li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'TodayCoupon')" id="defaultOpen"><i class=""></i> Today Coupon</a></li>
    <li ><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'ExpiresoonCoupon')" ><i class=""></i> Expire Soon Coupon</a></li>
 
  </ul>
     <div class="row">
        <div  id="MyCoupon" class="tabcontent" class="tab-pane active">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                             
                                <div class="col-xs-6 col-md-6 col-md-offset-1 box">
                                  <div class="media">
                                    <?php
                                        $qry="SELECT * FROM coupons WHERE user_id = '".$_SESSION['id']."' and isdeleted='0'";
                                  //echo $qry;
                                  $rs1=mysql_query($qry);
                                  //echo $rs1;
                                  while($rec=mysql_fetch_assoc($rs1))

                                  {
                                    // echo "echo";
                                    $company_name=$rec["company_name"];
                                    // echo $company_name;
                                    $img=$rec["company_image"];
                                     ?>
                                    <div class="row boxoffer">
                                      <div class="col-xs-12 col-md-2">
                                            <?php
                                     .         if($rec['company_image'] != "")
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
                                      <div class="col-xs-14 col-md-10">
                                      <h3 class="mt-0"> <?php echo $company_name; ?>  <?php echo $company_name;   ?> </h3>
                                      <p><b>Description :</b><?php echo $rec["description"]; ?> </p>
                                      <p><b>Coupon code:</b>  <?php echo $rec["coupon_code"]; ?> </p>
                                      <p><b>Coupon Link :</b> <?php echo $rec["coupon_link"]; ?> </p>
                                      <p><b>Offer :</b><?php echo $rec["offer"]; ?> </p>
                                      <p> <b>Create date:</b><?php echo $rec["createdAt"]; ?> </p>
                                      <p><b> Expire date:</b><?php echo $rec["expire_date"]; ?> </p>
                                        <?php
                                                    echo "<div class ='row'>";
                                                    
                                                    echo "<div class ='col-sm-2'><a href=edit_coupon.php?id=".$rec["id"].
                                                    "  ><button class='btn-Success btn'>Update</button></a></div>";
                                                    echo "<div class ='col-sm-2'><a href=delete_coupon.php?id=".$rec["id"].
                                                    "  onclick='return cnf()' ><button class='btn-danger btn' name='delete'>Delete</button></a></div> </div>  ";
                                             
                                        ?>
                                    </div>
                                  <br>
                                  </div>
                                
                                 <?php 
                                }
                                 ?>
                               </div>
                           </div>
                    </div>
            </div>
          </div>
         <div  id="TodayCoupon" class="tabcontent">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <div class="col-xs-6 col-md-6 col-md-offset-1 box">
                                  <div class="media">
                                    <?php
                                   // echo date('Y-m-d H:i:s');
                                    $query="SELECT * FROM coupons WHERE createdAt like '%".date('Y-m-d')."%' and isdeleted='0'";
                                  //echo $query;
                                  $result=mysql_query($query);
                                  
                                  
                                  while($rec=mysql_fetch_assoc($result))

                                  {
                                    // echo "echo";
                                    $company_name=$rec["company_name"];
                                    // echo $company_name;
                                    $img=$rec["company_image"];
                                     ?>
                                     <div class="row boxoffer"> 
                                      <div class="col-xs-12 col-md-2">
                                            <?php
                                              if($rec['company_image'] != "")
                                              {
                                                if (file_exists("./images/".$rec['company_image'])) {
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

                                          <div class="col-xs-14 col-md-10">
                                          <h3 class="mt-0"> <?php echo $company_name; ?>  <?php echo $company_name;   ?> </h3>
                                          <p><b>Description :</b><?php echo $rec["description"]; ?> </p>
                                          <p><b>Coupon code:</b>  <?php echo $rec["coupon_code"]; ?> </p>
                                          <p><b>Coupon Link :</b> <?php echo $rec["coupon_link"]; ?> </p>
                                          <p><b>Offer :</b><?php echo $rec["offer"]; ?> </p>
                                          <p> <b>Create date:</b><?php echo $rec["createdAt"]; ?> </p>
                                          <p><b> Expire date:</b><?php echo $rec["expire_date"]; ?> </p>
                                        <?php
                                             echo "<div class ='row'>";
                                             echo "<div class ='col-sm-2'><a href=edit_coupon.php?id=".$rec["id"].
                                             "  ><button class='btn-Success btn'>Update</button></a></div>";
                                             echo "<div class ='col-sm-2'><a href=delete_coupon.php?id=".$rec["id"].
                                             "  onclick='return cnf()' ><button class='btn-danger btn' name='delete'>Delete</button></a></div> </div>  ";
                                        ?>
                                      </div>
                                  <br>
                                  </div>
                                
                                 <?php 
                                }
                                
                                 ?>
                                </div>
                           </div>
                    </div>
            </div>
          </div>
                   <div  id="ExpiresoonCoupon" class="tabcontent">
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <div class="col-xs-6 col-md-6 col-md-offset-2 box">
                                  <div class="media">
                                      <?php
                                          $query1="SELECT * FROM coupons WHERE isdeleted='0' ";
                                    echo $query1;
                                    $result1=mysql_query($query1);
                                    //echo $rs1;
                                    while($rec=mysql_fetch_assoc($result1))

                                    {
                                       if(date()<$rec['expire_date'])
                                       {
                                       
                                      // echo "echo";
                                         
                                       $d=date('Y-m-d');
                                     echo $d;
                                        echo $rec['expire_date'];
                                      $company_name=$rec["company_name"];
                                      // echo $company_name;
                                      $img=$rec["company_image"];
                                       ?>

                                             <div class="row boxoffer">
                                              <div class="col-xs-12 col-md-2">
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
                                                <div class="col-xs-14 col-md-10">
                                                <h3 class="mt-0"> <?php echo $company_name; ?>  <?php echo $company_name;   ?> </h3>
                                                <p><b>Description :</b><?php echo $rec["description"]; ?> </p>
                                                <p><b>Coupon code:</b>  <?php echo $rec["coupon_code"]; ?> </p>
                                                <p><b>Coupon Link :</b> <?php echo $rec["coupon_link"]; ?> </p>
                                                <p><b>Offer :</b><?php echo $rec["offer"]; ?> </p>
                                                <p> <b>Create date:</b><?php echo $rec["createdAt"]; ?> </p>
                                                <p><b> Expire date:</b><?php echo $rec["expire_date"]; ?> </p>
                                            <?php
                                               echo "<div class ='row'>";
                                              
                                              echo "<div class ='col-sm-2'><a href=edit_coupon.php?id=".$rec["id"].
                                              "  ><button class='btn-Success btn'>Update</button></a></div>";
                                              echo "<div class ='col-sm-2'><a href=delete_coupon.php?id=".$rec["id"].
                                              "  onclick='return cnf()' ><button class='btn-danger btn' name='delete'>Delete</button></a></div> </div>  ";
                                       ?>
                                    </div>
                                      <br>
                                      </div>
                                    
                                     <?php 
                                    }
                                    
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
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    //alert(tablinks);
    console.log(tablinks);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php

                  
include "footer.php";
?>
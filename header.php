<?php
include_once('connect.php');
//include_once('function.php');

ob_start();
session_start();
if(isset($_POST['submit'])) {

 $email=$_POST['email'];
// echo $email;
// exit;

 $query="insert into Subscriber (email,CreatedAt)values('".$email."','".date("Y-m-d")."')";
 //echo $query;
 $resut=mysqli_query($con,$query);
}
?>
<!DOCTYPE html>
<html lang='en'>

<meta http-equiv='content-type' content='text/html;charset=UTF-8' />
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- <script src='templates/default/assets/js/jquery/1.12.4/jquery.min.js'></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='templates/default/assets/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
<!-- Fav and touch icons -->
    <link rel='shortcut icon' href='templates/default/assets/ico/logo.ico' />
    
<!-- Bootstrap core CSS -->
 
<!-- Custom styles for this template -->
    <link href='templates/default/assets/css/font-awesome.min.css' rel='stylesheet'>
    <link href='css/datepicker.css' rel='stylesheet'>
    <script src="js/bootstrap-datepicker.js"></script>
<!-- styles needed for carousel slider -->
    <link href='templates/default/assets/css/owl.carousel.css' rel='stylesheet'>
    <link href='templates/default/assets/css/owl.theme.css' rel='stylesheet'>

<!-- Lightbox -->
    <link href='templates/default/assets/css/remodal.css' rel='stylesheet'>
    <link href='templates/default/assets/css/remodal-default-theme.css' rel='stylesheet'>

<!-- date picker -->
  <!--  <link href='templates/default/assets/css/datepicker.css' rel='stylesheet'>-->
    <link href='templates/default/assets/css/bootstrap-datetimepicker.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='templates/default/assets/jq-phone/css/intlTelInput.css'>
    <style>.iti-flag {background-image: url('templates/default/assets/jq-phone/img/flags.png');}</style>
    <link rel='stylesheet' type='text/css' href='templates/default/assets/css/jquery.datetimepicker.css'/>
    
    <link rel='stylesheet' type='text/css' href='templates/default/assets/js/jquery-plugins/datatables.css'>
	<script type='text/javascript' charset='utf8' src='templates/default/assets/js/jquery-plugins/datatables.js'></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
        <script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
    <![endif]-->
<title>PickMyOffers</title>


</head>
<style type="text/css">

.head-one
{
	background-color:green;
	
}
.input
{
	border-radius:0px;
}
.logo-one
{
	
	height:80px;
	
	float: right;
}
.nav-ul li a
{
	/*color:white !important;*/
	
}
.menu-one
{
	padding:20px;
}
.search-form
{
	margin-left:30px;
}
.menu-two
{
	padding-top:20px;
	text-align:center;
}
.menu-three
{
	padding-top:20px;
}


    </style>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

     <div class="container-fuid" style='background-image: url(http://suryainfotech.net/pickmyoffers/header_bkg.jpg);height:100%;
        background-size: 100% 100%;'>
	     <div class="row" style="margin-right:0px;">

		      <div class="col-md-4 menu-one">
			     <form class="form-inline search-form" action="" method="GET">
                       <div class="form-group">
                        <label class="sr-only" for="email">Email address:</label>
                            <input type="text" class="form-control input" name="email" id="email">
                        </div>
 
                            <button type="submit" class="btn btn-default">Submit</button>
                    
                    </form>
			  </div>
			   <div class="col-md-3 text-center">
			   
			    <a class="" href="index.php"> <img src="images/logo.png" class="img-responsive logo-one"></a>  
			  </div>
			   <div class="col-md-5 menu-three">
			   <nav role="navigation" class="navbar navbar-default " style="background-color: transparent !important;border-color: transparent;">
       
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav nav-ul">
                <li><a href="index.php">Home</a></li>
				<li><a href="#">Category</a></li>
                <li><a href="contact.php">Contact Us</a></li>
				<?php if(isset($_SESSION['role'])){ ?>
                <li class='postadd'>
                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" class='btn btn-pro'><?php echo $_SESSION['fname'];?> <i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></a>
        
                    <ul class="dropdown-menu user-menu" style="background-color: #468fcd;">
                        <li><a class="usermenu-a" href="company/edit_profile.php">Profile</a></li>
                        <li><a class="usermenu-a" href="company/home.php">Dashbord</a></li>
                        <li><a class="usermenu-a" href="company/logout.php">Logout </a></li> 
                    </ul>
                    
                </li>
				<?php }else{ ?>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<?php } ?>
            </ul>
           
        </div>
    </nav>
			  </div>
		 </div>
	 </div>
    </div>  
</body>
</html>
<?php

?> 



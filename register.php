<?php
require_once "header.php";
if(isset($_POST['btnSignUp']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$phone=$_POST['phone'];
	//$role=$_GET['dr'];
	
	 $checkEmail="select * from users where email='".$email."'";
	$checkEmailResult=mysqli_query($con,$checkEmail);
	$checkEmailCount=mysqli_num_rows($checkEmailResult);
	
	
	if($checkEmailCount==0)
	{
$userregister="insert into users(fname,lname,email,password,phone,balance,new_balance)values('".$fname."','".$lname."','".$email."','".$password."','".$phone."','0','0')";

$resutregister=mysqli_query($con,$userregister);
								/*$_SESSION['role']=$role;
								$_SESSION['fname']=$fname;			
		
					echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='home.php';</SCRIPT>");*/
					//echo $userregister;
					//echo $resutregister;
					//echo "registration successfull";
		$to = $email;
		$subject = "For Register";
		$txt = "Thank you for regiter ".$fname." ".$lname.". Your account is active.";
		$headers = 'From: info@suryainfotech.com' . "\r\n" .
					'Reply-To: info@suryainfotech.com' . "\r\n" .
					'X-Mailer: PHP/';
		//$retval = mail($to,$subject,$txt,$headers);
		
		// 	if($retval == true){
			// echo "msg send success";
		// }else{
			// echo "msg is not send";
		// }
	}
	else
	{?>
    		<div class="alert alert-warning text-center">
              <strong>Email already exits...!!!</strong> .
            </div>
    <?php 
		exit;
	}
}
?>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 page-content col-md-offset-2">
                <div class="inner-box category-content inner-border">
                    <h2 class="title-2 text-center">Create an account </h2> 
             
        <div class="row">
                        <div class="col-sm-12">
                            <div class="form-errors form-errors-pad"></div>
                            
                            
                    <form name="sentMessage" id="register_form" method="post"> 
                        
						
						<div class="row control-group">
                            <div class="form-group col-xs-12 col-md-6 floating-label-form-group controls">
                                <label>First Name</label>
                                <input type="text" name="fname"class="form-control" placeholder="First Name" id="fname" data-validation-required-message="Please enter your Firstname." required>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-group col-xs-12 col-md-6 floating-label-form-group controls">
							<label>Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" id="lname" required data-validation-required-message="Please enter your last name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Email</label>
								<input type="email" name="email" class="form-control" placeholder="Email" id="email"  data-validation-required-message="Please enter your email." required>
								<p class="help-block text-danger"></p>
                            </div>
						</div>
                        
                        
                         
                     	<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                     
                     	
                     	<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm password" id="confirmpassword" required data-validation-required-message="Please enter your confirm password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                       <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <input type="checkbox" name="agree" value="agree" placeholder="Agreement" id="agreement" required data-validation-required-message="Please Check agreement.">
                                  I have read and agree to the <a href="terms.html">Terms & Conditions</a> 
Sign Up<p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        
                        
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
						
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="btnSignUp">Register</button>
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
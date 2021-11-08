<?php
include_once('header.php');

if(isset($_POST['sendpwd'])){
	$email = $_POST["lostpwd"];
	
	$getEmail = "select * from users where email = '".$email."'";
	$getResult = mysql_query($getEmail);
	if($row = mysql_num_rows($getResult) > 0)
	{
		$to = $email;
		$subject = "For Your Loss Password";
		$txt = "Your Password is something.";
		$headers = 'From: Pick My Offers <info@suryainfotech.net>' . "\r\n" .
					'Reply-To: info@suryainfotech.com' . "\r\n" .
					'X-Mailer: PHP/';
		$retval = mail($to,$subject,$txt,$headers);
		
		if($retval == true){
			echo "<script>alert('Check your email address..')</script>";
		}
	}else{
		echo "<script>alert('Email is not register..')</script>";
	}
	
}
?>

<div class="main-container">
    <div class="container">
        <div class="row">
		<br>
            <form action="" method="post">
				<div class="col-md-5 col-md-offset-3">
					<div class="form-group">
						<div>
							<input type="email" name="lostpwd" class="form-control" placeholder="Writte your email here.." requied>
						</div>
					</div>
					<div class="form-group">
						<div>
							<button type="submit" class="btn btn-success btn-block" name="sendpwd">Send</button>
						</div>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>
<script src="js/myjs.js"></script>

<?php 
require "footer.php";
?>
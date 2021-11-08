<?php
include_once('header.php');

if(isset($_POST['btnLogIn']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$fetchdata = "select * from users where email = '".$email."'";
	$result = mysqli_query($con,$fetchdata);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['password'] == $password)
		{
			$_SESSION['id'] = $row['id'];
			echo $_SESSION['id'];
			// die();	
			//$_SESSION['login']=1;
			$_SESSION['role'] = $row['role'];
			$_SESSION['fname'] = $row['fname'];
			//$_SESSION['uid'] = $row['id'];
			//print_r($_SESSION);
			
			
			//header("Location: home.php");*/
			echo '<script>';
			echo 'window.location.href="company/home.php"';
			 echo '</script>'; 
			
			echo "<br><br><br><br><br>login success";
		}
		else
		{
			echo "<br><br><br><br><br>Incorrect Password";
			$incorrectpwd="Incorrect Password";
		}
	}
	else
	{
		echo "<br><br><br><br><br>Email Id Not Registered Please Check"; 
		$emailexist="Email Id Not Registered Please Check";
	}
}

?>

<div class="main-container">
    <div class="container">
        <div class="row">
		<br>
            <div class="col-sm-6 col-md-offset-3 login-box">
                <div class="panel panel-default">
                    <div class="panel-intro text-center">
                        <h2 class="logo-title">
                            Welcome back!
                        </h2>
                    </div>
                    <div class="panel-body">
                        <div class="form-errors"></div>
                        <form role="form" class="aform" id="login" method="post">
							<?php
							if(isset($incorrectpwd))
							{
								//echo "<div class='alert alert-danger' role='alert'>".$incorrectpwd."</div>";
								unset($incorrectpwd);
							}
							else if(isset($emailexist))
							{
								//echo "<div class='alert alert-danger' role='alert' id='em'>".$emailexist."</div>";
								unset($emailexist);
							}
							else if(isset($emailpwdnot))
							{
								//echo "<div class='alert alert-danger' role='alert'>".$emailpwdnot."</div>";
								unset($emailpwdnot);
							}

							?>
							<!--<div class='alert alert-danger' role='alert' id='em'></div>-->
                            <div class="form-group">
                                <label for="sender-email" class="control-label">Email:</label>
                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="username" type="email" name="email" placeholder="Username"
                                           class="form-control email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user-pass" class="control-label">Password:</label>
                                <div class="input-icon"><i class="icon-lock fa"></i>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                           id="user-pass" required>
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="btnLogIn">Login</button>
 </div>
                            <input type="hidden" id="remember" name="remember" value="1">
                        </form>
                    </div>
                    <div class="panel-footer">

                        <div class="checkbox pull-left">
                            <label> <input type="checkbox" checked value="1" id="chkremember"> Keep me logged
                                in</label>
                        </div>


                        <p class="text-center pull-right"><a href="lostyourpwd.php"> Lost your password? </a></p>
                        <div style=" clear:both"></div>
                    </div>
                </div>
                <div class="login-box-btm text-center">
                    <p> Don't have an account? <br>
                        <a href="register.php"><strong>Sign Up !</strong> </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/myjs.js"></script>

<?php 
require "footer.php";
?>
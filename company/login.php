<?php
$login=1;
 include_once('header.php');
 include "connect.php";


if(isset($_POST['btnLogIn']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$fetchdata = "select * from users where email = '".$email."'";
	echo $fetchdata;
	$result = mysql_query($fetchdata);
	echo $result;
	if(mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		if($row['password'] == $password)
		{
			echo "string";
			if($row['isdeleted'] == 1)
			{
				//echo "hgj";
				// session_start();
			// $_SESSION['id'] = $row['id'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['role']=$row['role'];
				echo $_SESSION['role'];
				//exit;
			// echo $_SESSION['id'];
			// die();
			//$_SESSION['login']=1;
			//$_SESSION['role'] = $row['role'];
			$_SESSION['fname'] = $row['fname'];
			//$_SESSION['uid'] = $row['id'];
			//print_r($_SESSION);
			
			//die;
			// header("Location:home1.php");
			echo '<script>';
			echo 'window.location.href="home.php"';
			 echo '</script>'; 
			
			echo "<br><br><br><br><br>login success";
			}
		}
		else
		{
			echo "<br><br><br><br><br>";?>
			<div class="alert alert-warning text-center">
              <strong>Incorrect Password</strong>
            </div>
			<?php $incorrectpwd="Incorrect Password";
		}
	}
	else
	{
		echo "<br><br><br><br><br>";?>
		<div class="alert alert-warning text-center">
              <strong>Email Id Not Registered Please Checdk</strong>
        </div>
        <?php  
		$emailexist="Email Id Not Registered Please Checkd";
	}
}

?>

<div class="main-container">
    <div class="container"> 
        <div class="row" style="margin-top: 20px;">
			<div class="col-sm-4"></div>
            <div class="col-sm-4 login-box">
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
							echo "<div class='alert alert-danger' role='alert'>".$incorrectpwd."</div>";
							unset($incorrectpwd);
							}
							else if(isset($emailexist))
							{
							echo "<div class='alert alert-warning text-center' id=''>".$emailexist."</div>";
							unset($emailexist);
							}
							else if(isset($emailpwdnot))
							{
							echo "<div class='alert alert-danger' role='alert'>".$emailpwdnot."</div>";
							unset($emailpwdnot);
							}

							?>
							<div class='alert alert-danger' role='alert' id='em'></div>
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


                        <p class="text-center pull-right"><a href="forgot-password.html"> Lost your password? </a></p>
                        <div style=" clear:both"></div>
                    </div>
                </div>
                <div class="login-box-btm text-center">
                    <p> Don't have an account? <br>
                        <a href="signup.php"><strong>Sign Up !</strong> </a></p>
                </div>
            </div>
			<div class="col-sm-4"></div>
			
        </div>
    </div>
</div>
<script src="js/myjs.js"></script>

<?php 
include("footer.php");
?>
<?php
include_once('header.php');

if(isset($_POST['btnSend']))
{
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$contact = $_POST['contact'];
	$msg = $_POST['msg'];
	$message="Name :".$name."<br> Email :" .$email."Contact No :".$contact."<br> message :" .$msg;
	
	
//mail("webapps008@gmail.com",$subject,$message);
echo "<center><h3 class='label label-success'>Message Sent</h3></center>";
	
}

?>

<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 login-box">
                <div class="panel panel-default">
                    <div class="panel-intro text-center">
                        <h2 class="logo-title">
                            Contact Us
                        </h2>
                    </div>
                    <div class="panel-body">
                        <div class="form-errors"></div>
                        <form role="form" class="aform" id="login" method="post">
							
							
							<div class="form-group">
                                <label for="sender-email" class="control-label">Name</label>
                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="username" type="name" name="name" placeholder="Name"
                                           class="form-control email" required>
                                </div>
                            </div>
							
							
							<div class="form-group">
                                <label for="sender-email" class="control-label">Subject</label>
                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="username" type="name" name="subject" placeholder="Subject"
                                           class="form-control email" required>
                                </div>
                            </div>
							
							
							<div class="form-group">
                                <label for="sender-email" class="control-label">Email</label>
                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="username" type="name" name="email" placeholder="Email"
                                           class="form-control email" required>
                                </div>
                            </div>
							
							
                            <div class="form-group">
                                <label for="sender-email" class="control-label">Message:</label>
                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <textarea rows="4" cols="50" name="msg" class="form-control email" required>
									</textarea>
                                </div>
                            </div>
							
							
                            <div class="form-group">
                                <label for="user-pass" class="control-label">Contact No:</label>
                                <div class="input-icon"><i class="icon-lock fa"></i>
                                    <input type="Text" name="contact" class="form-control" placeholder="contact no"
                                           id="user-pass" required>
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="btnSend">Send</button>
 </div>
                            <input type="hidden" id="remember" name="remember" value="1">
                        </form>
                    </div>
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
<script src="js/myjs.js"></script>

<?php 
require "footer.php";
?>
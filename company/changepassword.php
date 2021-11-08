
<?php 
	include"connect.php";
	include"header.php";
	include "sidebar.php";
	//session_start();


	if(!isset($_SESSION['id']))
	{
		header('location:../login.php');
	}
	$user= $_SESSION["id"];
	$qry="select * from users where id='$user'";
	echo $qry;
	$rs=mysql_query($qry);
	$rec=mysql_fetch_assoc($rs);
	
	if(isset($_GET["a"]))
    {?>
        <div class="panel panel-red">
            <div class="panel-heading">
                    Warning : Incorrect Oldpasswod!
            </div>
        </div>

    <?php
    unset($_GET["a"]);
	}
	if(isset($_GET["arr"]))
    {?>
        <div class="panel panel-green">
            <div class="panel-heading">
                    Account successfully updated
            </div>
        </div>

    <?php
    unset($_GET["arr"]);
    }
    if(isset($_GET["er"]))
    {?>
        <div class="panel panel-red">
            <div class="panel-heading">
                    Password and confirm password didn't matched
            </div>
        </div>

    <?php
    unset($_GET["er"]);
    }
?>

    <div class="container">
   
    	<div class="row">
    		<div class="tab-content">
				<div class="tab-pane active" id="exam">    		
			            <div class="col-md-10 col-md-offset-0">
					                <div class="panel panel-dgreen">
					   				<div class="panel-heading">
									   		ACCOUNT
									</div>
									 <div class="panel-body">
										<form class="form-horizontal" method="POST" action="confirmpassword.php" >
										 <div class="form-box-content">
										    <div class="form-group">
										        <label class="control-label col-sm-2">Email</label>
										            <div class="col-sm-8">
										           <?php 
										            	echo" <input type=text class=form-control name=id value=$rec[email] >"; ?>
										            

										           		
										            </div>
										    </div>
										    <div class="form-group">
										    	 <span class="text-danger old_exist" style="display:none;">Email ALready Exist!!</span>
										        <label class="control-label col-sm-2" >Old password</label>
										            <div class="col-sm-8">										            
										            	<input type=password class='form-control check_exist'  name=oldpswrd title="Enter old password" placeholder="Enter old password" required >										           
										            </div>
										    </div>
										    <div class="form-group">
										        <label class="control-label col-sm-2" >New password</label>
										            <div class="col-sm-8">										            
										            	<input type=password class=form-control name=pswrd title="Enter new password" placeholder="Enter new password" >										           
										            </div>
										    </div>
										    <div class="form-group">
										        <label class="control-label col-sm-2" >Confirm password</label>
										            <div class="col-sm-8">										            
										            	<input type=password class=form-control name=cnfpswrd title="Confirm password" placeholder="Confirm password" >
										           
										            </div>
										    </div>
										    
										    <div class="form-group">        
										        <div class="col-sm-offset-3 col-sm-4">
										            <div><input type="submit" class="btn btn-lg btn-primary btn-block" name="s1" value="Change Password"></div>
										        </div>
										     </div>
										</div>
										</form>
									</div>
									</div>
			            </div>
        		</div>
     		 </div>
     	</div>
     </div>

<?php
include"footer.php";
?>

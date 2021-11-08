<?php

		session_start();

	if(!isset($_SESSION['id']))
	{
		header('location:../login.php');
	}

		include("header.php");
		include("sidebar.php");
		
		 
		if(isset($_GET['upd']))
		{
			//echo "right";
			//print_r($_POST);
			$update=$_GET['upd'];
		//	print_r($update);
			$query="select * from users where id = $update";
			$result = mysqli_query($con,$query);
			$data=mysqli_fetch_assoc($result);

		
		}
		if(isset($_POST['update']))
		{
		
			$id=$_REQUEST["id"];
			$fname=$_REQUEST['fname'];
			$lname=$_REQUEST['lname'];
			$email=$_REQUEST['txtemail'];
			$m_number=$_REQUEST['txtmobile'];
			  $res="UPDATE users SET fname = '".$fname."' , lname = '".$lname."' , email = '".$email."' , phone = '".$m_number."'  WHERE id='".$id."'";
			  $result = mysqli_query($con,$res);
		
			  if($result)
			  {
				echo '<script>window.location.href="users.php";</script>';
				
			  }
			  
			  
			
		
         } ?>			
        <div id="page-wrapper">

        	
           
      <fieldset>
		<legend style="font-family:comic sans ms;color:green">Upadate</legend>
		<div class="row">
		<div class="col-lg-0"></div>
		<div class="col-lg-8">
		<form method="post">

		<input type="hidden" name="id" value="<?php echo $data["id"];?>">
            <div class="form-group col-lg-12" style="padding-left:400;">
			<div class="form-group row">
			<div class="col-lg-12">
                <div><font color="green"><b>First Name:</b></font></div>
                <div><input type="text" class="form-control"  name="fname" value="<?php echo $data["fname"]; ?>"></div>
				<div id="fname1" style="color:red"></div>
            </div>
			</div>
			<div class="form-group row">
			<div class="col-lg-12">
                <div><font color="green"><b>Last Name:</b></font></div>
                <div><input type="text" class="form-control"  name="lname" value="<?php echo $data["lname"]; ?>"></div>
				<div id="lname1" style="color:red"></div>
            </div>
			</div>
            <div class="form-group row">
			<div class="col-lg-12">
                <div><font color="green"><b>Email:</b></font></div>
                <div><input type="text" class="form-control"  name="txtemail" value="<?php echo $data["email"]; ?>"></div>
				<div id="email1" style="color:red"></div>
            </div>
		    </div>
			<div class="form-group row">
			<div class="col-lg-12">
                <div><font color="green"><b>mobile number</b></font></div>
                <div><input type="text" class="form-control"  name="txtmobile" id="txtmobile" value="<?php echo $data["phone"]; ?>"></div>
				<div id="mnum" style="color:red"></div>
            </div>
			</div>
			
			<tr>
			<th>
			<font color="green"><input type="submit" class="btn-success"  value="click for update" name="update">
			<a href ="users.php"><button type="button" class="btn btn-default">Back</button></a>
			</th>
			</tr>
			</div>
		<div class="col-lg-4"></div>
        </form>
		</div>
		</div>
		</fieldset>
		</div>
		<?php
include("footer.php");
?>
	<?php
		//echo 'sanjay';
		
		
		include_once('../connect.php');		
		include('header.php');
		include('sidebar.php');
		$query= "select * from users where isdeleted= 1";		
		$res = mysqli_query($con,$query);
		session_start();

	if(!isset($_SESSION['id']))
	{
		header('location:../login.php');
	}
	
		?>
			<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
        <!-- Content Header (Page header) -->
	
        <!-- Main content -->
      <section class="content">
			<div class="row">
				<div class="col-lg-12">
					<div class="box-body table-responsive no-padding">
		<table class="table table-hover" style="background-color: ghostwhite;">	  
					<tr>   
						<th>ID</th>      
						<th>FIRST NAME</th>			
						<th>LASTNAME</th>      
						<th>E-MAIL</th>				
						<th> PHONE_NUMBER</TH>
						<TH>CREATEDATE</TH>
					</tr>		 
				<?php	
				$count = 0;		
				while($data = mysqli_fetch_assoc($res))		
					{ ?>															
							<tr>										
									<td><?php $count++; echo $count; ?></td>				
									<td><?php echo $data['fname']; ?></td>				
									<td><?php echo $data['lname']; ?></td>		
									<td><?php echo $data['email']; ?></td>	
									<td><?php echo $data['phone']; ?></td>
									<td><?php echo $data['createdAt']; ?></td>	
									<td><a href="delete_user.php?del=<?php echo $data['id'];?>"</a>delete</td>
									<td><a href="update_users.php?upd=<?php echo $data['id'];?>"</a>update</td>
							</tr>				
				<?php	}		
				?>
				</table>
				
		       </div><!-- /.box-body -->
			</div>
			</div>
		</section><!---.content--->
	</div><!---.content-wrapper-->
	<?php
	include('footer.php');
	?>
	
	<?php
		//echo 'sanjay';
		//exit;
		include_once('../connect.php');
	?>	
	<html>
	<head>
	</head>
	<body>

	<!-- Content Wrapper. Contains page content -->
   <!--   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
	
        <!-- Main content -->
     <!--   <section class="content">
			<div class="row">
				<div class="col-lg-12">
					<div class="box-body table-responsive no-padding">
			-->
			


							<?php					
							$result=mysqli_query($con,"select * from users");
							//print_r($result);
							//exit;
													 
							?>
													


                  <table class="table table-hover">

                    <tr>
                      <th>ID</th>
                      <th>FIRST NAME</th>
					  <th>lAST	 NAME</th>
                      <th>E-MAIL</th>
					  <th>Role</th>
					  <th>Gender</th>
                      <th>MOBILE-NUMBER</th> 
					  <th>ADDRESS</th>
					  <th>CITY</th>
					  <th>PINCODE</th>
					  <th>STATE</th>
					  <th>COUNTRY</th>
                    </tr>

				      <?php
					  $count = 0;
						while($data = mysqli_fetch_assoc($res))
						
						{
							//if($data['role'] == 'user')
							//{
							?> 
										
										<tr>
										  <td><?php $count++; echo $count;?></td>
										  <td><?php echo $data['f_name'];?></td>
										  <td><?php echo $data['l_name'];?></td>
										  <td><?php echo $data['email'];?></td>
										  <td><?php echo $data['role'];?></td>
										  <td><?php// if($data['gender'] == 'm'){echo 'Male';}else{echo 'Female';}?></td>
										  <td><?php //echo $data['m_number'];?></td>
										  <td><?php// echo $data['address'];?></td>
										  <td><?php //echo $data['city'];?></td>
										  <td><?php //echo $data['pincode'];?></td>
										  <td><?php //echo $data['state'];?></td>
										  <td><?php// echo $data['country'];?></td>
										  <td><a href="delete_register.php?del=<?php //echo $data['id'];?>"</a>delete</td>
										  <td><a href="update_register.php?upd=<?php //echo $data['id'];?>"</a>update</td>
										  <td><a href="moredetails.php?moredetails=<?php //echo $data['id'];?>"</a>More Details </td>
										</tr>
							<?php// }
						}
						 ?>

                  </table>
             <!--   </div><!-- /.box-body -->
			<!--	</div>
			</div>
		</section><!---.content--->
	<!--	</div><!---.content-wrapper-->
	 </body>
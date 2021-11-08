<?php
include "header.php";
?>
<style>
.clearfix
{
	clear: both;
}
.top-bottom-space
{
	padding-top: 15px;
	padding-bottom : 15px;
}
.no-padding
{
	padding-right: 0px;
	padding-left: 0px;
}
.blog-date
{
	background-color: #ADD8E6;
}
.blog-text
{
	font-size: 13px;
	letter-spacing : 0.2px;
}
.blog-content a:hover
{
	font-size: 13px;
	text-decoration: none;
	color: #569FFE;
}
.read-more-link
{
	font-size: 13px;
	text-decoration: none;
	color: #569FFE;
}
.font-13x
{
	font-size: 13px;
}
</style>
<div class="container-fluid" >
	<div class="blog-main">
		<div class="top-bottom-space">
			<?php 
				$getData = "SELECT * FROM blog ORDER by createdAt DESC";
				$getResult=mysqli_query($con,$getData);
				// echo $getResult;
				if(mysqli_num_rows($getResult)!=0)
				{
					while($getRow=mysqli_fetch_assoc($getResult))
					{
						
			?>
			<div class="col-md-9">
				<div class="blog-inner">
					<div class="blog-date col-md-1">
						<span>03 <br>Nov <br>2016</span>
					</div>
					<div class="col-md-3 blog-img no-padding ">
						<img src="images/<?php echo $getRow["image"]; ?>" class="img-responsive" >
					</div>
					<div class="col-md-8 blog-content">
						<h3><?php echo $getRow["title"]; ?></h3>
						<hr>
						<p class="blog-text">
						<?php echo $getRow["description"]; ?>
						<p>
						<a href="#" class="read-more-link">Read more >></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<hr>
				<div class="blog-social-link">
					<span class="font-13x">By - <a href="#">Surya infotech</a></span>
					<span class="pull-right font-13x">Share - <a href="#"><i class="fa fa-facebook fa-lg"></i></a></span>
				</div>
				<hr>
			</div>
			<?php } } ?>
			<div class="col-md-3">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
					<input type="text" class="form-control" placeholder="search" aria-describedby="basic-addon1">
				</div>
			</div>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>
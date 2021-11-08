<?php 
include "header.php";
include "sidebar.php";

include "connect.php";
?>
<style type="text/css">
.box
{
  background-color: #FFF;
    width: 750px;
    border: #b3b3b3 1px solid;
    margin-bottom: 20px;
     margin-bottom: 10px;
    border-radius: 4px;
}
  .boxoffer
{
  background-color: #f6f4ee;
    width: 680px;
    border: #black 1px solid;
    margin: 0px auto;
    margin-bottom: 20px;
    margin-top: 10px;
    min-height: 85px;
    border-radius: 4px;
}
table
{
	border: 1px solid #000000;
	text-align: center;
    margin: auto;
    margin-top: 10px;
    /* display: inline-block; */
    width: 50%;
}
table img{
	margin:auto;
}
</style>
<script language="JavaScript">
        function cnf()
        {
           ch=confirm("Are You Sure Delete ?");
           return ch;
        }
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php 
	//get coupans code 
	$getCoupans = "select company_name, company_image, description, coupon_code, coupon_link, offer, expire_date from coupons";
	$getCResult = mysqli_query($con,$getCoupans);
	while($getCData = mysqli_fetch_array($getCResult)){
		$msg = "
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<table>
				<tr>
					<td><h3>".$getCData['company_name']."</h3></td>
				</tr>
				<tr>
					<td><img src=../images/".$getCData['company_image']." class='img-responsive' width='70px' height='70px'></td>
				</tr>
				<tr>
					<td>".$getCData['description']."</td>
				</tr>
				<tr>
					<td>".$getCData['coupon_code']."</td>
				</tr>
				<tr>
					<td><a href='".$getCData['coupon_link']."' >Go to link</a></td>
				</tr>
				<tr>
					<td>".$getCData['offer']."</a></td>
				</tr>
				<tr>
					<td>".date('d/m/Y',strtotime($getCData['expire_date']))."</a></td>
				</tr>
			</table>
		</body>
		</html>
		";
		echo $msg;
	}
	?>
	
	<?php 
		// send mail to all users
		if(isset($_POST['sendmail']))
		{
			$getEmails = "select email from users";
			$getResult = mysqli_query($con,$getEmails);
			while($getRow = mysqli_fetch_array($getResult))
			{	
				$to = $getRow['email'];   
				$subject = "Coupan code";
				$txt = "this is latest coupan code.";
				$headers = 'From: Pick My Offers <info@suryainfotech.net>' . "\r\n" .
							'Reply-To: info@suryainfotech.com' . "\r\n" .
							'X-Mailer: PHP/';
				$retval = mail($to,$subject,$txt,$headers);
				
				if($retval == true)
				{
					echo "mail are send";
				}else{
					echo"mail are not send";
				}
			}			
		} 
		
	?>
	<form action="" method="post">
		<button type="submit" class="btn btn-default" name="sendmail">Send Mails To All Users</button>
	</form>
   </div>


<?php 
// }
// else
// {
// 	<div class="alert alert-warning" role="alert">Data Not Found...!!!!</div>
// }
//include "footer.php";
?>

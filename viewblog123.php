<?php
include "header.php";
?>
<div class="container" >
<br>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-9">

	<div class="row">
        <div class="col-xs-12 col-md-12 col-md-offset-0">
            <div class="panel panel-danger">
            	<div class="panel-body">
            	<?php
            		$qry="SELECT * FROM blog ORDER by createdAt DESC";
                                  //echo $qry;
                                  $rs1=mysql_query($qry);
                                  //echo $rs1;
                                  if(mysql_num_rows($rs1)!=0)
                                  {
                                  while($rec=mysql_fetch_assoc($rs1))

                                  {
            	?>
            	<div class="block" style="padding-top:10px;">
	
	
	
      <div class="media">
	  
		<div class="media-left" href="#" style="display:inline-block;position:absolute;">
				<div class="well" style="padding: 10px;background:lightblue;"><?php echo $rec['createdAt'];?></div>
		</div>
		
      	<a class="media-left" href="https://dvcsales.com/financing-next-dvc-resale-purchase-2/" style="display:inline-block;margin-left: 50px;width:30%;">
			 <img src="images/".$rec['image'] class="attachment-medium size-medium wp-post-image" alt="" srcset="https://dvcsales.com/wp-content/uploads/2016/10/BoardwalkViewfromWest-300x166.jpg 300w, https://dvcsales.com/wp-content/uploads/2016/10/BoardwalkViewfromWest-1024x566.jpg 1024w, https://dvcsales.com/wp-content/uploads/2016/10/BoardwalkViewfromWest-1000x553.jpg 1000w, https://dvcsales.com/wp-content/uploads/2016/10/BoardwalkViewfromWest.jpg 1125w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="166">  		</a>
  		<div class="media-body" style="display: inline-block;width: 60%;">
    		<h4 class="media-heading"><a href="https://dvcsales.com/financing-next-dvc-resale-purchase-2/" title="Read more" style="color:#1f4e79;font-family:Baskerville Old face !important;"><?php echo $rec['title'];?></a></h4>
			<hr class="divider">
			
       <?php echo $rec['description'];?> <br><br><a style="" href="https://dvcsales.com/financing-next-dvc-resale-purchase-2/">Read More »</a>		  		</div>
		<div class="block-meta">
		<hr class="divider">
          <ul class="list-inline list-unstyled">
  			<li>By <a href="#">Mark Webb</a></li>
            <!-- <li><span> <i class="glyphicon glyphicon-comment"></i> 4 comments</span></li>-->
						<!--<li>Tags:<a href="#">Webdesigning Webdesigning Webdesigning</a></li>-->
            
            <li style="float:right;">
			Share 
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
			 <!--<span> <i class="fa fa-twitter  fa-lg"></i></span>-->
            
              <span> <i class="fa fa-facebook fa-lg"></i></span>
              </li>
			</ul>
			<hr class="divider">
			</div><!-- block meta -->
		</div> <!-- block-->
  </div>
</div>
<div class="block" style="padding-top:10px;">
            	<div class="media">
	  
		<div class="media-left" href="#" style="display:inline-block;position:absolute;">
				<!-- <div class="well" style="padding: 10px;background:lightblue;"><?php echo $rec['createdAt'];?></div> -->
				<div class="well" style="padding: 10px;background:lightblue;">03<br>jan<br>2013</div>
		</div>
		
      	<a class="media-left" href="https://dvcsales.com/rofr-good-thing-2/" style="display:inline-block;margin-left: 50px;width:30%;">
			 <img src="images/".$rec['image'] class="attachment-medium size-medium wp-post-image" alt="" srcset="https://dvcsales.com/wp-content/uploads/2016/05/FullSizeRender-9-300x216.jpg 300w, https://dvcsales.com/wp-content/uploads/2016/05/FullSizeRender-9-1000x721.jpg 1000w, https://dvcsales.com/wp-content/uploads/2016/05/FullSizeRender-9.jpg 1015w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="216">  		</a>
  		<div class="media-body" style="display: inline-block;width: 60%;">
    		<h4 class="media-heading"><a href="https://dvcsales.com/rofr-good-thing-2/" title="Read more" style="color:#1f4e79;font-family:Baskerville Old face !important;"><?php echo $title;?></a></h4>
			<hr class="divider">
			<?php echo $rec['description'];?>
          <!-- What is ROFR, and why is it a good thing? ROFR stands for Right of First Refusal. Disney has the right to review every contract that is sold on the resale market. &nbsp;After a buyer and seller agree to the terms of a contract, and both parties sign the necessary paperwork, Disney has 30 days to look at the agreement… --> 
          <?php ?>
           <br><br><br><br><br><br><a style="" href="https://dvcsales.com/rofr-good-thing-2/">Read More »</a>		  		</div>
		<div class="block-meta">
		<hr class="divider">
          <ul class="list-inline list-unstyled">
  			<li>By <a href="#">Mark Webb</a></li>
            <!-- <li><span> <i class="glyphicon glyphicon-comment"></i> 4 comments</span></li>-->
						<!--<li>Tags:<a href="#">Webdesigning Webdesigning Webdesigning</a></li>-->
            
            <li style="float:right;">
			Share 
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
			 <!--<span> <i class="fa fa-twitter  fa-lg"></i></span>-->
            
              <span> <i class="fa fa-facebook fa-lg"></i></span>
              </li>
			</ul>
			<hr class="divider">
			</div><!-- block meta -->
		</div>
 			
<?php

}
}
?>
		
	
		

</div>

</div>
</div>
</div>
</div>
<div class="col-md-3">
</div>
</div>
</div>
<?php
include "footer.php";
?>
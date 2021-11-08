
<?php
include "header.php";
include "sidebar.php";

include_once('connect.php');
//session_start();

if(!isset($_SESSION['id']))
{
	header('location:../login.php');
}

 // session_start();
 // ob_start();
 echo  $id=$_SESSION["id"];
 
$qry="select * from users where id=".$id;
echo $qry;
$rs1=mysqli_query($con,$qry);
//echo $rs1;
while($rec=mysqli_fetch_assoc($rs1))
{
    $contact=$rec['phone'];
    $name=$rec['fname'];
    $name1=$rec['lname'];
    $email=$rec['email'];

}
//echo $contact;
?>
<script type="text/javascript">
/* Image validation Start*/

    $('#image').change(function () {
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
            $("#companylogo").focus(function(){
            $(this).css({"border":"2px solid red"});
           });
             $('#companylogo').val("");
        }
    });

/* Image Validation End*/
</script>
<br>

<div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="exam">         
                        <div class="col-md-11 col-md-offset-1">
                                    <div class="panel panel-dgreen">
                                    <div class="panel-heading">
                                            PROFILE
                                    </div>
                                     <div class="panel-body">
                                        <form  method="POST" action="profile_update.php" enctype="multipart/form-data">
                                         <div class="form-box-content">
                                            <br>
                                        
                                         <!-- <div class="form-group">
                                          <label class="control-label col-sm-2" >Upload image:</label>
                                            <div class="col-sm-8">          
                                              <input type="file" class="form-control" name="image" id="image" / >
                                            </div>
                                        </div>
                                            <br> -->
                                            
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">First Name:</label>
                                                    <div class="col-sm-8">
                                                   <?php
                                                      echo"<input type=text class=form-control name=name value='".$name."'>";
                                                    ?>
 
                                                    </div>
                                            </div>
                                            <br>  <br>
                                             <div class="form-group">
                                                <label class="control-label col-sm-2">Last Name:</label>
                                                    <div class="col-sm-8">
                                                   <?php
                                                      echo"<input type=text class=form-control name=lname value='".$name1."'>";
                                                    ?>
 
                                                    </div>
                                            </div>
                                            <br><br>                                       
                                          

                                               <div class="form-group">
                                                <label class="control-label col-sm-2" >Email:</label>
                                                    <div class="col-sm-8">
                                                    <?php
                                                        echo"<input type=text class=form-control name=email value='".$email."' >";    
                                                    ?>
                                                    </div>
                                            </div>
                                            <br>
                                           
                                                <br>
                                               <div class="form-group">
                                                <label class="control-label col-sm-2" >Contact:</label>
                                                    <div class="col-sm-8">
                                                    <?php
                                                        echo"<input type=text class=form-control name=contact value='".$contact."'maxlength=10  >";    
                                                    ?>
                                                    </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">        
                                                <div class="col-sm-offset-2 col-sm-5">
                                                    <div><input type="submit" class="btn btn-lg btn-primary btn-block" name="s1" value="Update"></div>
                                                </div>
                                             </div>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                        </div>
                </div>
             </div>
<?php
include "footer.php";
?>
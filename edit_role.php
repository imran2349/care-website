<?php
include 'header.php';

$idd=$_GET['id'];
$a="select * from role where Id='$idd'";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);


if(isset($_POST['roles'])){
$n=$_POST['role'];
//$pas=$_POST['pass'];
//$role_id_FK=$_POST['roll'];
$q="UPDATE role SET role_name='$n' where Id='$idd'";
$result = mysqli_query($con,$q);
if($result){
echo "<script>alert('updated');</script>";
echo "<script>window.location.href='show_roles.php';</script>";
}

}
?>
<section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Roles</h4>
                      <form class="form-horizontal style-form"  action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Roles Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="role" class="form-control" value="<?php echo $c['role_name']?>">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="roles">Add Roles</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>

<?php

include 'footer.php';
?>
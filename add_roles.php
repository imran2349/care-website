<?php
include 'header.php';
<<<<<<< HEAD
if(isset($_POST['role'])){  
=======
if(isset($_POST['r'])){  
>>>>>>> 55d4c7956daade663bf6bfdd6ab04f0a8558527a
    $role =   mysqli_real_escape_string($con, $_REQUEST['role']);
    $sql  = "INSERT INTO `role` (`role_name`) VALUE ('$role')";
    


    if(mysqli_query($con, $sql)){
        echo "<script>alert('inserted');window.location.href='show_roles.php' </script>"  ; 
      
    }
    else{
        echo "<script>alert('error');</script>"  ; 
    
    }
    }
include 'header.php';
?>
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Roles</h4>
                      <form class="form-horizontal style-form"  action=""  method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Roles Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="role" class="form-control">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="r">Add Roles</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>

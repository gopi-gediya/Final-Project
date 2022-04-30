<?php 
require_once("connection.php");


    if(isset($_REQUEST['userregister']))
    {
      
       $in=$con->query("insert into userregister values(0,'$_REQUEST[name]','$_REQUEST[address]','$_REQUEST[contact]','$_REQUEST[email]',0)");
    }
    if(isset($_REQUEST['userregister']))
    {
      header('location:login.php');
    }

    
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php 
     require_once("head.php");
 ?>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="divider bg-lighter">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">

            </div>
              <div class="col-md-6 ">
                <form name="reg-form" class="register-form form-transparent" method="post">
                  <div>
                    <h3 class="text-gray pt-10 mt-0 mb-30">Register Now</h3>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input id="" name="name" class="form-control" type="text"required/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Address</label>
                      <input id="" name="address" class="form-control" type="text"required/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Contact</label>
                      <input id="" name="contact" class="form-control" type="text" pattern="^[0-9]{10}$" required maxlength="10" />
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input id="" name="email" class="form-control" type="text" required/>
                    </div>
                  </div>
                  
                  <div class="text-end">
                    <a class="forgot-link" href="login.php">Already have an account?</a>
                  </div>
                  <div class="form-group col-md-12" >
                   <a href="login.php"> <button class="btn btn-primary btn-block" type="submit" name="userregister">Register Now</button>
                   </a>

                  </div>  
                  </div>

              </form>
              <div class="col-md-6 col-md-push-2">
              <img src="images/about/login.jpg" alt="" width="300px" >                
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> 
</div>
<?php 
     require_once("scripts.php"); 
 ?>
</body>
</html>
<?php
    require_once("connection.php"); 

    $valid=0;

    if(isset($_REQUEST['sendotp']))
    {
        $otp=rand(10,99).rand(10,99).rand(10,99);
        $data=$con->query("select * from userregister where email like '$_REQUEST[email]'");
        $check=mysqli_fetch_array($data);

        if($check[0]=="")
        {
            
        }
        else
        {
            $_SESSION['email']=$check[4];
            $_SESSION['userid']=$check[0];
            $_SESSION['name']=$check[1];
            $_SESSION['contact']=$check[3];
            $_SESSION['address']=$check[2];
            $del=$con->query("delete from otp");
            $in=$con->query("insert into otp values(0,$otp)");
            $to=$_REQUEST['email'];
            $subject="Admin OTP";
            $body="$otp is your Admin verification code. Enjoy admin panel!";
            $header="OTP";
            if(mail($to,$subject,$body,$header))
            {
                $valid=2;
            }
            else
            {
                $valid=3;
            } 
        }      
    }

    if(isset($_REQUEST['login']))
    {

        
        $get=$con->query("select * from otp");
        $data=mysqli_fetch_array($get);

        if($data[1]==$_REQUEST['otp'])
        {
            
            $_SESSION['admin']="true";
            header('location:../saloon/index.php');

        }
        else
        {
            $valid=4;
        }
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
               <div class="col-md-6 col-md-3">
                  <img src="images/about/login.jpg" alt="" width="300px" >
                </div>
              <div class="col-md-6 col-md-push-2">
                
                <form action="" method="post">
                    
                                <?php
                                   if($valid==1 || $valid==0)
                                   {
                                ?>
                                <div class="form-group">
                                    <input  class="form-control" type="email" placeholder="Email" name="email" required>
                                    <?php
                                      if($valid==1)
                                      {
                                        echo "<p style='color:red;font-size:10px;'>Invalid user!</p>";
                                      }
                                    ?>
                                </div>
                                <?php
                                   }
                                ?>
                                <?php
                                   if($valid==2 || $valid==4)
                                   {
                                ?>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Otp" name="otp" maxlength="6" pattern="^[0-9]{6}$" required>
                                    <?php
                                      if($valid==2)
                                      {
                                        echo "<p style='color:green;font-size:10px;'>OTP send successed!</p>";
                                      }
                                      else if($valid==3)
                                      {
                                        echo "<p style='color:red;font-size:10px;'>Something Wrong!</p>";
                                      }
                                      else if($valid==4)
                                      {
                                        echo "<p style='color:red;font-size:10px;'>Wrong OTP!</p>";
                                      }
                                    ?>
                                </div>
                                <?php
                                   }
                                ?>
                                <?php
                                if($valid==2 || $valid==4 )
                                {
                                ?>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </div>
                                <?php
                                }
                                else
                                {
                                ?>
                                
                              <div class="text-center dont-have">Don’t have an account? <a
                                                href="register.php">Register</a>
                                        </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="sendotp" type="submit">Send OTP</button>
                                <?php 
                                }
                                ?>
                                </div>
                            </form>
                
               
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
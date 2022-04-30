<?php
require_once("connection.php");
$valid=0;
  if(isset($_REQUEST['sendotp']))
  {
    $otp=rand(10,99).rand(10,99).rand(10,99);
    $data=$con->query("select * from saloonregister where email like '$_REQUEST[email]'");
    $check=mysqli_fetch_array($data);
        $valid=1;

    if($check[0]=="")
    {
    }
    else
    {
        $del=$con->query("delete from otp");
        $in=$con->query("insert into otp values(0,$otp)");
        $to="glamifie07@gmail.com";
        $subject="Admin OTP";
        $body="$otp is your Admin verification code.Enjoy Admin Panel!";
        $header="otp";
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
        $_SESSION['cpage']="dashboard";
        header('location:../admin/index.php');
    }
    else
    {
        $valid=4;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'head.php'; ?>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <div class="llogo">
                        <img class="img-fluid" src="assets/img/logo-dark.png" width="160px" alt="Logo">
                        <h3 class="llogo2">Glamifie<h3>

                        </div>
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" name="sendotp" type="submit">Resend OTP</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if($valid==2 || $valid==4)
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
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="sendotp" type="submit">Send OTP</button>
                                </div>
                                <?php 
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>
</html>
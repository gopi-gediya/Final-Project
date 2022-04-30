<?php
require_once("connection.php");
require_once("query.php");

if($_SESSION['admin']=="")
{
  header('location:../admin/login.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'head.php'; ?>

<body onload="getdata('<?php echo $_SESSION["cpage"]; ?>','display',0)">
    <div class="main-wrapper">

        <?php require_once 'upmenu.php' ?>
        
        <?php require_once 'sidemenu.php' ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div>Manage Dashboard</div>
                    </div>
                    <div class="col-md-6">
                        <div style="text-align: right">
                            <?php 
                               $data=$con->query("select * from saloonregister");
                               $row=mysqli_fetch_array($data);
                               echo "Last Login: $row[9]";
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr/>
                    </div>
                </div>
                
            </div>
            <div id="missdata" class="container">
                
            </div>
           <?php require_once 'footer.php' ?>
        </div> 
    </div>
   <?php require_once 'script.php' ?>
</body>
</html>

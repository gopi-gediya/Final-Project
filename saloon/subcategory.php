<?php
require_once("connection.php");

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php 
   require_once("head.php");
?>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
 <?php 
   require_once("header.php");
 ?>
  <div class="main-content">
<!-- Section: inner-header -->
    <section class="inner-header divider  layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h1 class="gopi">Subcategory</h1>
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item "><a href="index.php" style="margin-right: 5px;">Home</a></li>
                       <i class="fa fa-angle-right"></i>
                      <li class="breadcrumb-item active"><a href="#" style="margin-left: 5px;">Subcategory</a></li>
                    </ol>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="about">
      <div class="container pb-60 pt-sm-70 pb-sm-30">
        <div class="section-content">
          <div class="row">
            <?php
            $data=$con->query("select * from worksubcategory where workcategoryid=$_REQUEST[id]");
            while($row=mysqli_fetch_array($data))
            {
            ?>           
            <div class="col-md-4 mb-sm-40 mt-5" style="margin-bottom: 20px;">
              <div class="thumb border-effect">
                <img class="img-fullwidth" src="<?php echo "admin/".$row[3]; ?>" style="height: 400px;" alt="">
              </div>
              <div class="relative z-index1" data-margin-top="-30px">
                <h4 class="text-uppercase letter-space-3 bg-black  font-weight-400 pl-20 pr-20 pt-5 pb-5 display-inline mb-10" >
                  <a class="text-white"><?php echo $row[2]; ?></a>
                </h4>
              </div>

              <div class="" style="text-align: center;">
                <p style="height: 40px; display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;"><?php echo $row[4]; ?></p>
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">₹ <?php echo $row[5]; ?>/-</p>
                <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20" href="categorydetails.php?subcid=<?php echo $row[1]; ?>">Buy This Service</a>
              </div>
              
            </div>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </section>


  </div>
   <?php
    require_once("footer.php");
   ?>
</div>
 <?PHP 
     require_once("scripts.php"); 
 ?>
</body>
</html>
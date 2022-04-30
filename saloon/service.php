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
    <section class="inner-header divider  layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h1 class="gopi" >Our Service</h1>
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item "><a href="index.php" style="margin-right: 5px;">Home</a></li>
                       <i class="fa fa-angle-right"></i>
                      <li class="breadcrumb-item active"><a href="service.php" style="margin-left: 5px;">our service</a></li>
                    </ol>
                </nav>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<section id="about">
      <div class="container pb-60 pt-sm-70 pb-sm-30">
        <div class="section-content">
          <div class="row">
            <?php
            $data=$con->query("select * from workcategory");
            while($row=mysqli_fetch_array($data))
            {
            ?>           
            <div class="col-md-4 mb-sm-40">
              <div class="thumb border-effect">
                <img class="img-fullwidth" src="<?php echo "admin/".$row[2]; ?>" style="height: 400px;" alt="">
              </div>
              <div class="relative z-index1" data-margin-top="-30px">
                <h4 class="text-uppercase letter-space-3 bg-black  font-weight-400 pl-20 pr-20 pt-5 pb-5 display-inline mb-10" >
                  <a href="subcategory.php?id=<?php echo $row[0]; ?>" class="text-white"><?php echo $row[1]; ?></a>
                </h4>
              </div>
              
            </div>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </section>
    <?php
    require_once("footer.php");
   ?>
</div>
 <?PHP 
     require_once("scripts.php"); 
 ?>
</body>
</html>
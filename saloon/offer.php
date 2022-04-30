<?php
require_once("connection.php");


/*if($_SESSION['email']=="")
{
  header('location: index.php');
}
 */

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/html/health-beauty/haircare/v3.1/demo/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 12:23:12 GMT -->
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
  
  <!-- Header -->
  
 <?php 
   require_once("header.php");
 ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Offer</h2>
              <ol class="breadcrumb white mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-theme-colored" href="offer.php">offer</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <table class="table table-striped table-bordered tbl-shopping-cart">
                <thead>
                  <tr>
                    
                    <th>Offer name</th>
                    <th>off</th>
                    <th>Start Date</th>
                      <th>End Date</th>
                  </tr>
                </thead>

                <tbody>

<?php
 $total=0; 
$da1=$con->query("select * from offer");
  while($ro=mysqli_fetch_array($da1))
  {
    
?>
                  <tr class="cart_item">
                    
                    <td class="product-thumbnail"><?php echo $ro[1]; ?></td>
                    <td class="product-thumbnail"><?php echo $ro[2]; ?></td>
                      <td class="product-thumbnail"><?php echo $ro[3]; ?></td>
                        <td class="product-thumbnail"><?php echo $ro[4]; ?></td>

                    
                  </tr>
  <?php
  }
  ?>
                </tbody>

              </table>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
 <?php
    require_once("footer.php");
 ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from html.kodesolution.live/html/health-beauty/haircare/v3.1/demo/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 12:23:12 GMT -->
</html>
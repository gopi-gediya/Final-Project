<?php
require_once("connection.php");


if($_SESSION['email']=="")
{
  header('location: index.php');
}
    
  if($_REQUEST['wscid']!="")
  {
     // echo $_REQUEST['wscid'];
      $data=$con->query("select * from worksubcategory where worksubcategoryid=$_REQUEST[wscid]");
      $row=mysqli_fetch_array($data);
      echo $row[3];

      $in=$con->query("insert into cart values($_SESSION[userid],$_REQUEST[wscid],0,$row[5],0,$row[5])");
      header('location: cart.php');
  }

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
              <h3 class="title text-white"> Cart</h2>
              <ol class="breadcrumb white mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-theme-colored"> Cart</li>
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
                    <th></th>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Price</th>
                  </tr>
                </thead>

                <tbody>

<?php
 $total=0; 
$da1=$con->query("select * from cart where userid=$_SESSION[userid]");
  while($ro=mysqli_fetch_array($da1))
  {
    $total=$total+$ro[3];

    $ftotal= $total * 30 /100;
    $_SESSION['atotal']=$ftotal;

    $data3=$con->query("select * from worksubcategory where worksubcategoryid=$ro[1]");
    $row3=mysqli_fetch_array($data3);
?>
                  <tr class="cart_item">
                    <td class="product-remove"><a title="Remove this item" class="remove" href="query.php?cdid=<?php echo $ro[2] ?>">×</a></td>
                    <td class="product-thumbnail"><a href="#"><img alt="member" src="<?php echo "admin/".$row3[3]; ?>"></a></td>
                    <td class="product-name"><a class="text-theme-colored" style="text-transform: capitalize;" href="#"><?php echo $row3[2]; ?></a>
                      <ul class="variation">
                        <?php
                          $data5=$con->query("select * from workcategory where workcategoryid=$row3[0]");
                          $row5=mysqli_fetch_array($data5);
                        ?>
                        <li class="variation-size" style="text-transform: capitalize;">Category: <span><?php echo $row5[1]; ?></span></li>
                      </ul></td>
                    <td class="product-price"><span class="amount">₹ <?php echo $ro[3]; ?>/-</span></td>
                  </tr>
  <?php
  }
  ?>
                </tbody>

              </table>
            </div>
            <div class="col-md-10 col-md-offset-1 mt-30">
              <div class="row">

                <div class="col-md-6">
                  <h4>Cart Totals</h4>
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Order Total Amount</td>
                        <td>₹ <?php echo $total; ?>/-</td>
                      </tr>
                      <tr>
                        <td>Payble Amount (30%)</td>
                        <td>₹ <?php echo $_SESSION['atotal']?>/-</td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-default" href="index.php">Continue</a> 
                  <a class="btn btn-default" href="checkout.php">Proceed to Checkout</a> 
                </div>

              </div>
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
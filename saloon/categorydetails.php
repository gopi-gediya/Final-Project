<?php

require_once("connection.php");
if(isset($_REQUEST['tt']))
    {
      
        $dt=date("Y-m-d h:i:s");
      $in=$con->query("insert into ratereview values($_SESSION[userid],$_REQUEST[subcid],0,$_REQUEST[rate],'$_REQUEST[review]','$dt')");
    }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
   require_once("head.php");

?>

<body class="">

  
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
              <h3 class="title text-white">Prouct Details</h2>
              <ol class="breadcrumb white mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-theme-colored">Prouct Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <?php
          $data=$con->query("select * from worksubcategory where worksubcategoryid=$_REQUEST[subcid]");
          $row=mysqli_fetch_array($data);

          $data1=$con->query("select * from workcategory where workcategoryid=$row[0]");
          $row1=mysqli_fetch_array($data1);

      ?>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="product">

              <div class="col-md-5">
                <div class="product-image">
                  <div class="zoom-gallery">
                    <a href="<?php echo "admin/".$row[3]; ?>" title="Title Here 1"><img src="<?php echo "admin/".$row[3]; ?>" height="500px" width="400px" alt=""></a>
                  </div>
                </div>
              </div>

              <div class="col-md-7">
                <div class="product-summary">
                  <h2 class="product-title" style="text-transform: capitalize;"><?php echo $row[2]; ?></h2>
                  <div class="product_review">
                    <ul class="review_text list-inline">
                      <li><a href="#"><span>2</span>Reviews</a></li>
                    </ul>
                  </div>
                  <div class="price" style="margin: 20px 0px"><ins><span class="amount">₹ <?php echo $row[5]; ?>/-</span></ins> </div>
                  <div class="tags"><strong>SKU:</strong> <?php echo $row[1]; ?></div>
                  <div class="category"><strong>Category:</strong> <a href="#" style="text-transform: capitalize;"><?php echo $row1[1]; ?></a></div>
                  <div class="category"><strong>Description:</strong> <a href="#" style="text-transform: capitalize;"><?php echo $row[4]; ?></a></div>

                  <div class="cart-form-wrapper mt-30">
                    <form enctype="multipart/form-data" method="post" class="cart">
                      <input type="hidden" value="productID" name="add-to-cart">
                     
                      <?php

                          $data1=$con->query("select * from bill where userid=$_SESSION[userid]");
                          $row1=mysqli_fetch_array($data1);

                          if($row1[0]!="")
                          {
                            
                      ?>
                          <a href="cart.php?wscid=<?php echo $row[1];?>" class="single_add_to_cart_button btn btn-theme-colored">Add to Cart</a>
                      <?php
                          }
                          else
                          {
                      ?>
                          <a class="single_add_to_cart_button btn btn-theme-colored" disabled title="Please login now!">Add to Cart</a>
                      <?php
                          }
                      ?>



                      <?php

                          $data1=$con->query("select * from bill where userid=$_SESSION[userid]");
                          $row1=mysqli_fetch_array($data1);

                          if($row1[0]!="")
                          {
                      ?>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Rate & Review
                          </button>
                      <?php
                          }
                          else
                          {
                      ?>
                          <a class="single_add_to_cart_button btn btn-theme-colored"  disabled title="Please login now!">Rate & Review</a>
                      <?php
                          }
                      ?>
  

                    </form>







                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Rate & Review</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                              <form name="ratereview" action="" method="POST">

                                <div class="form-group">
                                  <label for="recipient-name" name="rate" class="col-form-label">Rate:</label>
                                  <input type="number" min="0" max="5" name="rate" class="form-control" required>
                                </div>

                                <div class="form-group">
                                  <label for="message-text" name="review" class="col-form-label">Review:</label>
                                  <textarea class="form-control" name="review" required></textarea>
                                </div>

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="tt" class="btn btn-primary" >Submit</button>

                              </form>
                            </div>

                          </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>

           
    <?php
    $data2=$con->query("select * from worksubcategory where workcategoryid=$row1[0]");
            while($row2=mysqli_fetch_array($data2))
            {
              ?>

                <div class="col-sm-6 col-md-3 col-lg-3 mb-30">
                    <div class="product" >
                      <div class="product-thumb"> 
                        <img alt="" src="<?php echo "admin/".$row2[3]; ?>" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title"><?php echo $row2[2]; ?></h5></a>
                        <div class="price"><ins><span class="amount">₹ <?php echo $row2[5]; ?>/-</span></ins></div>
                      </div>
                    </div>
                  </div>
              <?php
            }
        ?>
                 
 

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>


 <?php
    $data2=$con->query("select * from ratereview where work=$_REQUEST[subcid]");
    while($roww=mysqli_fetch_array($data2))
    {
  ?>

  <div class="container">
    <div class="row">
     
      <div class="col-md-10">
        <?php 
          $data=$con->query("select * from userregister where userid=$roww[0]");
          $row=mysqli_fetch_array($data);
         ?>

        <ul>
          <li>User Name : <?php echo $row[1] ?> </li>
          <li>Review : <?php echo $roww[4] ?></li>
        </ul>
      </div>
      <div class="col-md-2">
        <?php
          for($i=1;$i<=5;$i++)
          {
            if($i<=$roww[3])
            {
         ?>
              <i class="fa fa-star" style="color: red"></i>
        <?php
          }
          else
          {
          ?>
              <i class="fa fa-star"></i>
        <?php
          }
        }
         ?>
      </div>
    </div>
  </div>
  <hr>
   <?php
  
}
   ?>

  <!-- end main-content -->
  
  <!-- Footer -->
  <?php
    require_once("footer.php");
   ?>
 </div>
<!-- end wrapper --> 
 <?php
    require_once("scripts.php");
   ?>

</body>

<!-- Mirrored from html.kodesolution.live/html/health-beauty/haircare/v3.1/demo/shop-product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 12:23:12 GMT -->
</html>
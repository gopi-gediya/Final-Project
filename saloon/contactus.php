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
  
  <!-- Header -->
  <?php 
    require_once("header.php");
  ?>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider  layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h1 class="gopi">Contact Us</h1>
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item "><a href="index.php" style="margin-right: 5px;">Home</a></li>
                       <i class="fa fa-angle-right"></i>
                      <li class="breadcrumb-item active"><a href="contactus.php" style="margin-left: 5px;"> contact us</a></li>
                    </ol>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Contact -->
    <section id="contact" class="divider bg-lighter">
      <div class="container pt-0 pb-0">
	    <div class="section-content">
	          <div class="row">
	          	<div class="col-md-12 text-center">
	                <h3 class="mt-100 mb-30">LET'S GET IN TOUCH</h3>
	                <p class="mb-30">Here are the packages that we offer and they all include refreshments.</p>
	          	</div>
	            <div class="col-sm-12 col-md-12">
	              <div class="contact-wrapper">

	                <!-- Contact Form -->
	                <form  name="contact_form" class="form-transparent" action="" method="post">
	                  <div class="row">
	                    <div class="col-sm-6">
	                      <div class="form-group">
	                        <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required pattern="^[a-zA-Z]+$">
	                      </div>
	                      <div class="form-group">
	                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" required >
	                      </div>
	                      <div class="form-group">
	                        <input id="form_mobile" name="form_moblie" class="form-control required" type="text" placeholder="Enter Mobile Number" required pattern="^[0-9]{10}$" maxlength="10">
	                      </div>
	                    </div>
	                    <div class="col-sm-6">
		                  <div class="form-group">	
		                    <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message" required style="height: 165px;"></textarea>
		                  </div>
	                    </div>
	                  </div>
	                  <div class="form-group text-center mt-30">
	                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
	                    <button type="submit" class="btn btn-theme-colored">submit</button>
	                  </div>
	                </form>
	                <!-- Contact Form Validation-->
	               
	              </div>
	            </div>
	          </div>
	    </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: (+91)82381 20002</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray">393 Swastik Square, Surat</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">glamifie07@gmail.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--======= Section Map ===== -->
    <section>
      <div class="container-fluid pt-0">
          <div class="row">
            <div class="col-sm-12 col-md-12">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14885.424066954354!2d72.792461!3d21.1382256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f7a8c40303d%3A0x4ca46c21d5592308!2sSwastik%20Plaza%2C%20Puna-Simada%20Rd%2C%20Yogi%20Chowk%20Ground%2C%20Chikuwadi%2C%20Nana%20Varachha%2C%20Surat%2C%20Gujarat%20395006!5e0!3m2!1sen!2sin!4v1644990839486!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
      </div>
    </section>    
  </div>
  <!-- end main-content -->
  
  
  <!-- Footer -->
<?php 
    require_once("footer.php");
?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>

<?PHP 
    require_once("scripts.php"); 
?>
</body>
</html>
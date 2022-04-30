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
    <section id="home" class="divider parallax pt-90 pb-90">
      <div class="maximage-slider">
        <div id="maximage">
          <img src="images/bg/bg4.jpg" alt=""/>
          <img src="images/bg/bg11.jpg" alt=""/>
          <img src="images/bg/bg12.jpg" alt=""/>
        </div>
        <div class="fullscreen-controls"> <a class="img-prev"><i class="pe-7s-angle-left"></i></a> <a class="img-next"><i class="pe-7s-angle-right"></i></a> </div>
      </div>
      <div class="display-table">
        <div class="display-table-cell pt-30 pb-30">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <i class="flaticon-salon-scissors-and-comb-2 font-64 text-theme-colored m-0 line-height-1"></i>
                <h2 class="font-playfair font-48 font-weight-700 text-white m-0">Most Fashionable Saloon</h2>
                <p class="text-white font-16 font-weight-200">A beauty salon or beauty parlor is an establishment dealing <br/>with cosmetic treatments for women.</p>
                <a class="btn btn-default btn-transparent btn-circled pl-30 pr-30 mt-15" href="about.php">About Us</a>
              </div>
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

    <section class="divider parallax layer-overlay overlay-dark" data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/1.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300 text-white">Easy appointments, welcoming staff, and talented employees! I was thrilled with my eyebrow wax, and bang trim. I will be back for more services!</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">-Gopi gediya</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/5.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300 text-white">I have been getting facials here once a month since this salon opened. (BN) is wonderful! The whole experience is so relaxing…</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">-Dhruvi nakrani</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/6.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300 text-white">I wanted to take a moment to share the wonderful experience that was my first interaction and visit with United Artists Salon</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">-Jahnvi dwivedi</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/8.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300 text-white">I had my first visit ever to United Artists. I chose this salon per the recommendation of a good friend who has been going to Kristin for her coloring needs for a while now</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">-Pinal hirpara</p>
                  </div>
                </div>
              </div>
             
            </div> 
          </div>
        </div>
      </div>
    </section>
    <section class="pricing">
      <div class="container pt-70 pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Our <span class="text-black font-weight-300">Package</span></h2>
              <p class="text-uppercase letter-space-4">Best Package Available For Beauty</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-uppercase">Join our team to make yourself beauty queen</h3>
              <h5 class="letter-space-4 font-weight-400 text-theme-colored">Glamifie</h5>
              <p>Buy out valuable package for get more benefit rather then retails booking</p>
              <img  class="img-fullwidth mt-40" src="images/about/5.png" alt="">
            </div>
            <div class="col-md-8">
              <div class="row">

                <?php
                $data=$con->query("select * from package");
                while($row=mysqli_fetch_array($data))
                {
                ?>
                <div class="col-md-6">
                  <div class="pricing-table mb-30">
                    <div class="package-type">
                      <div class="thumb pull-left mr-20 mb-20">
                        <img class="img-circle border-rounded border-8px" width="150" src="<?php echo "admin/".$row[2]; ?>" alt="">
                      </div>
                      <div class="price pt-30">
                        <h5 class="text-uppercase letter-space-2"><?php echo $row[1]; ?></h5>
                        <span class="font-weight-800 font-36 text-center text-theme-colored">&#8377;<?php echo $row[3]; ?></span>
                      </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;"><?php echo $row[4]; ?></p>
                        <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20" href="packagedetail.php?id=<?php echo $row[0]; ?>">Buy This pakage</a>
                      </div>
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
    </section>

    <section id="gallery">
      <div class="container-fluid p-0">
        <div class="section-content">
          <div class="row">
            <div class="container-fluid">
              <div class="col-md-3">
                <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Work Gallery</span></h3>
              </div>
              <div class="col-md-8"></div>
              <div class="col-md-1">
                <a href="gallery.php"><button class="btn btn-black btn-danger">View More</button></a>
              </div>
            </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                <!-- Portfolio Item Start -->
                
                <?php
                $data=$con->query("select wg.*,wc.* from workgallery wg,workcategory wc where wc.workcategoryid=wg.workcategoryid order by wg.workgalleryid desc limit 0,12");
                while($row=mysqli_fetch_array($data))
                {
                ?>
                <div class="gallery-item branding" style="height: 400px;">
                  <div class="thumb" style="height: 400px;">
                    <img class="img-fullwidth img-thumbnail" src="<?php echo "admin/".$row[2]; ?>" alt="Glamifie">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title" style="text-transform: uppercase;"><?php echo $row[4]; ?></h5>
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
    </section>

    <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Features</span></h3>
              <div class="row multi-row-clearfix">
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                  <div class="icon-box p-0 mb-30">
                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip flip sm-pull-none" href="#">
                    <i class="pe-7s-edit text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Make Up</h5>
                    <p class="text-gray">Inner beauty is great,but a little mascara never hurt.</p>
                   </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                  <div class="icon-box p-0 mb-30">
                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip flip sm-pull-none" href="#">
                    <i class="pe-7s-magic-wand text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Facial</h5>
                    <p class="text-gray">Because facials are more relaxing than flowers.</p>
                   </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                  <div class="icon-box p-0 mb-30">
                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip flip sm-pull-none" href="#">
                    <i class="pe-7s-paint-bucket text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Nail Polish</h5>
                    <p class="text-gray">Keep calm and wear sparkle nail polish.</p>
                   </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                  <div class="icon-box p-0 mb-30">
                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip flip sm-pull-none" href="#">
                    <i class="pe-7s-pen text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Nail Tools</h5>
                    <p class="text-gray">Life is not perfect but your nails can be.</p>
                   </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                  <div class="icon-box p-0 mb-30">
                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip flip sm-pull-none" href="#">
                    <i class="pe-7s-diamond text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Hair Style</h5>
                    <p class="text-gray">Treat your hair like a science lab...EXPERIMENT.</p>
                   </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                  <div class="icon-box p-0 mb-30">
                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip flip sm-pull-none" href="#">
                    <i class="pe-7s-scissors text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">Hair Cutting</h5>
                    <p class="text-gray">Life is too short to have bad hair.</p>
                   </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Styles Skill</span></h3>
              <div class="progressbar-container">
                <div class="progress-item mb-30">
                  <div class="progress-title">
                    <h5 class="text-uppercase letter-space-2">Hair</h5>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored" data-percent="85"></div>
                  </div>
                </div>
                <div class="progress-item mb-30">
                  <div class="progress-title">
                    <h5 class="text-uppercase letter-space-2">Facial</h5>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored" data-percent="45"></div>
                  </div>
                </div>
                <div class="progress-item mb-30">
                  <div class="progress-title">
                    <h5 class="text-uppercase letter-space-2">Nails Design</h5>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored" data-percent="95"></div>
                  </div>
                </div>
                <div class="progress-item mb-30">
                  <div class="progress-title">
                    <h5 class="text-uppercase letter-space-2">Beauty services</h5>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored" data-percent="65"></div>
                  </div>
                </div>
                <div class="progress-item mb-30">
                  <div class="progress-title">
                    <h5 class="text-uppercase letter-space-2">Massage</h5>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-theme-colored" data-percent="88"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-theme-colored">
      <div class="container pt-30 pb-30">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h3 class="font-22 font-weight-400 text-white mt-15">Look for best and book your set.</h3>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section id="products">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase">Latest <span class="text-black font-weight-300"> Products</span></h2>
              <p class="text-uppercase letter-space-4">Welcome to our beauty salon.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row multi-row-clearfix">
                <div class="owl-carousel-3col products" data-dots="true" data-nav="true">
                  
                  
                  <?php
                  $data=$con->query("select * from product order by productid desc");
                  while($row=mysqli_fetch_array($data))
                  {
                  ?>
                  <div class="item">
                    <div class="product">
                      <div class="product-thumb"> 
                        <img alt="" src="<?php echo "admin/".$row[3]; ?>" class="img-responsive img-fullwidth img-thumbnail" style="height: 250px;" />
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title"><?php echo $row[1]; ?></h5></a>
                        <div><span style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-transform: capitalize;"><?php echo $row[4]; ?></span></div>
                        <div class="price"><span class="amount">&#8377;<?php echo $row[2]; ?></span></div>
                        
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
    require_once("footer.php");
   ?>
</div>
 <?PHP 
     require_once("scripts.php"); 
 ?>
</body>
</html>
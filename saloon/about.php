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
              <h1 class="gopi" >About</h1>
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item "><a href="index.php" style="margin-right: 5px;">Home</a></li>
                       <i class="fa fa-angle-right"></i>
                      <li class="breadcrumb-item active"><a href="about.php" style="margin-left: 5px;"> about us</a></li>
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
            <div class="col-md-4 mb-sm-40">
              <div class="thumb border-effect">
                <img alt="" src="images/about/6.png" class="img-fullwidth">
              </div>
              <div data-margin-top="-30px" class="relative z-index1" style="margin-top: -30px;">
                <h4 class="text-uppercase letter-space-3 bg-black  font-weight-400 pl-20 pr-20 pt-5 pb-5 display-inline mb-10">
                  <a class="text-white" href="#">Profesional Staff</a>
                </h4>
              </div>
              <p>Glamifie helps to manage the employess payrolling and attendence . Glamifie automatically track the payrolling and staff commissioning and calculate there payouts based on it.
              </p>
            </div>
            <div class="col-md-4 mb-sm-40">
              <div class="thumb border-effect">
                <img alt="" src="images/about/7.png" class="img-fullwidth">
              </div>
              <div data-margin-top="-30px" class="relative z-index1" style="margin-top: -30px;">
                <h4 class="text-uppercase letter-space-3 bg-black  font-weight-400 pl-20 pr-20 pt-5 pb-5 display-inline mb-10">
                  <a class="text-white" href="#">styles Interior</a>
                </h4>
              </div>
              <p>Interior design, planning and design of man-made spaces, a part of environmental design and closely related to architecture. Although the desire to create a pleasant environment is as old as civilization itself, the field of interior design is relatively new.
              </p>
            </div>
            <div class="col-md-4 mb-sm-40">
              <div class="thumb border-effect">
                <img alt="" src="images/about/8.png" class="img-fullwidth">
              </div>
              <div data-margin-top="-30px" class="relative z-index1" style="margin-top: -30px;">
                <h4 class="text-uppercase letter-space-3 bg-black  font-weight-400 pl-20 pr-20 pt-5 pb-5 display-inline mb-10">
                  <a class="text-white" href="#">styles Offer</a>
                </h4>
              </div>
              <p>If you wish to attract new clients while retaining the old ones, come up with personalised offers. Birthday discounts, 3 at the price of 2, festive offers and referral points system are different ways in which you can lure clients.

              </p>
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
              <h3 class="font-weight-400 text-white font-raleway letter-space-2">Not every woman has time to go to a salon and have her hair blow-dried every day.</h3>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <section id="trainer">
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Our  <span class="text-black font-weight-300">Expert</span></h2>
              <p class="text-uppercase letter-space-4">Best Hair Care Theme on Themeforest.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row ml-md-0">
            <div class="col-md-4">
               <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/10.png" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="trainer-info">
                      <div class="social-network">
                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                          <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                        </ul>
                      </div>
                      <div class="trainer-biography">
                        <h3 class="text-white">Parul Garg</h3>
                        <h5 class="text-white">Master Makeup</h5>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/11.png" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="trainer-info">
                      <div class="social-network">
                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                          <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                        </ul>
                      </div>
                      <div class="trainer-biography">
                        <h3 class="text-white">Aalim Hakim</h3>
                        <h5 class="text-white">Master Hair cutting</h5>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/12.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="trainer-info">
                      <div class="social-network">
                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                          <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                        </ul>
                      </div>
                      <div class="trainer-biography">
                        <h3 class="text-white">Aadhuna Bhabani</h3>
                        <h5 class="text-white">Master Hair Stylist</h5>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
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
                    <h4 class="font-weight-300">Excellent! Easy to communicate with and very responsive. She was prompt and professional, but most importantly she is a a highly skilled makeup artist. </h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Doli Patel</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/2.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300">Great haircuts, fantastic services, love the atmosphere, nothing but a good afternoon. 💇‍♀️💆‍♀</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Gudi Goswami</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/3.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300">I love this nail salon. I was looking for a new nail place and this place got me the second I walked in. Very clean, many variety of colors/spa treatments.</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Krina Parikh</p>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/4.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300">Easy appointments, welcoming staff, and talented employees! I was thrilled with my eyebrow wax, and bang trim. I will be back for more services!</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Rina Gor</p>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/5.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300"> I have been getting facials here once a month since this salon opened. (BN) is wonderful! The whole experience is so relaxing…</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Pinal Patel</p>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/6.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300"> My experience with Debbie Meas was amazing. She was very kind, understanding, and very helpful and supportive.</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Jinal Dholiya</p>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/7.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300"> I wanted to take a moment to share the wonderful experience that was my first interaction and visit with United Artists Salon</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Mahi Patel</p>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/8.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300"> I decided to take the finally take the big step and donate my hair. Lisa was absolutely amazing! She is quite the hair genius!</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Kuhu Gorsiya</p>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/9.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300"> I had my first visit ever to United Artists. I chose this salon per the recommendation of a good friend who has been going to Kristin for her coloring needs for a while now</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Yami Patel</p>
                  </div>
                </div>
              </div>
             
              <div class="item">
                <div class="pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0 mt-10 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/testimonials/10.png">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="font-weight-300"> I received excellent service for my first haircut at UA! Faith gave me tips for my scalp and cut my hair exactly the way I wanted it!
</h4>
                    <p class="author text-theme-colored pl-sm-20 mt-20">- Pakhi Mishra</p>
                  </div>
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
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
 
<?PHP 
    require_once("scripts.php"); 
?>
</body>
</html>
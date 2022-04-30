
  <header id="header" class="header">
    <div class="header-top bg-theme-colored xs-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline xs-text-center mt-5">
                <li class="m-0">
                  <a class="text-white" href="#">glamifie07@gmail.com</a>
                </li>
                
                <li class="m-0">
                  <a class="text-white" href="#">(+91)82381 20002</a>
                </li>
                
                </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-sm m-0 xs-text-center text-right">
                <li><a href="#" title="Facebook"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"  title="Twitter"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#" title="Gmail"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fa fa-instagram text-white"></i></a></li>

                <li>
                  <?php
                    if($_SESSION['email']=="")
                    {
                  ?>
                  <a class="nav-link header-login" href="login.php" style="padding: "><i class="fa fa-user" style="font-size: 15px; color: white; padding: 5px !important">SignIn/Up</i>
                  </a>
                  <?php
                    }
                    else
                    {
                  ?>
                  <a class="nav-link header-login" href="logout.php" style="padding: "><i class="fa fa-user" style="font-size: 15px; color: white; padding: 5px !important">Logout</i>
                  </a>
                  <?php
                    }
                  ?>
                </li>
                
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
        <div class="container">
          <nav id="menuzord-right" class="menuzord bg-lightest">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
             <a href="index.php"><img href="index.php"src="images/256.png"  width="80px" title="Glamifie - Time to treat yourself " alt=""><b class="glamifie" style="font-size:180% ; position: absolute;right: 10;bottom: 0;left: 10;">Glamifie</b></a>
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="gallery.php">Our gallery</a>
                
              </li>
              <li><a href="service.php">Our Services</a></li>
              <li><a href="#">Our Customer</a>
                <ul class="dropdown">
                  <li><a href="privatepolicy.php">Privacy policy</a></li>
                  <li><a href="offer.php">Offer</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                  
                </ul>
              </li>
              <li><a href="contactus.php">Contact us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
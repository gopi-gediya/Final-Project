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
    
    <hr/>
    <section id="gallery">
      <div class="container-fluid p-0">
        <div class="section-content">
          <div class="row">
            <div class="container-fluid">
              <div class="col-md-4">
                <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Work Gallery</span></h3>
              </div>
              <div class="col-md-8"></div>
              
            </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                <!-- Portfolio Item Start -->
                
                <?php
                $data=$con->query("select wg.*,wc.* from workgallery wg,workcategory wc where wc.workcategoryid=wg.workcategoryid order by wg.workgalleryid desc");
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
    <br/><br/>
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
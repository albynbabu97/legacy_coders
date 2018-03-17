
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>IASO</title>
    <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
  
  


  </head>
  <body background="1.jpg">
  
   <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container" style="background-color: rgba(0, 0, 0, 0.5);">
        <a class="navbar-brand" href="/"><b>IASO</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
      <li class="nav-item active"><a class="nav-link" href="vault.php">VAULT</a></li>
            <li class="nav-item"><a class="nav-link" href="hospital/index.php">HOSPITAL</a></li>
            <li class="nav-item"><a class="nav-link" href="laboratory/index.php">LABORATORY</a></li>
            <li class="nav-item"><a class="nav-link" href="pharmacy/index.php">PHARMACY</a></li>
      <li class="nav-item"><a class="nav-link" href="bookdoc/index.php">BOOK DOC</a></li>
      <li class="nav-item"><a class="nav-link" href="myacc/index.php">ACCOUNT</a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">LOGOUT</a></li>
       
       
     
    

            
          </ul>
      
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="probootstrap_section"  style="background-image: url('downloads-bg.jpg'); opacity:0.8;"  data-stellar-background-ratio="0.5"  id="section-home">
     <div >
  
   <div style="display:inline-block;width:95%;background:rgb(255,255,255);text-align:left;box-shadow:0 0 15px black;width: 100%; opacity: 100%;">
            <div style="background:rgb(210,230,255);padding:10px; ">
               <h1 style="display:inline-block;color:rgb(120,0,200);">FILES</h1>
             <!--  <div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/share.png');background-size:cover;float:right;" onclick="document.getElementById('overlay').style.display='block';"></div>-->
               <!--<div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/remove.png');background-size:cover;float:right;"></div>-->
               <div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url(images/upload.png);background-size:cover;float:right;" onclick="window.open('');"></div>
              <!-- <div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/download.png');background-size:cover;float:right;"></div>-->
            </div>
            <hr>
            <div id="folder" style="height:400px;padding:1%;overflow-y:scroll;">
              <?php
                $dir = "../../../uploads";

                
                if (is_dir($dir)){
                   if ($dh = opendir($dir)){
                      while (($file = readdir($dh)) !== false){
                        
                       if(strpos($file, 'pdf')!=false ){
                      ?>

                    <a href="/uploads/<?php echo $file?>"  target="blank"> <div class="file_icon">
                      <img src="images\pdf.png" width="100">
                   <div style="padding:5px;text-align:center;font-weight:bold;"><strong> <?php  echo $file; ?></strong>
                    </div>
                    <hr>
                    </div></a>
               <?php
             }
               }
                      closedir($dh);
                    }
                  }
                ?>
            </div>
            <hr>
         </div>
      </div>

   
    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
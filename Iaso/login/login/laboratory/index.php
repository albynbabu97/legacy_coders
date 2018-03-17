<?php
session_start();
?>
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

    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container" style="background-color: rgba(0, 0, 0, 0.5);">
        <a class="navbar-brand" href="/"><b>IASO</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="../">HOME</a></li>
			<li class="nav-item"><a class="nav-link" href="msg.php">VAULT</a></li>
            <li class="nav-item"><a class="nav-link" href="../hospital/index.php">HOSPITAL</a></li>
            <li class="nav-item active"><a class="nav-link" href="index.php">LABORATORY</a></li>
            <li class="nav-item"><a class="nav-link" href="../pharmacy/index.php">PHARMACY</a></li>
			<li class="nav-item"><a class="nav-link" href="../bookdoc/index.php">BOOK DOC</a></li>
			<li class="nav-item"><a class="nav-link" href="../myacc/index.php">ACCOUNT</a></li>
			<li class="nav-item"><a class="nav-link" href="../../">LOGOUT</a></li>            
          </ul>
		  
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap_section"   style="background-image: ;" data-stellar-background-ratio="0.5" id="section-home" >
      <div class="overlay"></div>
      <div class="container">
       <div class="row mb-5">
		
		 <?php

					$conn = new mysqli("localhost", "root", "root","iaso");
					if ($conn->connect_error) {
						die("Connection failed");
					} 
					$idno=$_SESSION['idno'];
					$count=0;
					$results = mysqli_query($conn, "SELECT * FROM users	WHERE idno IN ('$idno')");

					/*while ($row = mysqli_fetch_array($results))
					{
					$place=$row['place'];
						
					}*/

					$result = mysqli_query($conn, "SELECT * FROM lab WHERE place IN ('kochi')");
					if($result == FALSE) 
					{ 
						die(mysql_error());
					}
					while ($row = mysqli_fetch_array($result))
					{
						if($count%2==0)
						{
						echo "<div class=\"col-md-4\">";
						}
						
						echo "<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
								
								<div class=\"media-body\">
								<h5 class=\"mb-3\">".$row['aname']."</h5>
								<p>".$row['mobileno']."</p>
								<p>".$row['email']."</p> 
								<p>".$row['addr']."</p> ";
								
						
						
						
						
					
						$regno=$row['regno'];
					echo "<br> <a href=\"profile/index.php?regno=$regno\"  role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">PROFILE</a>"; 
					echo "</div>
								</div>";
						if($count%2==0)
						{
						echo "</div>";
						}
						$count=$count+1;
						
					}

			?>
			
          </div>
        
      </div>
    
    

    <!-- END section -->


  
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>
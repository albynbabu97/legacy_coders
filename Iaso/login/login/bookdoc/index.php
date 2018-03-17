<?php
session_start();
include("dbconnection.php");
if(isset($_GET["docid"]))
{
  $_SESSION["appdocid"] = $_GET["docid"]; 
  $_SESSION["appdocname"] = $_GET["docname"];
  $_SESSION["appdocsptype"] = $_GET["sptype"];
  header("Location: appointmenttime.php");
}
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
            <li class="nav-item"><a class="nav-link" href="../index.php">HOSPITAL</a></li>
            <li class="nav-item"><a class="nav-link" href="../laboratory/index.php">LABORATORY</a></li>
            <li class="nav-item"><a class="nav-link" href="../pharmacy/index.php">PHARMACY</a></li>
      <li class="nav-item active"><a class="nav-link" href="index.php">BOOK DOC</a></li>
      <li class="nav-item"><a class="nav-link" href="../myacc/index.php">ACCOUNT</a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">LOGOUT</a></li>            
          </ul>
      
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap_section"   style="background-image: ;" data-stellar-background-ratio="0.5" id="section-home" align="center">
      <div class="overlay"></div>
      <div class="container">
       <div class="row mb-5">
        <div id="container">
  <div class="wrapper" align="center">
    <div id="content">
      <h1>Appointment </h1>
      <h2>Doctors Record</h2>
      <table summary="Summary Here" cellpadding="10" cellspacing="5" style="position:absolute;top:30%;left:25%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Specialist in</th>
            <th>Timings</th>
            <th>Appointment</th>
          </tr>
        </thead>
        <tbody>
          <?php
    
          $result = mysqli_query($con,"SELECT * FROM doctor");

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
    echo "<td> &nbsp;".$row['doctorname']."</td>";
    echo "<td> &nbsp;".$row['specialistin']."</td>";
  echo "<td>";
  $result1 = mysqli_query($con,"SELECT * FROM timings where docid='$row[docid]'");
  //time loops starts here
  while($row1 = mysqli_fetch_array($result1))
  {
  if ($row1['session']=="Morning")   
  {
  echo "&nbsp;". $row1['fromtime']." AM to ";
  echo $row1['totime'] ." AM <br>";
  }
  else
  {
  echo "&nbsp;". $row1['fromtime']." PM to ";
  echo $row1['totime'] ." PM <br>";
  }

  }
//time loop ends here

echo "</td>";
    echo "<td><a href='appointmenttime.php?docid=$row[docid]&docname=$row[doctorname]&sptype=$row[specialistin]'>Make an Appointment</a></td>";
  echo "</tr>";
  }
  ?></tbody>
      </table>
      
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
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="C-Resume a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
</style>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<body background="downloads-bg.jpg">
</body>
<div class="topnav">
  <a  href="../">HOME</a>
  <a class="active" href="#">HOSPITAL</a>
  <a href="../laboratory/index.php">LABORATORY</a>
  <a href="../pharmacy/index.php">PHARMACY</a>
  <a href="../dental/index.php">DENTAL</a>
    <a href="../myacc/index.php">My ACCOUNT</a>
   <a href="../../">LOGOUT</a>
  <div class="search-container">
    <form action="../place.php" method="post">
      <input type="text" placeholder="Area" name="place">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
   
</div>
<br>		
<br>
<div class="w3-about" id="service">
	<div class="container">
		<div class="w3-about-head">
		
		</div>
		<div class="w3-about-grids">
		<div class=" w3-about-grids1">
<h3>Search Results</h3>
<form action="#" method="post" >
  <select name="filter">
  <option value="rate">Rating</option>
  <option value="parking">Park</option>
  <option value="expence">Expense</option>
  <input type="submit" value="FILTER" style="height:40px">
  </select>
</form>
 <hr>
<?php

$conn = new mysqli("localhost", "mits", "mits","db");
if ($conn->connect_error) {
    die("Connection failed");
} 
$mobile=$_SESSION['mobile'];

$results = mysqli_query($conn, "SELECT * FROM userl
    WHERE mobileno IN ('$mobile')");

while ($row = mysqli_fetch_array($results))
{
$place=$row['place'];
	
}
$filter=$_POST['filter'];
$result = mysqli_query($conn, "SELECT * FROM hospital
    WHERE place IN ('$place') order by $filter DESC");

while ($row = mysqli_fetch_array($result))
{
	echo "<h3>".$row['aname']."</h3>";
	echo "  ";
	echo " <br> Reg No: ".$row['regno'];
	echo "<br>Address: ".$row['addr'];
	echo " ";
	echo "  <br>Phone Number: ".$row['mobileno'];
	echo "<br>Email: ".$row['email'];
	echo "<br>Place: ".$row['place'];
	echo "<br> Rating: ".$row['rate'];
	echo "  Parking: ".$row['parking'];
	$regno=$row['regno'];
	
	echo "<br>";
		echo "<a href=\"../profile/index.php?regno=$regno\">PROFILE</a>";
	echo "<br><hr>";
}

mysqli_close($conn);
exit;
?>
	</div>
</div>
</div>
</body>
</html>

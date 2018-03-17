<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>C-Resume a personal Category Bootstrap responsive Website Template | Home :: w3layouts</title>
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

</head>
<body>
<?php
session_start();
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 
$regno=$_GET['regno'];


$result = mysqli_query($conn, "SELECT * FROM hospital
    WHERE regno IN ('$regno')");

while ($row = mysqli_fetch_array($result))
{
	
	$aname= $row['aname'];
	
	$regno= $row['regno'];
	$addr= $row['addr'];
	$rate= $row['rate'];

	$mobileno= $row['mobileno'];
	$email= $row['email'];
	$place= $row['place'];
	
}

mysqli_close($conn);
?>
<!-- banner -->
	<div class="w3-banner-top" id="home">
	<div class="agileinfo-dot">
			<div class="w3layouts_menu">
				<nav class="cd-stretchy-nav edit-content">
					<a class="cd-nav-trigger" href="#0"> Menu <span aria-hidden="true"></span> </a>
					<ul>
					<li><a href="#home" class="scroll"><span>About</span></a></li>
						<li><a href="#service" class="scroll"><span>Services</span></a></li>
						<li><a href="#rate" class="scroll"><span>Rating</span></a></li> 
						<li><a href="../" ><span>Back</span></a></li>
					</ul> 
					<span aria-hidden="true" class="stretchy-nav-bg"></span>
				</nav> 
			</div>

		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
					<img src="images/ab7.jpg" alt="img">
					<h3 class="test"><?php echo $aname; ?></h3>
					<p class="test" >Hospital</p>
				</div>
			</div>
			<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
				<h3>Profile</h3>
				
			</div>
				<div class=" w3-right-addres-1">
				<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>Register Number</b></li>
										<li><span>:</span><?php echo $regno; ?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>PHONE</b></li>
										<li><span>:</span><?php echo $mobileno; ?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>ADDRESS</b></li>
										<li><span>:</span><?php echo $addr; ?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>E-MAIL</b></li>
										<li><span>:</span><a href="mailto:example@mail.com"><?php echo $email; ?></a></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>PLACE</b></li>
										<li><span>:</span><a href="#"><?php echo $place; ?></a></li>
									</ul>
								</li>
							</ul> 

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>

	</div>
<!-- banner -->
<!-- /about -->

<div class="w3-about" id="service">
	<div class="container">
		<div class="w3-about-head">
			<h3>Services</h3>
		</div>
		<div class="w3-about-grids">
		<div class=" w3-about-grids1">
			
				<div >
					<h3>Available Services</h3>
					<?php
						$cs=0;
						$cu=0;
						$conn = new mysqli("localhost", "root", "root","iaso");
						if ($conn->connect_error) {
							die("Connection failed");
						} 
						
						
						

						$result = mysqli_query($conn, "SELECT * FROM serve
							WHERE aname IN ('$aname')");

						while ($row = mysqli_fetch_array($result))
						{	
						$sname = $row['sname'];
						$rate = $row['rate'];
						$types = $row['types'];
						$aname =  $row['aname'];
						$dname =  $row['dname'];
						$ddegree =  $row['ddegree'];
						echo "<h4>".$sname."</h4>"."<br>".$dname." , ".$ddegree."<br>"."Rate : ".$rate;
					
							echo "<br><a href=\"../../book/index.php?sname=$sname&aname=$aname\">BOOK</a>";
						echo "<br><hr>";
						}
						mysqli_close($conn);
					?>
				</div>
				
	</div>
</div>
</div>
<!-- //about  -->
<!--/ education -->
	<div class="w3-edu-top" id="rate">
	<div class="container">
		<div class="w3-edu-grids">
			<div class="col-md-6 w3-edu-grid-left">
				<div class="w3-edu-grid-header">
				<h3>RATE</h3>
				<br>
				</div>
				<div >
			<form action="../feedback/index.php" method="post">
			<input value="<?php echo $regno ?>" name="regno"> <br> <br>
			<p style="color:white;">RATE</p> 
			<select name="rate" >
			<option value=""></option>
  <option value="1">1 star</option>
  <option value="2">2 star</option>
  <option value="3">3 star</option>
  <option value="4">4 star</option>
  <option value="5">5 star</option>
    </select>
	
			 <br><br>
			<textarea cols="55" rows="4" type="text" name="msg" value="Message"></textarea>
							
<br><br>
			<input type="submit" value="submit">
			</form>
			</div>
			
			
			<div class="clearfix"></div>		
		</div>
		<div class="clearfix"></div>	
	</div>
	</div>
	</div>
	
	<div class="w3-edu-top" id="rate">
	<div class="container">
		<div class="w3-edu-grids">
			<div class="col-md-6 w3-edu-grid-left">
				<div class="w3-edu-grid-header">
				<h3>FEEDBACKS</h3>
				<br>
				</div
			<div class="clearfix"></div>
			

			<div class="clearfix"></div>
			<div class="col-md-4 w3-edu-info1">
			<?php
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 
$mobileno = $_SESSION['mobile'];

$cs=0;
$cu=0;
$result = mysqli_query($conn, "SELECT * FROM feedback
    WHERE regno IN ('$regno')");

while ($row = mysqli_fetch_array($result))
{
	if($row['resolve']=='y')
						{
							$cs=$cs+1;
						}
						if($row['resolve']=='n')
						{
							$cu=$cu+1;
						}
	
	$msg= $row['msg'];
		$mobileno= $row['mobileno'];

	$resultss = mysqli_query($conn, "SELECT * FROM userp
    WHERE mobileno IN ('$mobileno')");
	while ($rows = mysqli_fetch_array($resultss))
{
	$fname = $rows['fname'];
}
	
	$rate= $row['rate'];
	if($row['resolve']=='y'){
	echo "<hr><h4>".$fname."<br>SOLVED<br>Rate: ".$rate."<br>".$msg."</h4><hr>";

	}
	else{
echo "<hr><h4>".$fname."<br><br>Rate: ".$rate."<br>".$msg."</h4><hr>";
	}
	

	
}
echo "<br><hr><h4>Solved : ".$cs;
mysqli_close($conn);
?>
			</div>
			
			<div class="clearfix"></div>		
		</div>
		<div class="clearfix"></div>	
	</div>
	</div>
	</div>
<!-- //education -->
<!-- skills -->

<!-- //skills -->

<!-- main-content -->

	
<!-- //footer -->
<script src="js/bars.js"></script>
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu-js --> 	
	<script src="js/modernizr.js"></script>	
	<script src="js/menu.js"></script>
<!-- //menu-js --> 	


<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>


</body>
</html>
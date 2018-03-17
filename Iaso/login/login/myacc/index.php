<?php
session_start();
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 
$idno=$_SESSION['idno'];


$result = mysqli_query($conn, "SELECT * FROM users WHERE idno IN ('$idno')");

while ($row = mysqli_fetch_array($result))
{	
$fname = $row['fname'];
$lname = $row['lname'];
$mobileno = $row['mobileno'];
$mail =  $row['email'];
$idno =  $row['idno'];
}
$results = mysqli_query($conn, "SELECT * FROM users WHERE idno IN ('$idno')");

/*while ($row = mysqli_fetch_array($results))
{
$place=  $row['place'];

}*/
mysqli_close($conn);
?>
<html lang="en">
<!-- Head -->
<head>
<title>IASO</title>
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
<!-- banner -->
	<div class="w3-banner-top">
	<div class="agileinfo-dot">
			<div class="w3layouts_menu">
				<nav class="cd-stretchy-nav edit-content">
					<a class="cd-nav-trigger" href="#0"> Menu <span aria-hidden="true"></span> </a>
					<ul>
						<li><a href="../" ><span>Home</span></a></li>
				
					</ul> 
					<span aria-hidden="true" class="stretchy-nav-bg"></span>
				</nav> 
			</div>

		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
					<img src="images/ab7.jpg" alt="img">
					<h3 class="test"><?php echo $fname."&nbsp; <br>".$lname; ?></h3>
					<p class="test" >MEMBER</p>
				</div>
			</div>
			<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
				<h3>My Account</h3>
				</div>
				<div class=" w3-right-addres-1">
				<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>FIRST NAME</b></li>
										<li><span>:</span><?php echo $fname; ?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>LAST NAME</b></li>
										<li><span>:</span><?php echo $lname; ?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>ID NUMBER</b></li>
										<li><span>:</span><?php echo $idno; ?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>E-MAIL</b></li>
										<li><span>:</span><a href="mailto:example@mail.com"> <?php echo $mail; ?></a></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>MOBILE</b></li>
										<li><span>:</span><?php echo $mobileno; ?></li>
									</ul>
								</li>
							</ul> 

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		

	</div>
<!-- banner -->
<!-- /about -->

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
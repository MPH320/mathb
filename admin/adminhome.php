<?php
    session_start();

		if(!isset($_SESSION['adminuser'])){
			echo "<script> window.location='http://localhost/nationalmathbee/signin/adminsignin.html'; </script>";
		}
		
		
		
?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
		<title>National Math Bee</title>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_styles.css" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_layout_large.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="../css/screen_layout_small.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="../css/screen_layout_medium.css" />
	</head>

	<body class="background">

	<div class="page">
		<header>
			<a href="adminhome.php" class="logo logo-a" ></a>                    
		</header>

		<div class="page_content">

			<div class="pageWrapper">
				<br /><h1>Welcome</h1>
			</div>

		</div>

		<nav>
			<a href="adminhome.php" id="navHome" class="navHome selected">Home</a>
			<a href="adminstats.php" id="navStats" class="navStats">Stats</a>
			<a href="../admin/adminlogout.php" id="navSignIn" class="navSignIn">Sign Out</a>
		</nav>

		<div class="social">
			<a href="https://twitter.com/NationalMathBee" class="social_twitter" target="_blank">Twitter</a>
			<a href="http://www.facebook.com/pages/National-Math-Bee/191250144339108" class="social_facebook" target="_blank">Facebook</a>
			<a href="https://plus.google.com/111804013780922297750" rel="publisher" class="social_google_plus" target="_blank">Google+</a>
			<a href="http://www.pinterest.com/nationalmathbee" class="social_pinterest" target="_blank">Pinterest</a>
			<a href="http://www.youtube.com/NationalMathBee" class="social_youtube" target="_blank">YouTube</a>
		</div>

		<footer> 
			© <span id="spDates">2017-2018</span>  National Math Bee
		</footer>
	</div>
		

	</body>
</html>



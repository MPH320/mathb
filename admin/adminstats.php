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
		<a href="../admin/adminhome.php" class="logo logo-a"></a>                    
		</header>

		<div class="page_content">

			<div class="pageWrapper">
				<br /><h1>Gaming Statistics</h1>
				<p>Work in progress...</p>

				<h3 style="margin-bottom:5px;">Number of Teachers/Parents Participating:</h3>
				<span id="ContentPlaceHolder1_lblNumTeachers" style="color:#066BA8;font-size:36px;font-weight:bold;">834</span><br /><br />

				<h3 style="margin-bottom:5px;">Number of Students Participating</h3>
				<span id="ContentPlaceHolder1_lblNumStudents" style="color:#066BA8;font-size:36px;font-weight:bold;">6994</span><br /><br />

				<h3 style="margin-bottom:5px;">Number of Students Who Have Played At Least One Inning</h3>
				<span id="ContentPlaceHolder1_lblNumStudentsWithInnings" style="color:#066BA8;font-size:36px;font-weight:bold;">1411</span><br/><br/>

				<h3 style="margin-bottom:5px;">Number of Innings Played</h3>
				<span id="ContentPlaceHolder1_lblNumInnings" style="color:#066BA8;font-size:36px;font-weight:bold;">172179</span><br /><br />

				<h3 style="margin-bottom:5px;">Number of States Participating</h3>
				<span id="ContentPlaceHolder1_lblNumStates" style="color:#066BA8;font-size:36px;font-weight:bold;">45</span><br /><br />

				<h3 style="margin-bottom:5px;">Number of Participating Countries</h3>
				<span id="ContentPlaceHolder1_lblNumCountries" style="color:#066BA8;font-size:36px;font-weight:bold;">21</span><br /><br />

				<h3 style="margin-bottom:5px;">Participating States</h3>
				<div id="ContentPlaceHolder1_divStates" style="font-size:18px;font-weight:bold;color:#066BA8">AK<br/>AL<br/>AR<br/>AZ<br/>CA<br/>CO<br/>CT<br/>DC<br/>DE<br/>FL<br/>GA<br/>IA<br/>IL<br/>IN<br/>KS<br/>KY<br/>LA<br/>MA<br/>MD<br/>ME<br/>MI<br/>MN<br/>MO<br/>MS<br/>NC<br/>ND<br/>NE<br/>NH<br/>NJ<br/>NM<br/>NY<br/>OH<br/>OR<br/>PA<br/>RI<br/>SC<br/>TN<br/>TX<br/>UT<br/>VA<br/>VT<br/>WA<br/>WI<br/>WV<br/>WY<br/></div><br /><br />

				<h3 style="margin-bottom:5px;">Participating Countries</h3>
				<div id="ContentPlaceHolder1_divCountries" style="font-size:18px;font-weight:bold;color:#066BA8">Australia<br/>Canada<br/>Egypt<br/>Guatemala<br/>Hong Kong<br/>India<br/>Indonesia<br/>Iran, Islamic Republic of<br/>Japan<br/>Kuwait<br/>Lithuania<br/>Malaysia<br/>Nicaragua<br/>Nigeria<br/>Pakistan<br/>Senegal<br/>Sierra Leone<br/>United Arab Emirates<br/>United Kingdom<br/>United States<br/>Viet Nam<br/></div><br /><br />
			</div>

		</div>



		<nav>
			<a href="adminhome.php" id="navHome" class="navHome">Home</a>
			<a href="adminstats.php" id="navStats" class="navStats selected">Stats</a>
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



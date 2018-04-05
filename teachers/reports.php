<?php
    session_start();

		if(!isset($_SESSION['teacheruser'])){
			echo "<script> window.location='http://localhost/nationalmathbee/signin/default.html'; </script>";
		}
		
?>

<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
		<title>National Math Bee</title>
		<meta name="description" />
		<meta name="keywords" />
		<meta name="author" />
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_styles.css" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_layout_large.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="../css/screen_layout_small.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="../css/screen_layout_medium.css" />
	</head>

	<body class="background">
		<?php include "reportshelper.php"; ?>

	<div class="page">
		<header id="hdrMain">
			<a href="../index.html" class="logo"></a>                    
		</header>




		<div class="page_content">

			<div style="border-top:1px solid #333;">
				<div class="pageWrapper">
					<div class="navTeacherMenu">
						<a href="teacher.php" id="ContentPlaceHolder1_navTeacherTab" class="navTeacher">Teacher</a>
						<a href="classrooms.php" id="ContentPlaceHolder1_navClassroomTab" class="navClassroom">Classroom</a>
						<a href="students.php" id="ContentPlaceHolder1_navStudentsTab" class="navStudents">Students</a>
						<a href="reports.php" class="navReports currentSection">Reports</a>
						<div class="clear-fix"></div>
					</div>
				</div>
			</div>

			<div class="pageWrapper">

				<div id="ContentPlaceHolder1_UpdatePanelMaster">

					<div>
						<div style="width:250px;float:left;">
							<h1 id="ContentPlaceHolder1_h1List">Batting Averages</h1>
						</div>
						<div id="ContentPlaceHolder1_divClassroomFilter" style="min-width:350px;float:left;">
							<span id="ContentPlaceHolder1_lblShowClassroom" style="color:Gray;font-size:Medium;">For Classroom:</span>
							<select name="ctl00$ContentPlaceHolder1$ddlClassroomFilter" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlClassroomFilter\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder1_ddlClassroomFilter" style="font-size:Large;height:40px;width:280px;">
								<option selected="selected" value="All Classrooms">All Classrooms</option>
							</select>
						</div>
						<div class="clear-fix"></div>   
						<br />
					</div>

					<div>
						<table  cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_gvStudents" style="width:100%;border-collapse:collapse;">
							<?php 
									generateReport();
							?>
						</table>
					</div>
				</div>
			</div>
		</div>

		<nav>
			<a href="../index.html" id="navHome" class="navHome">Home</a>
			<a href="../tournament/default.html" id="navTournament" class="navTournament">Tournament</a>
			<a href="../batterup/batterup.html" id="navBatterUp" class="navBatterUp">BatterUp</a>
			<a href="../contact/default.html" id="navContact" class="navContact">Contact Us</a>
			<a href="signout.php" id="navSignIn" class="navSignIn" >Sign Out</a>
			<a href="teacher.php" id="navTeachers" class="navTeachers selected">Teacher</a>
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

		<script src="../scripts/jquery-3.3.1.min.js"></script>
		<script src="../scripts/reports.js"></script>
	</body>
</html>



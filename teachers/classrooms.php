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
		<?php include "classroomhelper.php"; ?>

		<div class="page">
			<header id="hdrMain">
				<a href="../index.html" class="logo"></a>                    
			</header>

		<div class="page_content">

			<div class="adminBorder">
				<div class="pageWrapper">
					<div class="navTeacherMenu">
						<a href="teacher.php" class="navTeacher">Teacher</a>
						<a href="classrooms.php" class="navClassroom currentSection">Classroom</a>
						<a href="students.php" class="navStudents">Students</a>
						<a href="reports.php" class="navReports">Reports</a>
						<div class="clear-fix"></div>
					</div>
				</div>
			</div>

			<div class="pageWrapper">
				<br /><div id="ContentPlaceHolder1_UpdatePanelMaster">
					<h1 id="ContentPlaceHolder1_h1Current"></h1>
					
					<div id="ContentPlaceHolder1_divMessage">
						<span id="ContentPlaceHolder1_lblClassroomMessage" style="color:#333333;font-size:Medium;">Create Classrooms to organize your students.  Once you've added a classroom, click on the Students tab to add students. </span><br>
					</div>

					<div>
						<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_gvClassrooms" style="width:100%;border-collapse:collapse;">
							<?php 
									generateClassroom();
									generateClassroom();
										?>
						</table>
					</div><br /><br />


					<div id="ContentPlaceHolder1_divAddClassroom">
						<h1>Add a Classroom</h1>
						<div style="background-color:#eee;margin-top:0px;padding:10px;min-width:320px;">
							<div style="float:left;width:33%;min-width:320px;">
								<span id="ContentPlaceHolder1_lblClassroomName" style="color:Gray;font-size:Medium;">Classroom Name</span><br />
								<input name="ctl00$ContentPlaceHolder1$txtClassroomName" type="text" id="ContentPlaceHolder1_txtClassroomName" style="color:Gray;font-size:Medium;height:30px;width:310px;" />
							</div>
							<div style="float:left;width:33%;min-width:320px;">
								<span id="ContentPlaceHolder1_lblClassroomDescription" style="color:Gray;font-size:Medium;">Description (Optional)</span><br />
								<input name="ctl00$ContentPlaceHolder1$txtClassroomDescription" type="text" id="ContentPlaceHolder1_txtClassroomDescription" style="color:Gray;font-size:Medium;height:30px;width:310px;" />
							</div>
							<div style="float:left;width:20%;min-width:250px;">
								<span id="ContentPlaceHolder1_lbl" style="color:Gray;font-size:Medium;">Save Classroom</span><br />
								<input onclick="save()" type="submit" name="ctl00$ContentPlaceHolder1$btnSaveClassroom" value="Save" id="ContentPlaceHolder1_btnSaveClassroom" style="height:34px;width:120px;" />
							</div>
							<div class="clear-fix"></div>
							<span id="ContentPlaceHolder1_lblAddClassroomMessage" style="color:#990000;font-size:Medium;"></span>
						</div>
					</div><br /><br /><br /><br /><br />

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
		<script src="../scripts/classrooms.js"></script>
	</body>
</html>



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
							<a href="students.php" id="ContentPlaceHolder1_navStudentsTab" class="navStudents currentSection">Students</a>
							<a href="reports.php" class="navReports">Reports</a>
							<div class="clear-fix"></div>
						</div>
					</div>
				</div>

				<div class="pageWrapper"><br>
					<div id="ContentPlaceHolder1_UpdatePanelMaster">
						
						
						<div style="display:none;" id="ContentPlaceHolder1_divClassroomMessage">
							<h1>Oops!</h1>
							<span id="ContentPlaceHolder1_Label20" style="color:Gray;font-size:Medium;">Before you can add students, you must first create a classroom.  Click on the Classroom tab to create a classroom, then return here to add students.</span><br><br>
						</div>


						<div id="ContentPlaceHolder1_divAddStudents" style="display:none;">
							<h1 id="ContentPlaceHolder1_h1Add" >Add A Student</h1>
							<div style="background-color:#eee;margin-top:0px;padding:10px;min-width:320px;">
								<div style="float:left;width:100%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblClassrooms" style="color:Gray;font-size:Medium;">Assign Student to this Classroom</span><br>
									<select name="ctl00$ContentPlaceHolder1$ddlClassrooms" id="ContentPlaceHolder1_ddlClassrooms" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:40px;width:280px;">
										<option selected="selected" value="Choose A Classroom">Choose A Classroom</option>
										<option value="2126">testClass</option>
									</select><br><br>
									<span id="ContentPlaceHolder1_Label2" style="color:Gray;font-size:Medium;">Names will not be displayed on the website.</span><br><br>
								</div>

								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblFName" style="color:Gray;font-size:Medium;">First Name</span><br>
									<input name="ctl00$ContentPlaceHolder1$txtFName" type="text" id="ContentPlaceHolder1_txtFName" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:30px;width:280px;">
									<br><br>
								</div>
								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblMName" style="color:Gray;font-size:Medium;">Middle Name (Optional)</span>\<br>
									<input name="ctl00$ContentPlaceHolder1$txtMName" type="text" id="ContentPlaceHolder1_txtMName" style="color:Gray;font-size:Medium;height:30px;width:280px;"><br><br>
								</div>
								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblLName" style="color:Gray;font-size:Medium;">Last Name</span><br>
									<input name="ctl00$ContentPlaceHolder1$txtLName" type="text" id="ContentPlaceHolder1_txtLName" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:30px;width:280px;">
									<br><br>
								</div>
								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblUsername" style="color:Gray;font-size:Medium;">Sign In Username</span><br>
									<input name="ctl00$ContentPlaceHolder1$txtUsername" type="text" id="ContentPlaceHolder1_txtUsername" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:30px;width:280px;">
									<br><br>
								</div>
								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblPassword" style="color:Gray;font-size:Medium;">Sign In Password</span><br>
									<input name="ctl00$ContentPlaceHolder1$txtPassword" type="password" id="ContentPlaceHolder1_txtPassword" value="" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:30px;width:280px;">
									<br><br>
								</div>
								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblPasswordRetype" style="color:Gray;font-size:Medium;">Retype Password</span><br>
									<input name="ctl00$ContentPlaceHolder1$txtPasswordRetype" type="password" id="ContentPlaceHolder1_txtPasswordRetype" value="" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:30px;width:280px;"><br><br>
								</div>
								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblGrade" style="color:Gray;font-size:Medium;">Grade</span><br>
									<select name="ctl00$ContentPlaceHolder1$ddlGrade" id="ContentPlaceHolder1_ddlGrade" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:40px;width:280px;">
										<option selected="selected" value="Choose A Grade">Choose A Grade</option>
										<option value="1">First</option>
										<option value="2">Second</option>
										<option value="3">Third</option>
										<option value="4">Fourth</option>
										<option value="5">Fifth</option>
										<option value="6">Sixth</option>
									</select>
									<br><br>
								</div>

								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblGender" style="color:Gray;font-size:Medium;">Gender</span><br>
									<select name="ctl00$ContentPlaceHolder1$ddlGender" id="ContentPlaceHolder1_ddlGender" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:40px;width:280px;" >
										<option selected="selected" value="Choose A Gender">Choose A Gender</option>
										<option value="Female">Female</option>
										<option value="Male">Male</option>
									</select><br><br>
								</div>

								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblRace" style="color:Gray;font-size:Medium;">Race</span><br>
									<select name="ctl00$ContentPlaceHolder1$ddlRace" id="ContentPlaceHolder1_ddlRace" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:40px;width:280px;" >
										<option selected="selected" value="Choose A Race">Choose A Race</option>
										<option value="African-American">African-American</option>
										<option value="Asian">Asian</option>
										<option value="Caucasian">Caucasian</option>
										<option value="Hispanic">Hispanic</option>
										<option value="Native American">Native American</option>
										<option value="Other">Other</option>
									</select>
									<br><br>
								</div>

								<div style="float:left;width:33%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblBirthday" style="color:Gray;font-size:Medium;">Birthday (ex. 12/31/2004)</span><br>
									<input name="ctl00$ContentPlaceHolder1$txtBirthday" type="text" id="ContentPlaceHolder1_txtBirthday" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:30px;width:280px;">
									<br><br>
								</div>

								<div style="float:left;width:33%;min-width:300px;height:60px;">            
									<div style="margin-top:10px;">
										<input type="image" name="ctl00$ContentPlaceHolder1$btnSaveStudent" id="ContentPlaceHolder1_btnSaveStudent" onmouseover="this.src='../images/btn_SaveOver.png'" onmouseout="this.src='../images/btn_SaveUp.png'" src="../images/btn_SaveUp.png" onclick="saveStudent()">
									</div>
								</div>

								<div class="clear-fix"></div>
								<span id="ContentPlaceHolder1_lblSaveStudentError" style="color:#990000;font-size:Medium;"></span><br>
								<span id="ContentPlaceHolder1_lblAddClassroomMessage" style="color:#990000;font-size:Medium;"></span>
							</div><br>
							<input type="image" name="ctl00$ContentPlaceHolder1$btnDone" id="ContentPlaceHolder1_btnDone" onmouseover="this.src='../images/btn_DoneOver.png'" onmouseout="this.src='../images/btn_DoneUp.png'" src="../images/btn_DoneUp.png" onclick="done()">
						</div>
						
						<div id="ContentPlaceHolder1_divAddMessage" style="display:none;" >
							<span id="ContentPlaceHolder1_lblAddMessage" style="color:Gray;font-size:Medium;"></span><br><br>
						</div>
						<input   type="image" name="ctl00$ContentPlaceHolder1$btnAdd" id="ContentPlaceHolder1_btnAdd" onmouseover="this.src='../images/btn_AddOver.png'" onmouseout="this.src='../images/btn_AddUp.png'" src="../images/btn_AddUp.png" onclick="add()"><br><br>

						<div id="ContentPlaceHolder1_divStudents">
							<div style="width:200px;float:left;">
								<h1 id="ContentPlaceHolder1_h1List">Students</h1>
							</div>
							<div style="min-width:350px;float:left;">
								<span id="ContentPlaceHolder1_lblShowClassroom" style="color:Gray;font-size:Medium;">Show Classroom:</span>
								<select name="ctl00$ContentPlaceHolder1$ddlClassroomFilter" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlClassroomFilter\',\'\')', 0)" id="ContentPlaceHolder1_ddlClassroomFilter" style="font-size:Large;height:40px;width:280px;">
									<option selected="selected" value="All Classrooms">All Classrooms</option>
									<option value="Unassigned">Unassigned</option>
									<option value="testClass">testClass</option>
								</select>
							</div>
							<div class="clear-fix"></div><br>

							<div>
								<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_gvStudents" style="width:100%;border-collapse:collapse;">
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			<nav>
				<a href="../index.html" id="navHome" class="navHome">Home</a>
				<a href="../tournament/default.html" id="navTournament" class="navTournament">Tournament</a>
				<a href="../batterup/batterup.html" id="navBatterUp" class="navBatterUp">BatterUp</a>
				<a href="../contact/default.html" id="navContact" class="navContact">Contact Us</a>
				<a  href="signout.php" id="navSignIn" class="navSignIn">Sign Out</a>
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
			
			<script src="../scripts/jquery-3.3.1.min.js"></script>
			<script src="../scripts/students.js"></script>
			<script src="../scripts/studentshelper.js"></script>
		</div>
	</body>
</html>



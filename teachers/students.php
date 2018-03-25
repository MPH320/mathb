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
						
						
						<div id="ContentPlaceHolder1_divClassroomMessage">
							<h1>Oops!</h1>
							<span id="ContentPlaceHolder1_Label20" style="color:Gray;font-size:Medium;">Before you can add students, you must first create a classroom.  Click on the Classroom tab to create a classroom, then return here to add students.</span><br><br>
						</div>


						<div id="ContentPlaceHolder1_divAddStudents" style="display:none">
							<h1 id="ContentPlaceHolder1_h1Add" >Add A Student</h1>
							<div style="background-color:#eee;margin-top:0px;padding:10px;min-width:320px;">
								<div style="float:left;width:100%;min-width:300px;">
									<span id="ContentPlaceHolder1_lblClassrooms" style="color:Gray;font-size:Medium;">Assign Student to this Classroom</span><br>
									<select name="ctl00$ContentPlaceHolder1$ddlClassrooms" id="ContentPlaceHolder1_ddlClassrooms" style="color:Black;background-color:#FFFFFF;border-style:Solid;font-size:Medium;height:40px;width:280px;">
										<option selected="selected" value="Choose A Classroom">Choose A Classroom</option>
										<option value="2126">myclass</option>
										<option value="2127">class</option>
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
						<input style="display:none;"  type="image" name="ctl00$ContentPlaceHolder1$btnAdd" id="ContentPlaceHolder1_btnAdd" onmouseover="this.src='../images/btn_AddOver.png'" onmouseout="this.src='../images/btn_AddUp.png'" src="../images/btn_AddUp.png" onclick="add()"><br><br>

						<div id="ContentPlaceHolder1_divStudents">
							<div style="width:200px;float:left;">
								<h1 id="ContentPlaceHolder1_h1List">Students</h1>
							</div>
							<div style="min-width:350px;float:left;">
								<span id="ContentPlaceHolder1_lblShowClassroom" style="color:Gray;font-size:Medium;">Show Classroom:</span>
								<select name="ctl00$ContentPlaceHolder1$ddlClassroomFilter" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlClassroomFilter\',\'\')', 0)" id="ContentPlaceHolder1_ddlClassroomFilter" style="font-size:Large;height:40px;width:280px;">
									<option selected="selected" value="All Classrooms">All Classrooms</option>
									<option value="Unassigned">Unassigned</option>
								</select>
							</div>
							<div class="clear-fix"></div><br>

							<div>
								<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_gvStudents" style="width:100%;border-collapse:collapse;display:none;">
									<tbody>
										<tr>
											<td>
												<div class="editStudentRow">
													<div class="editStudentIcons">
														<img src="../images/icon_student.png" alt="Student" class="editStudentIcon">
														<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$btnEditStudent" id="ContentPlaceHolder1_gvStudents_btnEditStudent_0" title="Edit Student" class="editStudent" src="../images/invEdit.png">
													</div>
													<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">
														<span id="ContentPlaceHolder1_gvStudents_Label1_0" style="color:Silver;">Player#</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label21_0" style="font-size:Medium;">16295</span>
													</div>

													<div style="width:50px;float:left;height:50px;position:relative;overflow:hidden;">             
														<span id="ContentPlaceHolder1_gvStudents_Label8_0" style="color:Silver;">Grade</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label9_0" style="font-size:Medium;">2</span>
													</div>

													<div style="width:160px;float:left;height:50px;position:relative;overflow:hidden;">    
														<span id="ContentPlaceHolder1_gvStudents_Label3_0" style="color:Silver;">Name</span><br>
														<span id="ContentPlaceHolder1_gvStudents_lblStudentFullName_0" style="font-size:Medium;">dgfsdsfg, sdf sdfgg</span>
													</div>

													<div style="width:100px;float:left;height:50px;position:relative;overflow:hidden;">
														<span id="ContentPlaceHolder1_gvStudents_Label4_0" style="color:Silver;">Username</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label5_0" title="gfdssgf" style="font-size:Medium;">gfdssgf</span>
													</div>

													<div style="width:100px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label6_0" style="color:Silver;">Password</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label7_0" title="password" style="font-size:Medium;">password</span>
													</div>

													<div style="width:70px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label10_0" style="color:Silver;">Gender</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label11_0" style="font-size:Medium;">Female</span>
													</div>

													<div style="width:100px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label14_0" style="color:Silver;">Birthday</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label15_0" style="font-size:Medium;">3/20/1985</span>
													</div>

													<div style="width:180px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label12_0" style="color:Silver;">Race</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label13_0" style="font-size:Medium;">Asian</span>
													</div>

													<div class="clear-fix"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><br>
												<div class="editStudentRow">
													<div id="ContentPlaceHolder1_gvStudents_divEditForm_1">

														<div class="editModeStudentIcons">
															<img src="../images/icon_student.png" alt="Student" class="editModeStudentIcon">
															<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$btnEditStudent" id="ContentPlaceHolder1_gvStudents_btnEditStudent_1" title="Update Student" class="editModeStudent" src="../images/invSave.png">
															<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$btnDeleteStudent" id="ContentPlaceHolder1_gvStudents_btnDeleteStudent_1" title="Delete Student" class="deleteStudent" src="../images/iconDelete25.png">
															<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$btnCancelStudent" id="ContentPlaceHolder1_gvStudents_btnCancelStudent_1" title="Cancel" class="cancelStudent" src="../images/iconCancel.png">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">            
															<span id="ContentPlaceHolder1_gvStudents_Label8_1" style="color:Silver;">Grade</span><br>      
															<select name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$ddlGrade" id="ContentPlaceHolder1_gvStudents_ddlGrade_1" style="font-size:Medium;height:35px;width:90px;">
																<option value="1">First</option>
																<option selected="selected" value="2">Second</option>
																<option value="3">Third</option>
																<option value="4">Fourth</option>
																<option value="5">Fifth</option>
																<option value="6">Sixth</option>
															</select>
															<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$hfStudentGrade" id="ContentPlaceHolder1_gvStudents_hfStudentGrade_1" value="2">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">    
															<span id="ContentPlaceHolder1_gvStudents_Label3_1" style="color:Silver;">First Name</span><br>
															<input name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$txtEditStudentFName" type="text" value="m" id="ContentPlaceHolder1_gvStudents_txtEditStudentFName_1" style="font-size:Medium;height:30px;width:100px;">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">    
															<span id="ContentPlaceHolder1_gvStudents_Label16_1" style="color:Silver;">Middle Name</span><br>
															<input name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$txtEditStudentMName" type="text" id="ContentPlaceHolder1_gvStudents_txtEditStudentMName_1" style="font-size:Medium;height:30px;width:100px;">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">    
															<span id="ContentPlaceHolder1_gvStudents_Label17_1" style="color:Silver;">Last Name</span><br>
															<input name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$txtEditStudentLName" type="text" value="p" id="ContentPlaceHolder1_gvStudents_txtEditStudentLName_1" style="font-size:Medium;height:30px;width:100px;">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;">
															<span id="ContentPlaceHolder1_gvStudents_Label4_1" style="color:Silver;">Username</span><br>
															<input name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$txtEditStudentUsername" type="text" value="mp320" id="ContentPlaceHolder1_gvStudents_txtEditStudentUsername_1" style="font-size:Medium;height:30px;width:100px;">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;">
															<span id="ContentPlaceHolder1_gvStudents_Label6_1" style="color:Silver;">Password</span><br>
															<input name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$txtEditStudentPassword" type="text" value="password" id="ContentPlaceHolder1_gvStudents_txtEditStudentPassword_1" style="font-size:Medium;height:30px;width:100px;">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;">
															<span id="ContentPlaceHolder1_gvStudents_Label10_1" style="color:Silver;">Gender</span><br>
															<select name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$ddlGender" id="ContentPlaceHolder1_gvStudents_ddlGender_1" style="font-size:Medium;height:35px;width:100px;">
																<option value="Female">Female</option>
																<option selected="selected" value="Male">Male</option>
															</select>
															<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$hfStudentGender" id="ContentPlaceHolder1_gvStudents_hfStudentGender_1" value="Male">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;">
															<span id="ContentPlaceHolder1_gvStudents_Label14_1" style="color:Silver;">Birthday</span><br>
															<input name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$txtEditStudentBirthday" type="text" value="3/20/2004" id="ContentPlaceHolder1_gvStudents_txtEditStudentBirthday_1" style="font-size:Medium;height:30px;width:100px;">
														</div>

														<div style="width:120px;float:left;height:60px;position:relative;">
															<span id="ContentPlaceHolder1_gvStudents_Label12_1" style="color:Silver;">Race</span><br>
															<select name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$ddlRace" id="ContentPlaceHolder1_gvStudents_ddlRace_1" style="font-size:Medium;height:35px;width:100px;">
																<option value="African-American">African-American</option>
																<option value="Asian">Asian</option>
																<option value="Caucasian">Caucasian</option>
																<option selected="selected" value="Hispanic">Hispanic</option>
																<option value="Native American">Native American</option>
																<option value="Other">Other</option>
															</select>
															<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$hfStudentRace" id="ContentPlaceHolder1_gvStudents_hfStudentRace_1" value="Hispanic">
														</div>

														<div style="width:300px;float:left;height:60px;position:relative;">
															<span id="ContentPlaceHolder1_gvStudents_lblClassroomEdit_1" style="color:Silver;">Classroom</span><br>
															<select name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$ddlClassroomEdit" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$gvStudents$ctl03$ddlClassroomEdit\',\'\')', 0)" id="ContentPlaceHolder1_gvStudents_ddlClassroomEdit_1" style="font-size:Large;height:35px;width:280px;">
																<option value="No Classroom Assigned">No Classroom Assigned</option>
																<option value="2126">myclass</option>
																<option selected="selected" value="2127">class</option>
															</select>
															<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$hfClassroomID" id="ContentPlaceHolder1_gvStudents_hfClassroomID_1" value="2127">
														</div>

														<div class="clear-fix"></div>
														<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$hfStudentID" id="ContentPlaceHolder1_gvStudents_hfStudentID_1" value="16026"><br>
														<span id="ContentPlaceHolder1_gvStudents_lblUpdateMessage_1" style="color:#990000;"></span><br>
													</div>

												</div>
												<br>


											</td>
										</tr>
										<tr>
											<td><br>
												<div class="editStudentRow">
													<div id="ContentPlaceHolder1_gvStudents_divConfirmDelete_2" class="editConfirmDelete">
														<span id="ContentPlaceHolder1_gvStudents_Label19_2" style="color:White;font-size:Large;">Are you sure you want to delete this student - fsasdf sfadfsd?</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label18_2" style="color:White;font-size:Large;">All BatterUp inning data will be deleted as well.</span><br>
														<input type="submit" name="ctl00$ContentPlaceHolder1$gvStudents$ctl04$btnConfirmDelete" value="Delete" id="ContentPlaceHolder1_gvStudents_btnConfirmDelete_2">
														<input type="submit" name="ctl00$ContentPlaceHolder1$gvStudents$ctl04$btnCancelDelete" value="Cancel" id="ContentPlaceHolder1_gvStudents_btnCancelDelete_2">
													</div>
												</div>
												<br>
											</td>
										</tr>
										<tr>
											<td>
												<div class="editStudentRow">
													<div class="editStudentIcons">
														<img src="../images/icon_student.png" alt="Student" class="editStudentIcon">
														<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl05$btnEditStudent" id="ContentPlaceHolder1_gvStudents_btnEditStudent_3" title="Edit Student" class="editStudent" src="../images/invEdit.png">
													</div>

													<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">             
														<span id="ContentPlaceHolder1_gvStudents_Label1_3" style="color:Silver;">Player#</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label21_3" style="font-size:Medium;">16296</span>
													</div>

													<div style="width:50px;float:left;height:50px;position:relative;overflow:hidden;">                  
														<span id="ContentPlaceHolder1_gvStudents_Label8_3" style="color:Silver;">Grade</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label9_3" style="font-size:Medium;">6</span>
													</div>

													<div style="width:160px;float:left;height:50px;position:relative;overflow:hidden;">    
														<span id="ContentPlaceHolder1_gvStudents_Label3_3" style="color:Silver;">Name</span><br>
														<span id="ContentPlaceHolder1_gvStudents_lblStudentFullName_3" style="font-size:Medium;">vxzczx, xvzc vxcz</span>
													</div>

													<div style="width:100px;float:left;height:50px;position:relative;overflow:hidden;">
														<span id="ContentPlaceHolder1_gvStudents_Label4_3" style="color:Silver;">Username</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label5_3" title="xvcvcx" style="font-size:Medium;">xvcvcx</span>
													</div>

													<div style="width:100px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label6_3" style="color:Silver;">Password</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label7_3" title="password" style="font-size:Medium;">password</span>
													</div>

													<div style="width:70px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label10_3" style="color:Silver;">Gender</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label11_3" style="font-size:Medium;">Female</span>
													</div>

													<div style="width:100px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label14_3" style="color:Silver;">Birthday</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label15_3" style="font-size:Medium;">3/20/1985</span>
													</div>

													<div style="width:180px;float:left;height:50px;position:relative;">
														<span id="ContentPlaceHolder1_gvStudents_Label12_3" style="color:Silver;">Race</span><br>
														<span id="ContentPlaceHolder1_gvStudents_Label13_3" style="font-size:Medium;">Asian</span>
													</div>

													<div class="clear-fix"></div>
												</div>
											</td>
										</tr>
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
		</div>
	</body>
</html>



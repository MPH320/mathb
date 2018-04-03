<?php

	//generate a tweet from a specified tweet object


		$fName = $_GET['fName'];
		$lName = $_GET['lName'];
	
		$uName = $_GET['uName'];
		$pWord = $_GET['pWord'];
		$gender = $_GET['gender'];
		$bDay = $_GET['bDay'];
		$race = $_GET['race'];
		$grade = $_GET['grade'];

		if (isset($_GET['mName'])) {
    	$mName = $_GET['mName'];
		}



		$studentContent = '<tr>';
		$studentContent .= '<td>';
		$studentContent .= '<div class="editStudentRow">';
		$studentContent .= '<div class="editStudentIcons">';
		$studentContent .= '<img src="../images/icon_student.png" alt="Student" class="editStudentIcon">';
		$studentContent .= '<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$btnEditStudent"';
		$studentContent .= 'id="ContentPlaceHolder1_gvStudents_btnEditStudent_0" title="Edit Student" class="editStudent" src="../images/invEdit.png">';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">';                      
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label1_0" style="color:Silver;">Player#</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label21_0" style="font-size:Medium;">16421</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:50px;float:left;height:50px;position:relative;overflow:hidden;">';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label8_0" style="color:Silver;">Grade</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label9_0" style="font-size:Medium;">' . $grade . '</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:160px;float:left;height:50px;position:relative;overflow:hidden;">';    
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label3_0" style="color:Silver;">Name</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_lblStudentFullName_0" style="font-size:Medium;">' . $lName .", " . $fName; 
		if (isset($_GET['mName'])) {
    	$studentContent .= ' ' . $mName; 
		}
		$studentContent .= 	'</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:100px;float:left;height:50px;position:relative;overflow:hidden;">';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label4_0" style="color:Silver;">Username</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label5_0" title="fdsfsd" style="font-size:Medium;">' . $uName .'</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:100px;float:left;height:50px;position:relative;">';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label6_0" style="color:Silver;">Password</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label7_0" title="password" style="font-size:Medium;">' . $pWord . '</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:70px;float:left;height:50px;position:relative;">';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label10_0" style="color:Silver;">Gender</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label11_0" style="font-size:Medium;">' . $gender . '</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:100px;float:left;height:50px;position:relative;">';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label14_0" style="color:Silver;">Birthday</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label15_0" style="font-size:Medium;">' . $bDay . '</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div style="width:180px;float:left;height:50px;position:relative;">';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label12_0" style="color:Silver;">Race</span><br>';
		$studentContent .= '<span id="ContentPlaceHolder1_gvStudents_Label13_0" style="font-size:Medium;">' . $race . '</span>';
		$studentContent .= '</div>';
		$studentContent .= '<div class="clear-fix"></div>';
		$studentContent .= '</div>';
		$studentContent .= '</td>';
		$studentContent .= '</tr>';
		
		echo $studentContent;
		


?>
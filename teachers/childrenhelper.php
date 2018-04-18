<?php

session_start();

if(isset($_SESSION['parentuser'])){

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
		$studentContent .= '<div class="editStudentRow">
		
		
		
		
		<div  style="display:none;" id="ContentPlaceHolder1_gvStudents_divConfirmDelete_1" class="editConfirmDelete">
                                    <span id="ContentPlaceHolder1_gvStudents_Label19_1" style="color:White;font-size:Large;">Are you sure you want to delete this student - ' . $fName . ' ' . $lName . '?</span><br>
                                    <span id="ContentPlaceHolder1_gvStudents_Label18_1" style="color:White;font-size:Large;">All BatterUp inning data will be deleted as well.</span><br>
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$btnConfirmDelete" value="Delete" id="ContentPlaceHolder1_gvStudents_btnConfirmDelete_1" onclick="confirmDelete(event)">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$btnCancelDelete" value="Cancel" id="ContentPlaceHolder1_gvStudents_btnCancelDelete_1" onclick="cancelDelete(event)">
                                </div>
		
		
		
		
		
		
		
		
		<div class="editStudents" style="display:none;"><br>';


		$studentContent .= '<div id="ContentPlaceHolder1_gvStudents_divEditForm_0">

                                <div class="editModeStudentIcons">
                                    <img src="../images/icon_student.png" alt="Student" class="editModeStudentIcon">
                                    <input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$btnEditStudent" title="Update Student" class="editModeStudent" src="../images/invSave.png" onclick="updateStudent(event)">
                                    <input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$btnDeleteStudent" id="ContentPlaceHolder1_gvStudents_btnDeleteStudent_0" title="Delete Student" class="deleteStudent" src="../images/iconDelete25.png" onclick="deleteStudent(event)">
                                    <input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$btnCancelStudent" id="ContentPlaceHolder1_gvStudents_btnCancelStudent_0" title="Cancel" class="cancelStudent" src="../images/iconCancel.png" onclick="cancelEdit(event)">

                                </div>

                                

                                <div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">                      
                                <span id="ContentPlaceHolder1_gvStudents_Label8_0" style="color:Silver;">Grade</span><br>                                
                                <select name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$ddlGrade" id="ContentPlaceHolder1_gvStudents_ddlGrade_0" style="font-size:Medium;height:35px;width:90px;" >';

											if($grade == "1"){
												$studentContent .= '<option selected="selected" value="1">First</option>';
											}else{
												$studentContent .= '<option value="1">First</option>';
											}
											if($grade == "2"){
												$studentContent .= '<option selected="selected" value="2">Second</option>';
											}else{
												$studentContent .= '<option value="2">Second</option>';
											}
											if($grade == "3"){
												$studentContent .= '<option value="3" selected="selected">Third</option>';
											}else{
												$studentContent .= '<option value="3">Third</option>';
											}
											if($grade == "4"){
												$studentContent .= '<option value="4" selected="selected">Fourth</option>';
											}else{
												$studentContent .= '<option value="4">Fourth</option>';
											}
											if($grade == "5"){
												$studentContent .= '<option value="5" selected="selected">Fifth</option>';
											}else{
												$studentContent .= '<option value="5">Fifth</option>';
											}
											if($grade == "6"){
												$studentContent .= '<option value="6" selected="selected">Sixth</option>';
											}else{
												$studentContent .= '<option value="6">Sixth</option>';
											}


			$studentContent .= '</select>
                                <input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$hfStudentGrade" id="ContentPlaceHolder1_gvStudents_hfStudentGrade_0" value="2" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">    
                                <span id="ContentPlaceHolder1_gvStudents_Label3_0" style="color:Silver;">First Name</span><br>
                                <input name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$txtEditStudentFName" type="text" value="' . $fName . '" id="ContentPlaceHolder1_gvStudents_txtEditStudentFName_0" style="font-size:Medium;height:30px;width:100px;" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">    
                                <span id="ContentPlaceHolder1_gvStudents_Label16_0" style="color:Silver;">Middle Name</span><br>
                                <input name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$txtEditStudentMName" type="text" value="';

			if (isset($_GET['mName'])) {
    	$studentContent .= $mName;
			} else {
				$studentContent .= '';
			}
			
			
		
			$studentContent .= '" id="ContentPlaceHolder1_gvStudents_txtEditStudentMName_0" style="font-size:Medium;height:30px;width:100px;" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;overflow:hidden;">    
                                <span id="ContentPlaceHolder1_gvStudents_Label17_0" style="color:Silver;">Last Name</span><br>
                                <input name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$txtEditStudentLName" type="text" value="' . $lName . '" id="ContentPlaceHolder1_gvStudents_txtEditStudentLName_0" style="font-size:Medium;height:30px;width:100px;" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;">
                                <span id="ContentPlaceHolder1_gvStudents_Label4_0" style="color:Silver;">Username</span><br>
                                <input name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$txtEditStudentUsername" type="text" value="' . $uName . '" id="ContentPlaceHolder1_gvStudents_txtEditStudentUsername_0" style="font-size:Medium;height:30px;width:100px;" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;">
                                <span id="ContentPlaceHolder1_gvStudents_Label6_0" style="color:Silver;">Password</span><br>
                                <input name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$txtEditStudentPassword" type="text" value="' . $pWord . '" id="ContentPlaceHolder1_gvStudents_txtEditStudentPassword_0" style="font-size:Medium;height:30px;width:100px;" >
                            </div>
                                                       
                            <div style="width:120px;float:left;height:60px;position:relative;">
                                <span id="ContentPlaceHolder1_gvStudents_Label10_0" style="color:Silver;">Gender</span><br>
                                <select name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$ddlGender" id="ContentPlaceHolder1_gvStudents_ddlGender_0" style="font-size:Medium;height:35px;width:100px;" >';

			if($gender == "Male"){
				$studentContent .= '<option value="Female">Female</option>
				<option selected="selected" value="Male">Male</option>';
			}
			else {
				$studentContent .= '<option value="Female" selected="selected" >Female</option>
				<option value="Male">Male</option>';
			}

				

			$studentContent .= '</select>
                                <input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$hfStudentGender" id="ContentPlaceHolder1_gvStudents_hfStudentGender_0" value="'. $gender .'" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;">
                                <span id="ContentPlaceHolder1_gvStudents_Label14_0" style="color:Silver;">Birthday</span><br>
                                <input name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$txtEditStudentBirthday" type="text" value="' . $bDay . '" id="ContentPlaceHolder1_gvStudents_txtEditStudentBirthday_0" style="font-size:Medium;height:30px;width:100px;" >
                            </div>

                            <div style="width:120px;float:left;height:60px;position:relative;">
                                <span id="ContentPlaceHolder1_gvStudents_Label12_0" style="color:Silver;">Race</span><br>
                                <select name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$ddlRace" id="ContentPlaceHolder1_gvStudents_ddlRace_0" style="font-size:Medium;height:35px;width:100px;" >';

				if($race == "African-American"){
					$studentContent .= '<option value="African-American" selected="selected">African-American</option>';
				}else{
					$studentContent .= '<option value="African-American" >African-American</option>';
				}

					if($race == "Asian"){
					$studentContent .= '<option selected="selected" value="Asian">Asian</option>';
				}else{
					$studentContent .= '<option value="Asian">Asian</option>';
				}

				if($race == "Caucasian"){
					$studentContent .= '<option value="Caucasian" selected="selected">Caucasian</option>';
				}else{
					$studentContent .= '<option value="Caucasian">Caucasian</option>';
				}

				if($race == "Hispanic"){
					$studentContent .= '<option value="Hispanic" selected="selected">Hispanic</option>';
				}else{
					$studentContent .= '<option value="Hispanic">Hispanic</option>';
				}

				if($race == "Native American"){
					$studentContent .= '<option value="Native American" selected="selected">Native American</option>';
				}else{
					$studentContent .= '<option value="Native American">Native American</option>';
				}

				if($race == "Other"){
					$studentContent .= '<option value="Other" selected="selected">Other</option>';
				}else{
					$studentContent .= '<option value="Other">Other</option>';
				}

			$studentContent .= '</select>
                                <input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$hfStudentRace" id="ContentPlaceHolder1_gvStudents_hfStudentRace_0" value="' . $race . '" >
                            </div>


                         


                                <div class="clear-fix"></div>
                                <input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$hfStudentID" id="ContentPlaceHolder1_gvStudents_hfStudentID_0" value="16772" ><br>
                                <span id="ContentPlaceHolder1_gvStudents_lblUpdateMessage_0" style="color:#990000;"></span><br>
                                </div>';




		$studentContent .= '</div><div class="studentsRow"><div class="editStudentIcons">';
		$studentContent .= '<img src="../images/icon_student.png" alt="Student" class="editStudentIcon">';
		$studentContent .= '<input type="image" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$btnEditStudent"';
		$studentContent .= ' title="Edit Student" class="editStudent" src="../images/invEdit.png" onclick="editStudent(event)" >';
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
		$studentContent .= '</div></div>';
		$studentContent .= '</td>';
		$studentContent .= '</tr>';
		
		echo $studentContent;
		
		}

?>
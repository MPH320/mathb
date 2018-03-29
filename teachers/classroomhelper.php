<?php

	//generate a tweet from a specified tweet object
	function generateClassroom() {
		
		
		
		$classroomContent = '<tr>';
		$classroomContent .= '<td><br />';
		$classroomContent .= '<div style="background-color:#eee;position:relative;min-width:320px;width:100%;height:auto;background-color:#eee;">';
		$classroomContent .= '<div style="min-width:60px;width:20%;float:left;background-color:#eee;">';
		$classroomContent .= '<div style="float:left;height:60px;">';
		$classroomContent .= '<div style="padding:5px;" class="center">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblCEdit_0" style="color:Gray;">Edit</span><br />';
		$classroomContent .= '<input type="image" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnEdit" id="ContentPlaceHolder1_gvClassrooms_btnEdit_0" src="../images/invEdit.png" alt="Edit This Item" />';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div style="float:left;height:60px;">';
		$classroomContent .= '<div style="padding:5px;" class="center">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblCDelete_0" style="color:Gray;">Delete</span><br />
													<input type="image" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnDelete" id="ContentPlaceHolder1_gvClassrooms_btnDelete_0" src="../images/iconDelete25.png" alt="Delete This Item" />';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div style="width:80%;float:left;background-color:#f6f6f6;">';
		$classroomContent .= '<div style="float:left;height:60px;width:50%;min-width:250px;">';
		$classroomContent .= '<div style="padding:5px;">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblClassroomName_0" style="color:Gray;">Classroom Name</span><br />';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_Label1_0" style="color:#333333;font-size:Medium;">myclass</span><br />';
		$classroomContent .= '<div class=""></div>';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div style="float:left;height:60px;width:50%;min-width:250px;">';
		$classroomContent .= '<div style="padding:5px;">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblClassroomDescription_0" style="color:Gray;">Description</span><br />';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_Label2_0" style="color:#333333;font-size:Medium;"></span><br />';
		$classroomContent .= '</div>';                        
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div class="cleardiv"></div>';                            
		$classroomContent .= '<input type="hidden" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$hfClassroomID" id="ContentPlaceHolder1_gvClassrooms_hfClassroomID_0" value="2126" />';
		$classroomContent .= '</div><br /><br />';
		$classroomContent .= '</td>';
		$classroomContent .= '</tr>';
		
		echo $classroomContent;
		
	}

?>
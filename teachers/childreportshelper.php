<?php

	//generate a tweet from a specified tweet object
	function generateChildReports() {
		
		if(isset($_SESSION['parentuser'])){
		
		$childReportContent = '<tr>';
		$childReportContent .= '<td>';
		$childReportContent .= '<div class="editStudentRow">';
		$childReportContent .= '<div class="editStudentIconshort">';
		$childReportContent .= '<img src="../images/icon_student.png" alt="Student" class="editStudentIcon">';
		$childReportContent .= '</div>';
		$childReportContent .= '<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">';     
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label12_0" style="color:Silver;">Player#</span><br>';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label21_0" style="font-size:Medium;">16421</span>';
		$childReportContent .= '</div>';
		$childReportContent .= '<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">';     
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label10_0" style="color:Silver;">Grade</span><br>';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label11_0" style="font-size:Medium;">2</span>';
		$childReportContent .= '</div>';
		$childReportContent .= '<div style="width:160px;float:left;height:50px;position:relative;overflow:hidden;">';    
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label3_0" style="color:Silver;">Name</span><br>';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_lblStudentFullName_0" style="font-size:Medium;">Scott, Jean Michael</span>';
		$childReportContent .= '<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl02$hfStudentGrade" id="ContentPlaceHolder1_gvStudents_hfStudentGrade_0" value="2" wtx-context="629A4850-9CEA-45B0-8313-6A26DDBF3ED7">';
		$childReportContent .= '</div>';
		$childReportContent .= '<div style="width:110px;float:left;height:50px;position:relative;">';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label4_0" style="color:Silver;">Username</span><br>';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label5_0" title="fdsfsd" style="font-size:Medium;">BatBoy</span>';
		$childReportContent .= '</div>';
		$childReportContent .= '<div id="ContentPlaceHolder1_gvStudents_divBA1_0" style="width:90px;float:left;height:50px;position:relative;">';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label1_0" style="color:Silver;">Addition BA</span><br>';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label2_0" style="font-size:Medium;">0</span>';
		$childReportContent .= '</div>';
		$childReportContent .= '<div id="ContentPlaceHolder1_gvStudents_divBA2_0" style="width:110px;float:left;height:50px;position:relative;">';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label6_0" style="color:Silver;">Subtraction BA</span><br>';
		$childReportContent .= '<span id="ContentPlaceHolder1_gvStudents_Label7_0" style="font-size:Medium;">0</span>';
		$childReportContent .= '</div>';
		$childReportContent .= '<div class="clear-fix"></div>';
		$childReportContent .= '</div>';
		$childReportContent .= '</td>';
		$childReportContent .= '</tr>';
		echo $childReportContent;
			
		}
	}

?>
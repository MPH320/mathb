<?php

	//generate a tweet from a specified tweet object
	function generateReport() {
		
		
		
		if(isset($_SESSION['teacheruser'])){

		$reportContent ='<tr>';
		$reportContent .='<td>';
    $reportContent .='<div class="editStudentRow">';
		$reportContent .='<div class="editStudentIconshort">';
    $reportContent .='<img src="../images/icon_student.png" alt="Student" class="editStudentIcon">';
    $reportContent .='</div>';
		$reportContent .='<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">';     
		$reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label12_1" style="color:Silver;">Player#</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label21_1" style="font-size:Medium;">16692</span>';
    $reportContent .='</div>';
		$reportContent .='<div style="width:60px;float:left;height:50px;position:relative;overflow:hidden;">';     
		$reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label10_1" style="color:Silver;">Grade</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label11_1" style="font-size:Medium;">3</span>';
    $reportContent .='</div>';
		$reportContent .='<div style="width:160px;float:left;height:50px;position:relative;overflow:hidden;">';    
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label3_1" style="color:Silver;">Name</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_lblStudentFullName_1" style="font-size:Medium;">Gatsby, Jean David</span>';
    $reportContent .='<input type="hidden" name="ctl00$ContentPlaceHolder1$gvStudents$ctl03$hfStudentGrade" id="ContentPlaceHolder1_gvStudents_hfStudentGrade_1" value="3">';
    $reportContent .='</div>';
		$reportContent .='<div style="width:110px;float:left;height:50px;position:relative;">';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label4_1" style="color:Silver;">Username</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label5_1" title="fsdaasf" style="font-size:Medium;">Superman</span>';
    $reportContent .='</div>';
		$reportContent .='<div id="ContentPlaceHolder1_gvStudents_divBA1_1" style="width:90px;float:left;height:50px;position:relative;">';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label1_1" style="color:Silver;">Addition BA</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label2_1" style="font-size:Medium;">0</span>';
    $reportContent .='</div>';
		$reportContent .='<div id="ContentPlaceHolder1_gvStudents_divBA2_1" style="width:110px;float:left;height:50px;position:relative;">';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label6_1" style="color:Silver;">Subtraction BA</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label7_1" style="font-size:Medium;">0</span>';
    $reportContent .='</div>';
		$reportContent .='<div id="ContentPlaceHolder1_gvStudents_divBA3_1" style="width:120px;float:left;height:50px;position:relative;">';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label8_1" style="color:Silver;">Multiplication BA</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label9_1" style="font-size:Medium;">0</span>';
    $reportContent .='</div>';
		$reportContent .='<div id="ContentPlaceHolder1_gvStudents_divBA4_1" style="width:110px;float:left;height:50px;position:relative;">';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label14_1" style="color:Silver;">Division BA</span><br>';
    $reportContent .='<span id="ContentPlaceHolder1_gvStudents_Label15_1" style="font-size:Medium;">0</span>';
   	$reportContent .='</div>';
    $reportContent .='<div class="clear-fix"></div>';
    $reportContent .='</div>';
    $reportContent .='</td>';
		$reportContent .='</tr>';
	
		echo $reportContent;
		}
		
	}

?>
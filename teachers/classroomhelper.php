<?php

		$cName = $_GET['cName'];

		if (isset($_GET['desc'])) {
    	$desc = $_GET['desc'];
		}
		
		$classroomContent = '<tr>';
		$classroomContent .= '<td><br />';



							
		$classroomContent .= '<div class="classRoomEdit" style="display:none" >
														<div  style="width:75px; height:160px;float:left;background-color:#eee;">
                                    <div style="height:50px;padding:5px;" class="center">
                                        <span id="ContentPlaceHolder1_gvClassrooms_lblCEdit_0" style="color:Gray;">Update</span><br>
                                        <input type="image" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnEdit" id="ContentPlaceHolder1_gvClassrooms_btnEdit_0" src="../images/invSave.png" alt="Update This Item"  >
                                    </div>
                                    <div style="height:50px;padding:5px;" class="center">
                                        <span id="ContentPlaceHolder1_gvClassrooms_lblCDelete_0" style="color:Gray;">Cancel</span><br>
                                        <input type="image" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnDelete" id="ContentPlaceHolder1_gvClassrooms_btnDelete_0" src="../images/iconDelete25.png" alt="Cancel" onclick="cancelEdit(event)">
                                    </div>
                                </div>
										
										<div style="width:250px; height:160px;float:left;background-color:#f6f6f6;">
                                    <div style="height:50px;padding:5px;">
                                        <span id="ContentPlaceHolder1_gvClassrooms_lblCFName_0" style="color:Gray;">Classroom Name</span><br>
                                        <input name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$txtClassroomName" type="text" value="" id="ContentPlaceHolder1_gvClassrooms_txtClassroomName_0" style="color:#333333;font-size:Medium;height:30px;width:95%;" >
                                   </div>
                                    <div style="height:50px;padding:5px;">
                                        <span id="ContentPlaceHolder1_gvClassrooms_lblCLName_0" style="color:Gray;">Description</span><br>
                                        <input name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$txtClassroomDescription" type="text" value="" id="ContentPlaceHolder1_gvClassrooms_txtClassroomDescription_0" style="color:#333333;font-size:Medium;height:30px;width:95%;" >                                        
                                   </div>
                                    <span id="ContentPlaceHolder1_gvClassrooms_lblClassroomEditMessage_0" style="color:#990000;"></span><br>
                                </div>
									</div>';




		$classroomContent .= '<div style="background-color:#eee;position:relative;min-width:320px;width:100%;height:auto;background-color:#eee;">';

		

		$classroomContent .= '<div class="deleteClassroomBoxParent" style="position:absolute;top:0px;left:0px;width:100%;height:auto;background-color:#ff6767;display:none;">
									<div style="padding:5px;">
									<span id="ContentPlaceHolder1_gvClassrooms_Label19_0" style="color:White;font-size:Large;">Are you sure you want to delete this classroom? Any students in this classroom will become unassigned.</span><br>

									<input onclick="confirmDelete(event)" type="submit" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnConfirmDelete" value="Delete" id="ContentPlaceHolder1_gvClassrooms_btnConfirmDelete_0" >
									<input onclick="cancelDelete(event)" type="submit" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnCancelDelete" value="Cancel" id="ContentPlaceHolder1_gvClassrooms_btnCancelDelete_0" >
									</div>
                </div>';



														
		



		$classroomContent .= '<div class="deleteClassroomButtonParent" style="min-width:60px;width:20%;float:left;background-color:#eee;">';
		$classroomContent .= '<div style="float:left;height:60px;">';
		$classroomContent .= '<div style="padding:5px;" class="center">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblCEdit_0" style="color:Gray;">Edit</span><br />';
		$classroomContent .= '<input type="image" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnEdit" id="ContentPlaceHolder1_gvClassrooms_btnEdit_0" src="../images/invEdit.png" alt="Edit This Item" onclick="editClassroom(event)" />';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div style="float:left;height:60px;">';
		$classroomContent .= '<div style="padding:5px;" class="center">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblCDelete_0" style="color:Gray;">Delete</span><br />
													<input type="image" onclick="deleteClassRoom(event)" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$btnDelete" id="ContentPlaceHolder1_gvClassrooms_btnDelete_0" src="../images/iconDelete25.png" alt="Delete This Item" />';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div style="width:80%;float:left;background-color:#f6f6f6;">';
		$classroomContent .= '<div style="float:left;height:60px;width:50%;min-width:250px;">';
		$classroomContent .= '<div style="padding:5px;">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblClassroomName_0" style="color:Gray;">Classroom Name</span><br />';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_Label1_0" style="color:#333333;font-size:Medium;">' . $cName . '</span><br />';
		$classroomContent .= '<div class=""></div>';
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div style="float:left;height:60px;width:50%;min-width:250px;">';
		$classroomContent .= '<div style="padding:5px;">';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_lblClassroomDescription_0" style="color:Gray;">Description</span><br />';
		$classroomContent .= '<span id="ContentPlaceHolder1_gvClassrooms_Label2_0" style="color:#333333;font-size:Medium;">';
		if (isset($_GET['desc'])) {
    		$classroomContent .= 	$desc;
		}
		$classroomContent .= 	'</span><br />';
		$classroomContent .= '</div>';                        
		$classroomContent .= '</div>';
		$classroomContent .= '</div>';
		$classroomContent .= '<div class="cleardiv"></div>';                            
		$classroomContent .= '<input type="hidden" name="ctl00$ContentPlaceHolder1$gvClassrooms$ctl02$hfClassroomID" id="ContentPlaceHolder1_gvClassrooms_hfClassroomID_0" value="2126" />';
		$classroomContent .= '</div><br /><br />';
		$classroomContent .= '</td>';
		$classroomContent .= '</tr>';
		
		echo $classroomContent;

?>
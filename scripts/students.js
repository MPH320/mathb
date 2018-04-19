$( document ).ready(function() {

});

function clearCSS(theElement){
	theElement.css('color', 'Black');
	theElement.css('background-color', 'White');
}

function errorCSS(theElement){
	theElement.css('color', 'White');
	theElement.css('background-color', '#FF9999');
}

function add(){
	$("#ContentPlaceHolder1_divAddStudents").show();
	$("#ContentPlaceHolder1_divAddMessage").hide();
	$("#ContentPlaceHolder1_btnAdd").hide();
}

function done(){
	$("#ContentPlaceHolder1_divAddStudents").hide();
	$("#ContentPlaceHolder1_divAddMessage").show();
	$("#ContentPlaceHolder1_btnAdd").show();
}

function resetForm(){
	$( "#ContentPlaceHolder1_txtUsername" ).val("");
	$( "#ContentPlaceHolder1_txtPassword" ).val("");
	$( "#ContentPlaceHolder1_txtPasswordRetype" ).val("");
	$( "#ContentPlaceHolder1_txtFName" ).val("");
	$( "#ContentPlaceHolder1_txtMName").val("");
	$( "#ContentPlaceHolder1_txtLName" ).val("");
	$( "#ContentPlaceHolder1_txtBirthday" ).val("");
	$( "#ContentPlaceHolder1_ddlGender" ).val("Choose A Gender");
	$( "#ContentPlaceHolder1_ddlGrade" ).val("Choose A Grade");
	$( "#ContentPlaceHolder1_ddlRace" ).val("Choose A Race");
}

function clearAddChildForm(){
	clearCSS($( "#ContentPlaceHolder1_txtUsername" ));
	clearCSS($( "#ContentPlaceHolder1_txtPassword" ));
	clearCSS($( "#ContentPlaceHolder1_txtPasswordRetype" ));
	clearCSS($( "#ContentPlaceHolder1_txtFName" ));
	clearCSS($( "#ContentPlaceHolder1_txtLName" ));
	clearCSS($( "#ContentPlaceHolder1_txtBirthday" ));
	clearCSS($( "#ContentPlaceHolder1_ddlGender"));
	clearCSS($( "#ContentPlaceHolder1_ddlGrade"));
	clearCSS($( "#ContentPlaceHolder1_ddlRace"));
	clearCSS($( "#ContentPlaceHolder1_ddlClassrooms"));

	$( "#ContentPlaceHolder1_lblSaveStudentError" ).text('');
	
}

function saveStudent(){
	clearAddChildForm()
	
		var success = true;

	if(!$("#ContentPlaceHolder1_txtUsername").val()){
		errorCSS($( "#ContentPlaceHolder1_txtUsername" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).text('A username is required. ');
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtPassword").val()){
		errorCSS($( "#ContentPlaceHolder1_txtPassword" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "A password is required. " ));
			success = false;
	} else if ($("#ContentPlaceHolder1_txtPassword").val() != $("#ContentPlaceHolder1_txtPasswordRetype").val()){
		errorCSS($( "#ContentPlaceHolder1_txtPassword" ));
		errorCSS($( "#ContentPlaceHolder1_txtPasswordRetype" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Passwords do not match. " ));
		
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtFName").val()){
		errorCSS($( "#ContentPlaceHolder1_txtFName" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "First name is required. " ));
			success = false;		
	}
	
	if(!$("#ContentPlaceHolder1_txtLName").val()){
		errorCSS($( "#ContentPlaceHolder1_txtLName" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Last name is required. " ));
			success = false;
	}
	
		if(!$("#ContentPlaceHolder1_txtBirthday").val()){
			errorCSS($( "#ContentPlaceHolder1_txtBirthday" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "A birthday is required. " ));
			success = false;
	}else{

		var d = new Date($("#ContentPlaceHolder1_txtBirthday").val()).toString();
		if(isNaN(Date.parse(d))){
			errorCSS($( "#ContentPlaceHolder1_txtBirthday" ));
			$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Birthday is not in the correct format. " ));
			success = false;
		}

	}
	
		if($("#ContentPlaceHolder1_ddlGender").val() == "Choose A Gender"){
			errorCSS($( "#ContentPlaceHolder1_ddlGender" ));
			$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a gender. " ));
			success = false;
	}
	
	if($("#ContentPlaceHolder1_ddlGrade").val() == "Choose A Grade"){
		errorCSS($( "#ContentPlaceHolder1_ddlGrade" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a grade. " ));
			success = false;
	}
	
		if($("#ContentPlaceHolder1_ddlRace").val() == "Choose A Race"){
			errorCSS($( "#ContentPlaceHolder1_ddlRace" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a race. " ));
			success = false;
	}
	
	if($("#ContentPlaceHolder1_ddlClassrooms").val() == "Choose A Classroom"){
		errorCSS($( "#ContentPlaceHolder1_ddlClassrooms" ));
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a classroom. " ));
			success = false;
	}

	if(success){
		
		var tempURL = '../teachers/studentshelper.php';
		var fName = $("#ContentPlaceHolder1_txtFName").val();
		var lName = $("#ContentPlaceHolder1_txtLName").val();
		var mName = $("#ContentPlaceHolder1_txtMName").val();
		var uName = $("#ContentPlaceHolder1_txtUsername").val();
		var pWord = $("#ContentPlaceHolder1_txtPassword").val();
		var gender = $("#ContentPlaceHolder1_ddlGender").val();
		var bDay = $("#ContentPlaceHolder1_txtBirthday").val();
		var race = $("#ContentPlaceHolder1_ddlRace").val();
		var grade = $("#ContentPlaceHolder1_ddlGrade").val();
		var cRoom = $("#ContentPlaceHolder1_ddlClassrooms").val();
		
		if(!mName){
			tempURL = tempURL + '?fName=' + fName + '&lName=' + lName + '&uName=' + uName + '&pWord=' + pWord + '&gender=' + gender + '&bDay=' + bDay + '&race=' + race + '&grade=' + grade + '&cRoom=' + cRoom;
		}else{
			tempURL = tempURL + '?fName=' + fName + '&lName=' + lName + '&mName=' + mName + '&uName=' + uName + '&pWord=' + pWord + '&gender=' + gender + '&bDay=' + bDay + '&race=' + race + '&grade=' + grade + '&cRoom=' + cRoom;
		}

		$.ajax({
				url: tempURL,
				success: function (response) {
					$('tbody').append(response);
			}
		});
		
		resetForm();
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).text('Child Saved Succesfully');
		
	}
}
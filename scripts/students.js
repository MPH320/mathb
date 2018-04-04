$( document ).ready(function() {
  //console.log("hello");
	//$("table").hide();
	//$("#ContentPlaceHolder1_divAddStudents").hide();
	
});

function add(){
	//console.log("hello");
	$("#ContentPlaceHolder1_divAddStudents").show();
	$("#ContentPlaceHolder1_divAddMessage").hide();
	$("#ContentPlaceHolder1_btnAdd").hide();
}

function done(){
	console.log("hello");
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
	$( "#ContentPlaceHolder1_txtUsername" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtUsername" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtPassword" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtPassword" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtPasswordRetype" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtPasswordRetype" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtFName" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtFName" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtLName" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtLName" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtBirthday" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtBirthday" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlGender" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlGender" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlGrade" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlGrade" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlRace" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlRace" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlClassrooms" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlClassrooms" ).css('background-color', 'White');

	$( "#ContentPlaceHolder1_lblSaveStudentError" ).text('');
	
}


function saveStudent(){
	console.log("clicked")
	clearAddChildForm()
	
		var success = true;

	if(!$("#ContentPlaceHolder1_txtUsername").val()){
		$( "#ContentPlaceHolder1_txtUsername" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtUsername" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).text('A username is required. ');
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtPassword").val()){
		$( "#ContentPlaceHolder1_txtPassword" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtPassword" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "A password is required. " ));
			success = false;
	} else if ($("#ContentPlaceHolder1_txtPassword").val() != $("#ContentPlaceHolder1_txtPasswordRetype").val()){

			//console.log("no match")
		$( "#ContentPlaceHolder1_txtPassword" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtPassword" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_txtPasswordRetype" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtPasswordRetype" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Passwords do not match. " ));
		
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtFName").val()){

		
		$( "#ContentPlaceHolder1_txtFName" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtFName" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "First name is required. " ));
			success = false;		
		
	}
	
	if(!$("#ContentPlaceHolder1_txtLName").val()){
		$( "#ContentPlaceHolder1_txtLName" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtLName" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Last name is required. " ));
			success = false;
	}
	
		if(!$("#ContentPlaceHolder1_txtBirthday").val()){
		$( "#ContentPlaceHolder1_txtBirthday" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtBirthday" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "A birthday is required. " ));
			success = false;
	}
	
		if($("#ContentPlaceHolder1_ddlGender").val() == "Choose A Gender"){
		$( "#ContentPlaceHolder1_ddlGender" ).css('color', 'White');
	$( "#ContentPlaceHolder1_ddlGender" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a gender. " ));
			success = false;
	}
	
	if($("#ContentPlaceHolder1_ddlGrade").val() == "Choose A Grade"){
		$( "#ContentPlaceHolder1_ddlGrade" ).css('color', 'White');
	$( "#ContentPlaceHolder1_ddlGrade" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a grade. " ));
			success = false;
	}
	
		if($("#ContentPlaceHolder1_ddlRace").val() == "Choose A Race"){
		$( "#ContentPlaceHolder1_ddlRace" ).css('color', 'White');
	$( "#ContentPlaceHolder1_ddlRace" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a race. " ));
			success = false;
	}
	
	if($("#ContentPlaceHolder1_ddlClassrooms").val() == "Choose A Classroom"){
		$( "#ContentPlaceHolder1_ddlClassrooms" ).css('color', 'White');
	$( "#ContentPlaceHolder1_ddlClassrooms" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).append(document.createTextNode( "Please select a classroom. " ));
			success = false;
	}

	if(success){
		console.log("success");
		
		
		
		
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
		
		//console.log(tempURL)	
		
		
		$.ajax({
				url: tempURL,
				success: function (response) {//response is value returned from php (for your example it's "bye bye"
				//alert(response);
					$('tbody').append(response);
			}
		});
		
		
		
		
		
		
		resetForm();
		$( "#ContentPlaceHolder1_lblSaveStudentError" ).text('Child Saved Succesfully');
		
	}
}
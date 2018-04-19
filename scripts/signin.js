$( document ).ready(function() {

});

function errorCSS(theElement){
	theElement.css('color', 'White');
	theElement.css('background-color', '#FF9999');
}

function clearCSS(theElement){
	theElement.css('color', 'Black');
	theElement.css('background-color', 'White');
}

function checkBox(){
	if ($('#ContentPlaceHolder1_cbOutsiteUS').prop( "checked" )) {
		$('#ContentPlaceHolder1_divOutsideUS').show();
		$('#ContentPlaceHolder1_divInsideUS').hide();
	} else {
		$('#ContentPlaceHolder1_divOutsideUS').hide();
		$('#ContentPlaceHolder1_divInsideUS').show();
	}
}

function schoolName(){

	if ($('#ContentPlaceHolder1_ddlSchoolType').val() == "public" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "private" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "Homeschool") {
		
	
		$('#ContentPlaceHolder1_divSchoolName').show();
		
	} else {
	
		$('#ContentPlaceHolder1_divSchoolName').hide();
	
	}
}

function clearSignInForm(){
	clearCSS($( "#ContentPlaceHolder1_txtUsername" ));
	clearCSS($( "#ContentPlaceHolder1_txtPassword" ));
	
	$( "#ContentPlaceHolder1_lblSignInMessage" ).text('');
}

function signIn(){
	clearSignInForm()
	var success = true;
	
	$( "#ContentPlaceHolder1_lblSignInMessage" ).text('');
	if(!$("#ContentPlaceHolder1_txtUsername").val()){
		errorCSS($( "#ContentPlaceHolder1_txtUsername" ));
		$( "#ContentPlaceHolder1_lblSignInMessage" ).text('A username is required. ');
		success = false;
	}
	
		if(!$("#ContentPlaceHolder1_txtPassword").val()){
			errorCSS($( "#ContentPlaceHolder1_txtPassword" ));
		$( "#ContentPlaceHolder1_lblSignInMessage" ).append(document.createTextNode( "A password is required." ));
			success = false;
	}
	
	var username = $("#ContentPlaceHolder1_txtUsername").val();

	if(success && username == "testParent"){
	
		 $.post("../teachers/parentsignin.php", {"username": username})
			 .done(function( data ) {

			if (data == "Success"){
				window.location="http://localhost/nationalmathbee/teachers/parents.php"
			}
    	
  	});
		
	} else if (success && username == "testTeacher"){
		 $.post("../teachers/teachersignin.php", {"username": username}).done(function( data ) {

			if (data == "Success"){
				window.location="http://localhost/nationalmathbee/teachers/teacher.php"
			}
    	
  	});
		
		
	} else{
		$( "#ContentPlaceHolder1_lblSignInMessage" ).text('Login Failed. Please try again.');
	}
	
}

function clearRegisterForm(){
	clearCSS($( "#ContentPlaceHolder1_txtRegisterUsername" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterPassword" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterPasswordRetype" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterEmail" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterEmailRetype" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterFName" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterLName" ));
	clearCSS($( "#ContentPlaceHolder1_ddlSchoolType" ));
	clearCSS($( "#ContentPlaceHolder1_ddlStates" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterSchoolName" ));
	clearCSS($( "#ContentPlaceHolder1_ddlCountries" ));
	clearCSS($( "#ContentPlaceHolder1_txtRegisterStateProvince" ));
	
	$( "#ContentPlaceHolder1_lblRegisterMessage" ).text('');
	
}

function register(){

	clearRegisterForm()
	
		var success = true;

	if(!$("#ContentPlaceHolder1_txtRegisterUsername").val()){
		errorCSS($( "#ContentPlaceHolder1_txtRegisterUsername" ));
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).text('A username is required. ');
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtRegisterPassword").val()){
		errorCSS($( "#ContentPlaceHolder1_txtRegisterPassword" ));
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A password is required. " ));
			success = false;
	} else if ($("#ContentPlaceHolder1_txtRegisterPassword").val() != $("#ContentPlaceHolder1_txtRegisterPasswordRetype").val()){
		
		errorCSS($( "#ContentPlaceHolder1_txtRegisterPassword" ));
		errorCSS($( "#ContentPlaceHolder1_txtRegisterPasswordRetype" ));
		
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Passwords do not match. " ));
		
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtRegisterEmail").val()){

		errorCSS($( "#ContentPlaceHolder1_txtRegisterEmail" ));
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "An email is required. " ));
			success = false;		
		
	} else if ($("#ContentPlaceHolder1_txtRegisterEmail").val() != $("#ContentPlaceHolder1_txtRegisterEmailRetype").val()){
		errorCSS($( "#ContentPlaceHolder1_txtRegisterEmail" ));
		errorCSS($( "#ContentPlaceHolder1_txtRegisterEmailRetype" ));
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Email addresses do not match. " ));
		
		success = false;
	}
	
		if(!$("#ContentPlaceHolder1_txtRegisterFName").val()){
			errorCSS($( "#ContentPlaceHolder1_txtRegisterFName" ));
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "First name is required. " ));
			success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtRegisterLName").val()){
		errorCSS($( "#ContentPlaceHolder1_txtRegisterLName" ));

		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Last name is required. " ));
			success = false;
	}
	
	if($("#ContentPlaceHolder1_ddlSchoolType").val() == "Make a Selection"){
		errorCSS($( "#ContentPlaceHolder1_ddlSchoolType" ));

		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Please select a school type. " ));
			success = false;
	}
	
	
	
	if ($('#ContentPlaceHolder1_ddlSchoolType').val() == "public" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "private" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "Homeschool") {
	
			if(!$("#ContentPlaceHolder1_txtRegisterSchoolName").val()){
				errorCSS($( "#ContentPlaceHolder1_txtRegisterSchoolName" ));
				$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A school name is required. " ));
					success = false;
			}
		
	}
	
	if(!$('#ContentPlaceHolder1_cbOutsiteUS').is(':checked')){

			if($("#ContentPlaceHolder1_ddlStates").val() == "Select A State"){
				errorCSS($( "#ContentPlaceHolder1_ddlStates" ));
				$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A state is required. " ));
					success = false;
			} 
		
		} else {
			
			if(!$("#ContentPlaceHolder1_txtRegisterStateProvince").val()){
				errorCSS($( "#ContentPlaceHolder1_txtRegisterStateProvince" ));
				$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( " A state or province is required. " ));
				success = false;
			}
			
			if($("#ContentPlaceHolder1_ddlCountries").val() == "Select A Country"){
				errorCSS($( "#ContentPlaceHolder1_ddlCountries" ));
				$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A country is required. " ));
				success = false;
			}
		}
	
	if(success){

		window.location.href = "registered.html";
	}
}


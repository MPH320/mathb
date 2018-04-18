$( document ).ready(function() {
  //console.log("hello");
	
	//$('#ContentPlaceHolder1_divOutsideUS').hide();
});



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
	console.log("schoolname");
	if ($('#ContentPlaceHolder1_ddlSchoolType').val() == "public" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "private" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "Homeschool") {
		
		console.log("show");
		$('#ContentPlaceHolder1_divSchoolName').show();
		
	} else {
		console.log("hide");
		$('#ContentPlaceHolder1_divSchoolName').hide();
	
	}
}

function clearSignInForm(){
	$( "#ContentPlaceHolder1_txtUsername" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtUsername" ).css('background-color', 'White');
	$( "#ContentPlaceHolder1_txtPassword" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtPassword" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_lblSignInMessage" ).text('');
}

function signIn(){
	clearSignInForm()
	var success = true;
	
	$( "#ContentPlaceHolder1_lblSignInMessage" ).text('');
	if(!$("#ContentPlaceHolder1_txtUsername").val()){
		$( "#ContentPlaceHolder1_txtUsername" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtUsername" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSignInMessage" ).text('A username is required. ');
		success = false;
	}
	
		if(!$("#ContentPlaceHolder1_txtPassword").val()){
		$( "#ContentPlaceHolder1_txtPassword" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtPassword" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblSignInMessage" ).append(document.createTextNode( "A password is required." ));
			success = false;
	}
	
	
	var username = $("#ContentPlaceHolder1_txtUsername").val();
	
	console.log(username)
	
	if(success && username == "testParent"){
		//console.log("success");
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
	$( "#ContentPlaceHolder1_txtRegisterUsername" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterUsername" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterPassword" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterPassword" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterPasswordRetype" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterPasswordRetype" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterEmail" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterEmail" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterEmailRetype" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterEmailRetype" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterFName" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterFName" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterLName" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterLName" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlSchoolType" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlSchoolType" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlStates" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlStates" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterSchoolName" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterSchoolName" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_ddlCountries" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_ddlCountries" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_txtRegisterStateProvince" ).css('color', 'Black');
	$( "#ContentPlaceHolder1_txtRegisterStateProvince" ).css('background-color', 'White');
	
	$( "#ContentPlaceHolder1_lblRegisterMessage" ).text('');
	
}

function register(){
	//console.log("clicked")
	clearRegisterForm()
	
		var success = true;

	if(!$("#ContentPlaceHolder1_txtRegisterUsername").val()){
		$( "#ContentPlaceHolder1_txtRegisterUsername" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterUsername" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).text('A username is required. ');
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtRegisterPassword").val()){
		$( "#ContentPlaceHolder1_txtRegisterPassword" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterPassword" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A password is required. " ));
			success = false;
	} else if ($("#ContentPlaceHolder1_txtRegisterPassword").val() != $("#ContentPlaceHolder1_txtRegisterPasswordRetype").val()){

			//console.log("no match")
		$( "#ContentPlaceHolder1_txtRegisterPassword" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterPassword" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_txtRegisterPasswordRetype" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterPasswordRetype" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Passwords do not match. " ));
		
		success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtRegisterEmail").val()){

		
		$( "#ContentPlaceHolder1_txtRegisterEmail" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterEmail" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "An email is required. " ));
			success = false;		
		
	} else if ($("#ContentPlaceHolder1_txtRegisterEmail").val() != $("#ContentPlaceHolder1_txtRegisterEmailRetype").val()){

			//console.log("no match")
		$( "#ContentPlaceHolder1_txtRegisterEmail" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterEmail" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_txtRegisterEmailRetype" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterEmailRetype" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Email addresses do not match. " ));
		
		success = false;
	}
	
		if(!$("#ContentPlaceHolder1_txtRegisterFName").val()){
		$( "#ContentPlaceHolder1_txtRegisterFName" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterFName" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "First name is required. " ));
			success = false;
	}
	
	if(!$("#ContentPlaceHolder1_txtRegisterLName").val()){
		$( "#ContentPlaceHolder1_txtRegisterLName" ).css('color', 'White');
	$( "#ContentPlaceHolder1_txtRegisterLName" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Last name is required. " ));
			success = false;
	}
	
	if($("#ContentPlaceHolder1_ddlSchoolType").val() == "Make a Selection"){
		$( "#ContentPlaceHolder1_ddlSchoolType" ).css('color', 'White');
	$( "#ContentPlaceHolder1_ddlSchoolType" ).css('background-color', '#FF9999');
		$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "Please select a school type. " ));
			success = false;
	}
	
	
	
	if ($('#ContentPlaceHolder1_ddlSchoolType').val() == "public" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "private" || $('#ContentPlaceHolder1_ddlSchoolType').val() == "Homeschool") {
	
			if(!$("#ContentPlaceHolder1_txtRegisterSchoolName").val()){
				$( "#ContentPlaceHolder1_txtRegisterSchoolName" ).css('color', 'White');
			$( "#ContentPlaceHolder1_txtRegisterSchoolName" ).css('background-color', '#FF9999');
				$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A school name is required. " ));
					success = false;
			}
		
	}
	
	if(!$('#ContentPlaceHolder1_cbOutsiteUS').is(':checked')){
		
			console.log("unchecked");

			if($("#ContentPlaceHolder1_ddlStates").val() == "Select A State"){
				$( "#ContentPlaceHolder1_ddlStates" ).css('color', 'White');
			$( "#ContentPlaceHolder1_ddlStates" ).css('background-color', '#FF9999');
				$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A state is required. " ));
					success = false;
			} 
		
		} else {
			
			
				console.log("checked");
			
			if(!$("#ContentPlaceHolder1_txtRegisterStateProvince").val()){
			$( "#ContentPlaceHolder1_txtRegisterStateProvince" ).css('color', 'White');
			$( "#ContentPlaceHolder1_txtRegisterStateProvince" ).css('background-color', '#FF9999');
			$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( " A state or province is required. " ));
				success = false;
			}
			
			if($("#ContentPlaceHolder1_ddlCountries").val() == "Select A Country"){
			$( "#ContentPlaceHolder1_ddlCountries" ).css('color', 'White');
			$( "#ContentPlaceHolder1_ddlCountries" ).css('background-color', '#FF9999');
			$( "#ContentPlaceHolder1_lblRegisterMessage" ).append(document.createTextNode( "A country is required. " ));
				success = false;
			
			}
			
			
			
		}
	

	if(success){
		//console.log("success");
		window.location.href = "registered.html";
	}
}


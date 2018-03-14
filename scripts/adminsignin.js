$( document ).ready(function() {
  //console.log("hello");
	
	//$('#ContentPlaceHolder1_divOutsideUS').hide();
});



function clearSignInForm(){
	$( "#txtUsername" ).css('color', 'Black');
	$( "#txtUsername" ).css('background-color', 'White');
	$( "#txtPassword" ).css('color', 'Black');
	$( "#txtPassword" ).css('background-color', 'White');
	
	$( "#lblSignInMessage" ).text('');
}

function signIn(){
	clearSignInForm();
	var success = true;
	
	$( "#ContentPlaceHolder1_lblSignInMessage" ).text('');
	if(!$("#txtUsername").val()){
		$( "#txtUsername" ).css('color', 'White');
		$( "#txtUsername" ).css('background-color', '#FF9999');
		$( "#lblSignInMessage" ).text('A username is required. ');
		success = false;
	}
	
		if(!$("#txtPassword").val()){
		$( "#txtPassword" ).css('color', 'White');
		$( "#txtPassword" ).css('background-color', '#FF9999');
		$( "#lblSignInMessage" ).append(document.createTextNode( "A password is required." ));
			success = false;
	}
	
	if(success){
		$( "#lblSignInMessage" ).text('Login Failed. Please try again.');
	}
	
}
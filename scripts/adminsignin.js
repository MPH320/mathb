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


function clearSignInForm(){
	 clearCSS($( "#txtUsername" ));
	 clearCSS($( "#txtPassword" ));

	$( "#lblSignInMessage" ).text('');
}

function signIn(){
	clearSignInForm();
	var success = true;
	
	$( "#ContentPlaceHolder1_lblSignInMessage" ).text('');
	if(!$("#txtUsername").val()){
		errorCSS($( "#txtUsername" ));
		$( "#lblSignInMessage" ).text('A username is required. ');
		success = false;
	}
	
		if(!$("#txtPassword").val()){
			errorCSS($( "#txtPassword" ));
			$( "#lblSignInMessage" ).append(document.createTextNode( "A password is required." ));
			success = false;
	}
	
	var username = $("#txtUsername").val();

	if(success && username == "test"){
  
    $.post("../signin/adminsignin.php", {"username": username})
		.done(function( data ) {

				if (data == "Success"){
					window.location="http://localhost/nationalmathbee/admin/adminhome.php"
				}
    	
  	});
		
	} else{
		$( "#lblSignInMessage" ).text('Login Failed. Please try again.');
	}
	
}
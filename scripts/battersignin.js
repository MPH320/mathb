$( document ).ready(function() {

});

function signIn(){
	
	
	
	var username = $("#txtUsername").val();
	///this will need to check the db
	if(username == "test"){
    // Send Ajax request to backend.php, with src set as "img" in the POST data
    $.post("battersignin.php", {"username": username})
			.done(function( data ) {

				if (data == "Success"){
					window.location="http://localhost/nationalmathbee/batterup/selectgame.php"
				}
    	
  	});
		
	} else{
		$( "#lblSignInMessage" ).text('Login Failed. Please try again.');
	}

}
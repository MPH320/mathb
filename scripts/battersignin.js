$( document ).ready(function() {

});

function signIn(){

	var username = $("#txtUsername").val();

	if(username == "test"){

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
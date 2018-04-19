$( document ).ready(function() {

});

function send(){
		$( "#ContentPlaceHolder1_lblEmailError" ).text('');
	if(!$("#ContentPlaceHolder1_txtEmail").val()){
		$( "#ContentPlaceHolder1_lblEmailError" ).text('Please enter an email address.');
	} else{
		var message = 'An email has been dispatched to ' + $("#ContentPlaceHolder1_txtEmail").val() + '.';
		$( "#ContentPlaceHolder1_lblMessage" ).text(message);
		$("#ContentPlaceHolder1_divRecover").hide();
	}
}
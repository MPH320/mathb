$( document ).ready(function() {

	
	
});

function submitContact(event){
	event.preventDefault();

		$( "#ContentPlaceHolder1_lblEmailError" ).css('color', '#00ACDC');
	if(!$("#ContentPlaceHolder1_txtEmailMessage").val()){
		$( "#ContentPlaceHolder1_lblEmailError" ).text('Please enter a message.');
	}else if(!$("#ContentPlaceHolder1_txtEmailAddress").val()){
		$( "#ContentPlaceHolder1_lblEmailError" ).text('Please enter an email address.');
  }else{

		$.post("https://jumprock.co/mail/michelangelopereira", $.param($('.contactForm').serializeArray()), function(data) {
			 $( "#ContentPlaceHolder1_lblEmailError" ).css('color', '#48473E');
				$( "#ContentPlaceHolder1_lblEmailError" ).text('Thank you for contacting us.');
    });
		

	}
}

function subscribe(event){
	event.preventDefault();


		$( "#ContentPlaceHolder1_lblSubscriptionError" ).css('color', '#00ACDC');
	if(!$("#ContentPlaceHolder1_txtSubscribe").val()){
		$( "#ContentPlaceHolder1_lblSubscriptionError" ).text('Please enter an email address.');
	}else{
		
		$.post("../contact/subscribe.php", {"email": $("#ContentPlaceHolder1_txtSubscribe").val()})
			.done(function( data ) {

			if (data == "Subscribed"){
		
				$( "#ContentPlaceHolder1_lblSubscriptionError" ).css('color', '#48473E');
				$( "#ContentPlaceHolder1_lblSubscriptionError" ).text('Thank you for subscribing.');
			}
    	
  	});

	}
}
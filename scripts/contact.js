$( document ).ready(function() {
  //console.log("hello");
	//$( "#ContentPlaceHolder1_lblSubscriptionError" ).hide();
});

function submitContact(){
		$( "#ContentPlaceHolder1_lblEmailError" ).css('color', '#00ACDC');
	if(!$("#ContentPlaceHolder1_txtEmailMessage").val()){
		$( "#ContentPlaceHolder1_lblEmailError" ).text('Please enter a message.');
	}else if(!$("#ContentPlaceHolder1_txtEmailAddress").val()){
		$( "#ContentPlaceHolder1_lblEmailError" ).text('Please enter an email address.');			 
  }else{
		$( "#ContentPlaceHolder1_lblEmailError" ).css('color', '#48473E');
		$( "#ContentPlaceHolder1_lblEmailError" ).text('Thank you for contacting us.');
	
	}
}

function subscribe(){
		$( "#ContentPlaceHolder1_lblSubscriptionError" ).css('color', '#00ACDC');
	if(!$("#ContentPlaceHolder1_txtSubscribe").val()){
		$( "#ContentPlaceHolder1_lblSubscriptionError" ).text('Please enter an email address.');
	}else{
		$( "#ContentPlaceHolder1_lblSubscriptionError" ).css('color', '#48473E');
		$( "#ContentPlaceHolder1_lblSubscriptionError" ).text('Thank you for subscribing.');
	}
}
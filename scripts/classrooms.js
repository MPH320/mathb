$( document ).ready(function() {
  //console.log("hello")
	//$("table").hide();
});

function classrooms(){
	$( "#ContentPlaceHolder1_h1Current" ).text('Current Classrooms');
	$( "#ContentPlaceHolder1_lblClassroomMessage" ).hide();
}

function noClassrooms(){
	$( "#ContentPlaceHolder1_h1Current" ).text('');
	$( "#ContentPlaceHolder1_lblClassroomMessage" ).show();
}

function save(){

	$( "#ContentPlaceHolder1_lblAddClassroomMessage" ).text('');
	if(!$("#ContentPlaceHolder1_txtClassroomName").val()){
		$( "#ContentPlaceHolder1_lblAddClassroomMessage" ).text('A classroom name is required.');
	}
	else{
		
				
		var tempURL = '../teachers/classroomhelper.php';
		var cName = $("#ContentPlaceHolder1_txtClassroomName").val();
				var desc = $("#ContentPlaceHolder1_txtClassroomDescription").val();
	
		if(!desc){
			tempURL = tempURL + '?cName=' + cName;
		}else{
			tempURL = tempURL + '?cName=' + cName + '&desc=' + desc;
		}
		
		$.ajax({
			url: tempURL,
			success: function (response) {//response is value returned from php (for your example it's "bye bye"
			//alert(response);
				$('table').append(response);
			}
		});
		
		$("#ContentPlaceHolder1_txtClassroomName").val("");
		$("#ContentPlaceHolder1_txtClassroomDescription").val("");
		
	}

}

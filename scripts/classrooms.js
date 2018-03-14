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
}


//ContentPlaceHolder1_h1Current
//Current Classrooms

//ContentPlaceHolder1_lblClassroomMessage
//Create Classrooms to organize your students.  Once you've added a classroom, click on the Students tab to add students. 
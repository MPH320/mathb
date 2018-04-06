$( document ).ready(function() {
  //console.log("hello")
	//$("table").hide();
	
	messageCheck();
	
	$("table").bind("DOMSubtreeModified", function() {
    console.log("Hurrey table changed");

		messageCheck();
		
});

	
	
	
	
});


function messageCheck(){
		var rowCount = $('table tr').length;
		
		
		if(rowCount > 0) {
			$( "#ContentPlaceHolder1_h1Current" ).show();
			$( "#ContentPlaceHolder1_divMessage" ).hide();
		}else{
			$( "#ContentPlaceHolder1_h1Current" ).hide();
			$( "#ContentPlaceHolder1_divMessage" ).show();
		}
}

function classrooms(){
	$( "#ContentPlaceHolder1_h1Current" ).text('Current Classrooms');
	$( "#ContentPlaceHolder1_lblClassroomMessage" ).hide();
}

function noClassrooms(){
	$( "#ContentPlaceHolder1_h1Current" ).text('');
	$( "#ContentPlaceHolder1_lblClassroomMessage" ).show();
}

function editClassroom(event){
	var className = $(event.target).parent().parent().parent().next().children().first().children().first().children().first().next().next().text();
	var classDesc = $(event.target).parent().parent().parent().next().children().first().next().children().first().children().first().next().next().text();
	var otherElement = $(event.target).parent().parent().parent().parent();
	var domElement = $(event.target).parent().parent().parent().parent().prev();
	var targetOne = domElement.children().first().next().children().first().children().first().next().next();
	var targetTwo = domElement.children().first().next().children().first().next().children().first().next().next();
	targetOne.val(className)
	targetTwo.val(classDesc)
	domElement.show();
	otherElement.hide();
}

function cancelEdit(event){
	var otherElement = $(event.target).parents( ".classRoomEdit" );
	var domElement = $(event.target).parents( ".classRoomEdit" ).next();
	domElement.show();
	otherElement.hide();
	
}

function confirmDelete(event) {
	var domElement =$(event.target).parents( "tr" )
	domElement.remove()
}

function cancelDelete(event) {
	var domElement =$(event.target).parents( ".deleteClassroomBoxParent" );
	domElement.hide()
}
	
function deleteClassRoom(event){
	
	var domElement =$(event.target).parents( ".deleteClassroomButtonParent" ).prev();
	domElement.show();

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

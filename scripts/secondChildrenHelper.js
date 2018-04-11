function editStudent(event){
	var domElement = $(event.target).parent().parent();
	var otherElement = $(event.target).parent().parent().prev();
	domElement.hide();
	otherElement.show();
}
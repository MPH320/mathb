$( document ).ready(function() {
  //console.log("hello");
	$("table").hide();
	//$("#ContentPlaceHolder1_divAddStudents").hide();
	
});

function add(){
	//console.log("hello");
	$("#ContentPlaceHolder1_divAddStudents").show();
	$("#ContentPlaceHolder1_divAddMessage").hide();
	$("#ContentPlaceHolder1_btnAdd").hide();
}

function done(){
	console.log("hello");
	$("#ContentPlaceHolder1_divAddStudents").hide();
	$("#ContentPlaceHolder1_divAddMessage").show();
	$("#ContentPlaceHolder1_btnAdd").show();
	
	
}
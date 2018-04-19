var firstName;
var lastName;
var middleName;
var userName;
var passWord;
var birthday;
var savedGrade;
var savedRace;
var savedGender;

function cleanCss(element){
	element.css('color', 'Black');
	element.css('background-color', 'White');
}

function errorCss(element){
	element.css('color', 'White');
	element.css('background-color', '#FF9999');
}

function errorMsg(element, msg){
	element.append(document.createTextNode( msg ));
}

function editStudent(event){
	
	var editStudentDivs = $('.editStudents');
	
	var studentsRowDivs = $('.studentsRow');
	
	var confirmDeleteDivs = $('.editConfirmDelete');
	
	for (i = 0; i < editStudentDivs.length; i++){
		
		if(!$(editStudentDivs[i]).is(':hidden') ){
			
			var valLocation = $(editStudentDivs[i]).children().first().next();
			var errorSpan = valLocation.find( "span" )[16];
			errorSpan = valLocation.find( errorSpan );
			
			var inputParent = valLocation.find('input');
			var selectParent = valLocation.find( "select" );
			
			var fName = valLocation.find( inputParent[4] );
			var mName = valLocation.find( inputParent[5] );
			var lName = valLocation.find( inputParent[6] );
			var uName = valLocation.find( inputParent[7] );
			var pWord = valLocation.find( inputParent[8] );
			var bDay = valLocation.find( inputParent[10] );
			var grade = valLocation.find( selectParent[0] );
			var gender = valLocation.find( selectParent[1] );
			var race = valLocation.find( selectParent[2] );
			var classroom = valLocation.find( selectParent[3] );
			
			errorSpan.text('');
			cleanCss(fName)
			cleanCss(lName)
			cleanCss(uName)
			cleanCss(pWord)
			cleanCss(bDay)
			
			fName.val(firstName);
			mName.val(middleName);
			lName.val(lastName);
			uName.val(userName);
			pWord.val(passWord);
			bDay.val(birthday);
			grade.val(savedGrade);
			race.val(savedRace);
			gender.val(savedGender);
			classroom.val("No Classroom Assigned");
			
		}
		
	}
	
	editStudentDivs.hide();
	confirmDeleteDivs.hide();
	
	
	
	studentsRowDivs.show();
	
	var domElement = $(event.target).parent().parent();
	var otherElement = domElement.prev();
	
	var studentsRowDiv = $(event.target).parents(".studentsRow");
	
	var nameSpans = studentsRowDiv.prev().find('input');
	var selectLoc = studentsRowDiv.prev().find('select');
	
	firstName = studentsRowDiv.prev().find(nameSpans[4]);
	firstName = firstName.val();
	
	middleName = studentsRowDiv.prev().find(nameSpans[5]);
	middleName = middleName.val();
	
	lastName = studentsRowDiv.prev().find(nameSpans[6]);
	lastName = lastName.val();
	
	userName = studentsRowDiv.prev().find(nameSpans[7]);
	userName = userName.val();
	
	passWord = studentsRowDiv.prev().find(nameSpans[8]);
	passWord = passWord.val();
	
	birthday = studentsRowDiv.prev().find(nameSpans[10]);
	birthday = birthday.val();
	
	savedGrade = studentsRowDiv.prev().find(selectLoc[0]);
	savedGrade = savedGrade.val();
	
	savedGender = studentsRowDiv.prev().find(selectLoc[1]);
	savedGender = savedGender.val();
	
	savedRace = studentsRowDiv.prev().find(selectLoc[2]);
	savedRace = savedRace.val();
	
	domElement.hide();
	otherElement.show();

}

function cancelEdit(event){
	var valLocation = $(event.target).parent().parent();
	
	var errorSpan = valLocation.find( "span" )[15];
	errorSpan = valLocation.find( errorSpan )
	
	var inputParent = valLocation.find( "input" );
	var selectParent = valLocation.find( "select" );
	
	var fName = valLocation.find( inputParent[4] );
	var mName = valLocation.find( inputParent[5] );
	var lName = valLocation.find( inputParent[6] );
	var uName = valLocation.find( inputParent[7] );
	var pWord = valLocation.find( inputParent[8] );
	var bDay = valLocation.find( inputParent[10] );
	var grade = valLocation.find( selectParent[0] );
	var gender = valLocation.find( selectParent[1] );
	var race = valLocation.find( selectParent[2] );
	var classroom = valLocation.find( selectParent[3] );
	
	errorSpan.text('');
	cleanCss(fName)
	cleanCss(lName)
	cleanCss(uName)
	cleanCss(pWord)
	cleanCss(bDay)
	
	var domElement = valLocation.parent();
	var otherElement = domElement.next();
	var originalValLoc = otherElement.find("span");
	
	var nameVal = otherElement.find( originalValLoc[5] ).text();
	var uNameVal = otherElement.find( originalValLoc[7] ).text();
	var pWordVal = otherElement.find( originalValLoc[9] ).text();
	var bDayVal = otherElement.find( originalValLoc[13] ).text();
	var gradeVal = otherElement.find( originalValLoc[3]).text();
	var genderVal = otherElement.find( originalValLoc[11] ).text();
	var raceVal = otherElement.find( originalValLoc[15] ).text();
	
	uName.val(uNameVal);
	pWord.val(pWordVal);
	bDay.val(bDayVal);
	grade.val(gradeVal);
	gender.val(genderVal);
	race.val(raceVal);
	classroom.val("No Classroom Assigned");

	fName.val(firstName);
	mName.val(middleName);
	lName.val(lastName);
	
	domElement.hide();
	otherElement.show();

}

function deleteStudent(event){
	var editStudentRowDiv = $(event.target).parents(".editStudentRow");
	var domElement = editStudentRowDiv.children().first();
	var otherElement = domElement.next()
	domElement.show();
	otherElement.hide();
}

function cancelDelete(event){
	var domElement = $(event.target).parent();
	var otherElement = domElement.next();
	domElement.hide();
	otherElement.show();
}

function confirmDelete(event){
	var domElement = $(event.target).parents("tr");
	domElement.remove();
}

function updateStudent(event){
	
	var valLocation = $(event.target).parent().parent();
	
	var errorSpan = valLocation.find( "span" )[16];
	errorSpan = valLocation.find( errorSpan );
	
	var inputParent = valLocation.find( "input" );
	var selectParent = valLocation.find( "select" );
	
	var fName = valLocation.find( inputParent[4] );
	var mName = valLocation.find( inputParent[5] );
	var lName = valLocation.find( inputParent[6] );
	var uName = valLocation.find( inputParent[7] );
	var pWord = valLocation.find( inputParent[8] );
	var bDay = valLocation.find( inputParent[10] );
	var grade = valLocation.find( selectParent[0] );
	var gender = valLocation.find( selectParent[1] );
	var race = valLocation.find( selectParent[2] );
	
	errorSpan.text('');
	cleanCss(fName)
	cleanCss(lName)
	cleanCss(uName)
	cleanCss(pWord)
	cleanCss(bDay)
	
	var success = true;

	if(!fName.val()){
		errorCss(fName)
		errorSpan.text('A first name is required. ');
		success = false;
	}
	
	if(!lName.val()){
		errorCss(lName)
		errorMsg(errorSpan, "A last name is required. ");
		success = false;
	}
	
	if(!uName.val()){
		errorCss(uName)
		errorMsg(errorSpan, "A username is required. ");
		success = false;
	}
	
	if(!pWord.val()){
		errorCss(pWord)
		errorMsg(errorSpan, "A password is required. ");
		success = false;
	}
	
	if(!bDay.val()){
		errorCss(bDay)
		errorMsg(errorSpan, "A birthday is required.");
		success = false;
	}else{

		var d = new Date(bDay.val()).toString();
		if(isNaN(Date.parse(d))){
			errorCss(bDay)
			errorMsg(errorSpan, "Birthday is not in the correct format.")
			success = false;
		}

	}
	
	if (success){
		var edit = $(event.target);
		var changeLoc = edit.parent().parent().parent().next();
		var domElement = changeLoc.find("span");
	
		changeLoc.find( domElement[5] ).text(lName.val() + ", " + fName.val() + " " + mName.val());
		changeLoc.find( domElement[7] ).text(uName.val());
		changeLoc.find( domElement[9] ).text(pWord.val());
		changeLoc.find( domElement[13] ).text(bDay.val());
		changeLoc.find( domElement[3]).text(grade.val());
		changeLoc.find( domElement[11] ).text(gender.val());
		changeLoc.find( domElement[15] ).text(race.val());
		
		var oneElement = edit.parents('.editStudents');
		var secondElement = oneElement.next();
		var deleteElement = oneElement.prev().children().first();
		
		deleteElement.text("Are you sure you want to delete this student - " + fName.val() + " " + lName.val() + "?");
		
		oneElement.hide();
		secondElement.show();
		
		cleanCss(fName)
		cleanCss(lName)
		cleanCss(uName)
		cleanCss(pWord)
		cleanCss(bDay)
	}

}
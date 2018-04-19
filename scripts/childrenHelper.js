var firstName;
var lastName;
var middleName;
var userName;
var passWord;
var birthday;
var savedGrade;
var savedRace;
var savedGender;

function editStudent(event){
	
	var editStudentDivs = $('.editStudents');
	
	var studentsRowDivs = $('.studentsRow');
	
	var confirmDeleteDivs = $('.editConfirmDelete');
	
	for (i = 0; i < editStudentDivs.length; i++){
		
		if(!$(editStudentDivs[i]).is(':hidden') ){

			var valLocation = $(editStudentDivs[i]).children().first().next();
			var errorSpan = valLocation.find( "span" )[15];
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
			
			fName.val(firstName);
			mName.val(middleName);
			lName.val(lastName);
			uName.val(userName);
			pWord.val(passWord);
			bDay.val(birthday);
			grade.val(savedGrade);
			race.val(savedRace);
			gender.val(savedGender);
			
			errorSpan.text('');
			cleanCss(fName)
			cleanCss(lName)
			cleanCss(uName)
			cleanCss(pWord)
			cleanCss(bDay)
			
		}
		
	}
	
	editStudentDivs.hide();
	confirmDeleteDivs.hide();
	studentsRowDivs.show();
	
	var domElement = $(event.target).parent().parent();
	var otherElement = domElement.prev();
	
	var theStudentsRow = $(event.target).parents(".studentsRow").prev();
	
	var nameSpans = theStudentsRow.find('input');
	var selectLoc = theStudentsRow.find('select');
	
	firstName = theStudentsRow.find(nameSpans[4]);
	firstName = firstName.val();
	
	middleName = theStudentsRow.find(nameSpans[5]);
	middleName = middleName.val();
	
	lastName = theStudentsRow.find(nameSpans[6]);
	lastName = lastName.val();
	
	userName = theStudentsRow.find(nameSpans[7]);
	userName = userName.val();
	
	passWord = theStudentsRow.find(nameSpans[8]);
	passWord = passWord.val();
	
	birthday = theStudentsRow.find(nameSpans[10]);
	birthday = birthday.val();
	
	savedGrade = theStudentsRow.find(selectLoc[0]);
	savedGrade = savedGrade.val();
	
	savedGender = theStudentsRow.find(selectLoc[1]);
	savedGender = savedGender.val();
	
	savedRace = theStudentsRow.find(selectLoc[2]);
	savedRace = savedRace.val();
	
	domElement.hide();
	otherElement.show();

}

function deleteStudent(event){
	var domElement = $(event.target).parents(".editStudentRow").children().first();
	var otherElement = domElement.next()
	domElement.show();
	otherElement.hide();
}

function confirmDelete(event){
	var domElement = $(event.target).parents("tr");
	domElement.remove();
}

function cancelDelete(event){
	var domElement = $(event.target).parent();
	var otherElement = domElement.next();
	domElement.hide();
	otherElement.show();
}

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
	
	errorSpan.text('');
	cleanCss(fName)
	cleanCss(lName)
	cleanCss(uName)
	cleanCss(pWord)
	cleanCss(bDay)
	
	var changeLoc = valLocation.parent().next();
	var originalValLoc = changeLoc.find("span");
	
	var nameVal = changeLoc.find( originalValLoc[5] ).text();
	var uNameVal = changeLoc.find( originalValLoc[7] ).text();
	var pWordVal = changeLoc.find( originalValLoc[9] ).text();
	var bDayVal = changeLoc.find( originalValLoc[13] ).text();
	var gradeVal = changeLoc.find( originalValLoc[3]).text();
	var genderVal = changeLoc.find( originalValLoc[11] ).text();
	var raceVal = changeLoc.find( originalValLoc[15] ).text();
	
	uName.val(uNameVal);
	pWord.val(pWordVal);
	bDay.val(bDayVal);
	grade.val(gradeVal);
	gender.val(genderVal);
	race.val(raceVal);

	fName.val(firstName);
	mName.val(middleName);
	lName.val(lastName);

	var domElement = valLocation.parent();
	var otherElement = domElement.next();
	
	domElement.hide();
	otherElement.show();

}

function updateStudent(event){
	
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
		
		var oneElement = $(event.target).parents('.editStudents');
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
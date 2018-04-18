var mode = 'none';

function getStats(){
	
	$.ajax({
			url: '../tournament/tournamenthelper.php',
			success: function (response) {//response is value returned from php (for your example it's "bye bye"
			//alert(response);
				$('#divRankings').prepend(response);
		}
	});
	
}

function easy(){
	
	mode = 'easy';
	
	$('#ContentPlaceHolder1_btnAddition').prop('disabled', false);
	$('#ContentPlaceHolder1_btnAddition').prop('src', '../images/btn_Addition.png');

	$('#ContentPlaceHolder1_btnSubtraction').prop('disabled', false);
	$('#ContentPlaceHolder1_btnSubtraction').prop('src', '../images/btn_Subtraction.png');
	
	$('#ContentPlaceHolder1_btnMultiplication').prop('disabled', true);
	$('#ContentPlaceHolder1_btnMultiplication').prop('src', '../images/btn_Multiplication_Inactive.png');
	
	$('#ContentPlaceHolder1_btnDivision').prop('disabled', true);
	$('#ContentPlaceHolder1_btnDivision').prop('src', '../images/btn_Division_Inactive.png');
}

function medium(){
	mode = 'medium';
	
	$('#ContentPlaceHolder1_btnAddition').prop('disabled', false);
	$('#ContentPlaceHolder1_btnAddition').prop('src', '../images/btn_Addition.png');

	$('#ContentPlaceHolder1_btnSubtraction').prop('disabled', false);
	$('#ContentPlaceHolder1_btnSubtraction').prop('src', '../images/btn_Subtraction.png');
	
	$('#ContentPlaceHolder1_btnMultiplication').prop('disabled', false);
	$('#ContentPlaceHolder1_btnMultiplication').prop('src', '../images/btn_Multiplication.png');
	
	$('#ContentPlaceHolder1_btnDivision').prop('disabled', false);
	$('#ContentPlaceHolder1_btnDivision').prop('src', '../images/btn_Division.png');
	
}

function hard(){
	
	mode = 'hard';
	
	$('#ContentPlaceHolder1_btnAddition').prop('disabled', true);
	$('#ContentPlaceHolder1_btnAddition').prop('src', '../images/btn_Addition_Inactive.png');

	$('#ContentPlaceHolder1_btnSubtraction').prop('disabled', true);
	$('#ContentPlaceHolder1_btnSubtraction').prop('src', '../images/btn_Subtraction_Inactive.png');
	
	$('#ContentPlaceHolder1_btnMultiplication').prop('disabled', false);
	$('#ContentPlaceHolder1_btnMultiplication').prop('src', '../images/btn_Multiplication.png');
	
	$('#ContentPlaceHolder1_btnDivision').prop('disabled', false);
	$('#ContentPlaceHolder1_btnDivision').prop('src', '../images/btn_Division.png');
}

function changeSelection(){
	if (mode == "easy"){
		easy();
	}
	if (mode == "medium"){
		medium();
	}
	if (mode == "hard"){
		hard();
	}
}



$( document ).ready(function() {
	
	$('#ContentPlaceHolder1_btnAddition').click(function() {
		changeSelection();
		$('#ContentPlaceHolder1_btnAddition').prop('src', '../images/btn_Addition_selected.png');
		$('#ContentPlaceHolder1_DataPager1').show();
		getStats()
	});
	
	

	$('#ContentPlaceHolder1_btnSubtraction').click(function() {
		changeSelection();
		$('#ContentPlaceHolder1_btnSubtraction').prop('src', '../images/btn_Subtraction_selected.png');
		$('#ContentPlaceHolder1_DataPager1').show();
		getStats()
	});
	
	
	
	$('#ContentPlaceHolder1_btnMultiplication').click(function() {
		changeSelection();
		$('#ContentPlaceHolder1_btnMultiplication').prop('src', '../images/btn_Multiplication_selected.png');
		$('#ContentPlaceHolder1_DataPager1').show();
		getStats()
	});
	

	
	$('#ContentPlaceHolder1_btnDivision').click(function() {
		changeSelection();
		$('#ContentPlaceHolder1_btnDivision').prop('src', '../images/btn_Division_selected.png');
		$('#ContentPlaceHolder1_DataPager1').show();
		getStats()
	});

});

function getval(sel)
{
	if (sel.value == "1" || sel.value == "2"){
		ContentPlaceHolder1_hSchoolName
		easy();
		showStuff();
	}
	
	else if (sel.value == "3" || sel.value == "4"){
		medium();
		showStuff();
	}
	
	else if (sel.value == "5" || sel.value == "6"){
		hard();
		showStuff();
	}
	else{
		hideStuff();
	}
    
}

function showStuff(){
	$('#ContentPlaceHolder1_hSchoolName').show();
	$('#ContentPlaceHolder1_hMathModes').show();
	$('#mmodes').show();
	
	
}

function hideStuff(){
	mode = 'none';
	
	$('#ContentPlaceHolder1_hMathModes').hide();
	$('#mmodes').hide();
	$('#ContentPlaceHolder1_DataPager1').hide();
}



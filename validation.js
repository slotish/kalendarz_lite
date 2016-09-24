
var months = ['january', 'february', 'march', 'april', 'may', 'juni', 'july', 'august', 'september', 'october',
 'november', 'december']

 var monthCalculator = 0;
	

 function addMonth(n){


 	$('#appendDate' + n).append('<p class="addedForm"><input class=' + months[n] + ' type="text" class="form-control date" placeholder="Wybierz dzień miesiąca"></p>');
 	$('#appendDate' + n).append('<p class="addedForm"><textarea rows="2" maxlength="20" placeholder="Dodaj opis"></textarea></p>');

 }

$(document).ready(function(){

/* Polska wersja datepickera  */
( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( [ "../widgets/datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
}( function( datepicker ) {

datepicker.regional.pl = {
	closeText: "Zamknij",
	prevText: "&#x3C;Poprzedni",
	nextText: "Następny&#x3E;",
	currentText: "Dziś",
	monthNames: [ "Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec",
	"Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień" ],
	monthNamesShort: [ "Sty","Lu","Mar","Kw","Maj","Cze",
	"Lip","Sie","Wrz","Pa","Lis","Gru" ],
	dayNames: [ "Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota" ],
	dayNamesShort: [ "Nie","Pn","Wt","Śr","Czw","Pt","So" ],
	dayNamesMin: [ "N","Pn","Wt","Śr","Cz","Pt","So" ],
	weekHeader: "Tydz",
	dateFormat: "dd.mm.yy",
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: "" };
datepicker.setDefaults( datepicker.regional.pl );

return datepicker.regional.pl;

} ) );
/* Koniec polonizacji */
$('.button_append').click(function(){
	$('.january').datepicker({
			defaultDate: '01.01.2017'
	});

 	$('.february').datepicker({
			defaultDate: '01.02.2017'
	});

	$('.march').datepicker({
			defaultDate: '01.03.2017'
	});

	$('.april').datepicker({
			defaultDate: '01.04.2017'
	});

	$('.may').datepicker({
			defaultDate: '01.05.2017'
	});

	$('.juni').datepicker({
			defaultDate: '01.06.2017'
	});

	$('.july').datepicker({
			defaultDate: '01.07.2017'
	});

	$('.august').datepicker({
			defaultDate: '01.08.2017'
	});

	$('.september').datepicker({
			defaultDate: '01.09.2017'
	});

	$('.october').datepicker({
			defaultDate: '01.10.2017'
	});

	$('.november').datepicker({
			defaultDate: '01.11.2017'
	});

	$('.december').datepicker({
			defaultDate: '01.12.2017'
	});
})
 

})


function submitFormNow(){
	
   	var emailReg = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
	var phone = /\+{0,1}[48]{0,1}\d{9,10}/;
	var onlyLettersAndSpaces = /^[a-zZ-a]{1}[a-ząćśńółęźżĄĘŹŻĆ \.]{0,30}/i;
	var lettersSpacesNumbersAndHashes = /[a-ząćśńółęźżĄĘŹŻĆ \.0-9\/]{0,30}/i;
	var addressReg = /[a-ząćśńółęźżĄĘŹŻĆ\.0-9]{1,20}[\/]{0,1}[a-ząćśńółęźżĄĘŹŻĆ \.0-9]{0,20}/i
	var postalCode = /[0-9\- ]{6,8}/;
	
	var emailVal = $('#inputEmail').val();
	var phoneVal = $('#inputPhoneNumber').val();
	var nameVal = $('#inputName').val();
	var surnameVal = $('#inputSurname').val();
	var cityVal = $('#inputCity').val();
	var streetVal = $('#inputStreet').val();
	var postalCodeVal = $('#inputPostal').val();
	var addressVal = $('#inputLocal').val();


	var emailFlag = emailReg.test(emailVal);
	var phoneFlag = phone.test(phoneVal);
	var nameFlag = onlyLettersAndSpaces.test(nameVal);
	var surnameFlag = onlyLettersAndSpaces.test(surnameVal);
	var cityFlag = onlyLettersAndSpaces.test(cityVal);
	var streetFlag = onlyLettersAndSpaces.test(streetVal);
	var postalCodeFlag = postalCode.test(postalCodeVal);
	var addressFlag = addressReg.test(addressVal);
	var acceptTermsFlag = $('#accept_terms').is(':checked');
	var acceptPersonalData = $('#accept_personal_data').is(':checked');

	var shippingFlag = function(){
		if ($('#inputShipping').val() !== ""){
			return true;
		}else {
			return false;
		}
	}

	var validationArray = [emailFlag, phoneFlag, nameFlag, surnameFlag, cityFlag, streetFlag, postalCodeFlag, addressFlag,
	 shippingFlag, acceptTermsFlag, acceptPersonalData];


	if (!phoneFlag){
		$('#inputPhoneNumber').css('border', '2px solid red');
	}else {
		$('#inputPhoneNumber').css('border', '1px solid #ccc');
	}

	if (!emailFlag){
		$('#inputEmail').css('border', '2px solid red');
	}else {
		$('#inputEmail').css('border', '1px solid #ccc');
	}

	if (!nameFlag){
		$('#inputName').css('border', '2px solid red');
	}else {
		$('#inputName').css('border', '1px solid #ccc');
	}

	if (!surnameFlag){
		$('#inputSurname').css('border', '2px solid red');
	}else {
		$('#inputSurname').css('border', '1px solid #ccc');
	}

	if (!cityFlag){
		$('#inputCity').css('border', '2px solid red');
	}else {
		$('#inputCity').css('border', '1px solid #ccc');
	}

	if (!streetFlag){
		$('#inputStreet').css('border', '2px solid red');
	}else {
		$('#inputStreet').css('border', '1px solid #ccc');
	}

	if (!postalCodeFlag){
		$('#inputPostal').css('border', '2px solid red');
	}else {
		$('#inputPostal').css('border', '1px solid #ccc');
	}

	if (!addressFlag){
		$('#inputLocal').css('border', '2px solid red');
	}else {
		$('#inputLocal').css('border', '1px solid #ccc');
	}

	if (!shippingFlag()){
		$('#inputShipping').css('border', '2px solid red');
	}else {
		$('#inputShipping').css('border', '1px solid #ccc');
	}

	if (!acceptTermsFlag){
		$('#accept_terms_alert').append('  Musisz zaakceptować regulamin!');
		
	}else {
		$('#accept_terms_alert').empty();
	}

	if (!acceptPersonalData){
		$('#accept_personal_data_alert').append('  Musisz wyrazić zgodę na przetwarzanie danych osobowych!');
		
	}else {
		$('#accept_personal_data_alert').empty();
	}



	var positiveFlagsCounter = 0;
	for (var i = 0; i <= validationArray.length; i++){
		if (validationArray[i]){
			positiveFlagsCounter += 1;
		}
	}

	console.log(addressFlag);

	if (positiveFlagsCounter === 11){
		window.location.href = 'thankyou.html';
	} 


	
 }

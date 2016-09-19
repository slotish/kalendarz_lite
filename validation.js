
var months = ['january', 'february', 'march', 'april', 'may', 'juni', 'july', 'august', 'september', 'october',
 'november', 'december']

 function setDatePicker(){
 	for (var i = 0; i<=months.length; i++){
    	tmp = i+1;
    
	$('#' + months[i]).datepicker({
		defaultDate: '01.0' + tmp + '.2017'
	});

	}
 }

 function addMonth(n){

 	$('#appendDate' + n).append('<input id=' + months[n] + ' type="text" class="form-control date" placeholder="Wybierz dzień miesiąca">\r');
 	$('#appendDate' + n).append('<textarea rows="2" maxlength="20" placeholder="Dodaj opis"></textarea>\r')
 	setDatePicker();
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


})


function submitFormNow(){
	
   	var emailReg = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
	var phone = /\+{0,1}[48]{0,1}\d{9,10}/;
	var onlyLettersAndSpaces = /^[a-zZ-a]{1}[a-ząćśńółęźżĄĘŹŻĆ \.]{0,30}/i;
	var lettersSpacesNumbersAndHashes = /[a-ząćśńółęźżĄĘŹŻĆ \.0-9\/]{0,30}/i;
	var addressReg = /[a-ząćśńółęźżĄĘŹŻĆ \.0-9]{0,20}[\/]{0,1}[a-ząćśńółęźżĄĘŹŻĆ \.0-9]{0,20}/i
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

	var shippingFlag = function(){
		if ($('#inputShipping').val() !== ""){
			return true;
		}else {
			return false;
		}
	}

	var validationArray = [emailFlag, phoneFlag, nameFlag, surnameFlag, cityFlag, streetFlag, postalCodeFlag, addressFlag,
	 shippingFlag, acceptTermsFlag];


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



	var positiveFlagsCounter = 0;
	for (var i = 0; i <= validationArray.length; i++){
		if (validationArray[i]){
			positiveFlagsCounter += 1;
		}
	}

	console.log(addressFlag);

	if (positiveFlagsCounter === 10){
		window.location.href = '/some/new/page';
	} else {
		alert("Uzupełnij arkusz aby przejśc dalej!")
	}


	
 }

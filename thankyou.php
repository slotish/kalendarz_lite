<?php
//Not implemented yet!
function securityCheck($_str){
	return $_str;
}

function orderMail($_data){
	$dictionary = array(
		"template" => "Szablon",
		"templatesNames" => array("Leon kot", "Osioł Robert", "Kozioł Michał", "Szop Andrzej"),
		"calendarsAmount" => "Ilośc zamawianych kalendarzy:",
		"name" => "Imię",
		"surname" => "Nazwisko",
		"email" => "Email",
		"phoneNumber" => "Numer telefonu",
		"street" => "Ulica",
		"local" => "Numer mieszkania",
		"city" => "Miejscowość",
		"postal" => "Kod pocztowy",
		"shipping" => "Dostawa",
		"comments" => "Uwagi klienta",
		"monthsNames" => array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"),
		"monthsKeysPatrs" => array(	"prefix" => "month",
							"dateSuffinx" => "date",
							"commentSuffix" => "comment",
							"dateTranslation" => "Dzień",
							"commentTranslation" => "Opis"),					
	);

	$result = "Zalecenie.\n";
	
	$comments = array();
	foreach ($_data as $key => $value){
		$parts = explode("_", $key);
		if ($parts[0] == $dictionary["monthsKeysPatrs"]["prefix"] ){
			$monthID = $parts[1];
			$monthCommentID = $parts[2];
			$suffix = $parts[3];
			if (!array_key_exists($monthID, $comments)){
				$comments[$monthID] = array();
			}
			if (!array_key_exists($monthCommentID, $comments[$monthID])){
				$comments[$monthID][$monthCommentID] = array("day"=>"", "comment" => "");
			}
			if ($suffix == $dictionary["monthsKeysPatrs"]["dateSuffinx"]){
				$comments[$monthID][$monthCommentID]["day"] = $value;
			}
			if ($suffix == $dictionary["monthsKeysPatrs"]["commentSuffix"]){
				$comments[$monthID][$monthCommentID]["comment"] = $value;
			}
		}
	}
	$result .= "Komentarze:\n";
	foreach ($comments as $key => $monthValue){
		$result .= "\t".$dictionary["monthsNames"][intval ($key)]."\n";
		foreach ($monthValue as $key => $commentValue){
			$result .= "\t\t".$dictionary["monthsKeysPatrs"]["dateTranslation"].": ".$commentValue["day"]."\n";
			$result .= "\t\t".$dictionary["monthsKeysPatrs"]["commentTranslation"].": ".$commentValue["comment"]."\n\n";
		}
	}
	$result .= "Dane zamawiającego:\n";
	
	foreach ($dictionary as $key => $value) {
		if (is_array($value))
			continue;
		$clientValue = 	$_POST[$key];
		if ($key == "template")
			$clientValue = $dictionary["templatesNames"][intval($clientValue)];
		$result.= "\t".$value.": ".securityCheck($clientValue)."\n";
	}
	$result .= "\n\nTa wiadomość została wygenerowa automatycznie. Opisywanie na nią, nie kieruje widomości do klienta!\n";
	
	return $result;
}

$to = "drukarniarawicz@gmail.com";
$subject = "Zlecenie kalendarza";
$txt = orderMail($_POST);
$headers =  "From: klient@drukarniarawicz.pl" . "\r\n" ;

$result = mail($to,$subject,$txt, $headers);

?>

<!DOCTYPE html>
<html class="mouseClass">

<head>
    <meta charset="UTF-8">
    <title>Kalendarz</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
    <!-- Scripts -->




    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
  
<body>
<div id="top_menu_index">
  <a name="top_Anchor" id="top_Anchor">
  <div class="row">
    <div class="col-sm-1 col-md-1 col-lg-1">
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
       <a href="http://drukarniarawicz.pl"><img class="top_menu_logo" src="images/Logo.png"></a>
    </div>
        
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
      <div>
        <p class="top_menu_text text_no_1"><a href="/kalendarz"> Menu </a></p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
      <div>
         <p class="top_menu_text text_no_2"><a href="#"> Pomoc </a></p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
      <div >
        <p class="top_menu_text text_no_3"><a href="terms.html"> Regulamin </a></p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
       <p class="top_menu_text text_no_3"><a href="#"> Cennik </a></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <h1> Twoje zamowienie zostało przyjęte. Dziekujemy!</h1>
    <h2>
    W przeciagu 24 godzin otrzymasz od nas maila na adres: <div id="mail_sent"><?=$_POST["email"]?></div> z potwierdzeniem. Gdyby taka informacja do Ciebie nie dotarła - prosimy o kontakt.
    </h2>
  </div>
</div>

</body>

<script type="text/javascript" src="jquery2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
</html>
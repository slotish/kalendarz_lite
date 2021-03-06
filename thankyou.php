<?php
/******************************************
*           Functions sectrion
*******************************************/
define("MAX_IMAGE_SIZE", 50000000); //bytes
//Not implemented yet!
function securityCheck($_str){
	return $_str;
}

function orderMail($_data, $_link){
	$calendar_url_root = "http://www.drukarniarawicz.pl/kalendarz/";
	$dictionary = array(
		"template" => "Szablon",
		"templatesNames" => array("Pierwszy", "Perłowy", "Przyjazny", "Łatwy", "Rawicki", "Inblue", "Pinky", "Melanż"),
		"format" => "Format kalendarza",
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
	$result .= "Link do zdjęć(): ".$calendar_url_root.$_link."\n";
	
	$result .= "Dane zamawiającego:\n";
	
	foreach ($dictionary as $key => $value) {
		if (is_array($value))
			continue;
		$clientValue = 	$_POST[$key];
		if ($key == "template")
			$clientValue = $dictionary["templatesNames"][intval($clientValue)];
		$result.= "\t".$value.": ".securityCheck($clientValue)."\n";
	}
	$result .= "\n\nTa wiadomość została wygenerowa automatycznie. Odpisywanie na nią, nie kieruje widomości do klienta!\n";
	
	return $result;
}

function packImages($_files, $_path, &$errors){
	$MAX_IMAGE_SIZE = 50000000;
	$ALLOWED_FILE_EXTENSIONS = array("jpg", "png", "jpeg");
	$monthsNames = array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");
	$errorTypes = array("MISSING_FILE" => "Brakuje pliku",
						"FILE_IS_NOT_AN_IMAGE" => "Wybrany plik nie jest obrazem",
						"WRONG_FORMAT" => "Wybrano niepoprawny format pliku. Obsługiwane formaty to ". implode(", ",$ALLOWED_FILE_EXTENSIONS),
						"TOO_LARGE" => "Wybrany plik jest zbyt duży. Maksymalny rozmiar to ".($MAX_IMAGE_SIZE / (1024*1024))."MB");
	$success = true;
	$imagesArchivePath = $_path.'images.zip';
	$zip = new ZipArchive;
	if (!$zip->open($imagesArchivePath, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE)){
		die('Internal server error. Please contact us at drukarniarawicz@gmail.com');
	}
	for ($i = 0 ; $i < 12 ; $i++){
		$errors[$i] = "";
		$errorMsgPrefix = "Obraz dla miesiąca ".$monthsNames[$i]." jest niepoprawny. Przyczyna: ";
		$uploadOk = 1;
		$inputFile = $_files["file".$i];
		if ($inputFile["name"] == ""){
			$errors[$i] = $errorMsgPrefix.$errorTypes["MISSING_FILE"];
			$success = false;
			continue;
		}
		$imageFileType = pathinfo(basename($inputFile["name"]) ,PATHINFO_EXTENSION);
		$file_new_path = "miesiac_".($i+1);
		$target_file = $file_new_path.".".$imageFileType;
		
		$check = getimagesize($inputFile["tmp_name"]);
		if($check === false) {
			$errors[$i] = $errorMsgPrefix.$errorTypes["FILE_IS_NOT_AN_IMAGE"];
			$success = false;
			continue;
		}
		
		$extensionOk = 0;
		
		foreach ($ALLOWED_FILE_EXTENSIONS as $ext){
			if ($imageFileType == $ext){
				$extensionOk = 1;
			}
		}
		// Allow certain file formats
		if($extensionOk == 0) {
			$errors[$i] = $errorMsgPrefix.$errorTypes["WRONG_FORMAT"];
			$success = false;
			continue;
		}
		// Check file size
		if ($inputFile["size"] > $MAX_IMAGE_SIZE) {
			$errors[$i] = $errorMsgPrefix.$errorTypes["TOO_LARGE"];
			$success = false;
			continue;
		}

		$zip->addFile($inputFile["tmp_name"],$target_file);
		
	}
	if ($success){
		$zip->close();
	} else {
		$zip->unchangeAll();
		return false;
	}
	
	return $imagesArchivePath;
}


function getNewUserID(){
	$result = 0;
	while(true){
		$result = rand();
		if (!file_exists("uploads/".$result)){
			return $result;
		}
	}
}

/******************************************
*           Main sectrion
*******************************************/


session_start();
$_SESSION["captchaFood"] = true;
$errorMsg = "<h2>No error message</h2>";
$userID = getNewUserID();
$errors = array();

if(!isset($_SESSION["captchaFood"]) || !$_SESSION["captchaFood"]){
	$errorMsg = '<h2>Please check the the captcha form.</h2>';
} else {
	$_SESSION["captchaFood"] = false;
	//handle files
	if (!file_exists("uploads/".$userID) && !mkdir("uploads/".$userID)) {
		die('Internal server error. Please contact us at drukarniarawicz@gmail.com'.$userID);
	}
	chmod("uploads/".$userID, 0755);
	
	$link = packImages($_FILES, "uploads/".$userID."/", $errors);
	$hugeSuccess = true;
	
	if ($link){
		//prepare email with order
		$to = "drukarniarawicz@gmail.com";
		$subject = "Zlecenie kalendarza";
		$txt = orderMail($_POST, $link);
		$headers =  "From: klient@drukarniarawicz.pl" . "\r\n" ;
		$result = mail($to,$subject,$txt, $headers);
	} else {
		$hugeSuccess = false;
	}
}

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
       <p class="top_menu_text text_no_3"><a href="costs.html"> Cennik </a></p>
    </div>
  </div>
</div>
<div class="container">
<?php if ($hugeSuccess){ ?>
  <div class="col-lg-12 col-md-12 col-sm-12">
    <h1> Twoje zamowienie zostało przyjęte. Dziekujemy!</h1>
    <h2>
    W przeciagu 24 godzin otrzymasz od nas maila na adres: <div id="mail_sent"><?=$_POST["email"]?></div> z potwierdzeniem. Gdyby taka informacja do Ciebie nie dotarła - prosimy o kontakt.
    </h2>
  </div>
<?php } else {?>
  <div class="errorsContainer">
  <h1> Przykro nam Twoje zamówienie nie zostało przyjęte.</h1>
  <? foreach($errors as $err){
	if ($err){
		?>
			<p class="errorMsg"><?=$err?></p>
		<?
	}
  } ?>
  </div>
<?php }?>  
</div>

</body>

<script type="text/javascript" src="jquery2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
</html>
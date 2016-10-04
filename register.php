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
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
  
<body>
    <div id="top_menu">
      <a name="top_Anchor" id="top_Anchor">
      <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <a href="http://drukarniarawicz.pl"><img class="top_menu_logo" src="images/Logo.png"></a>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
          <div>
            <p class="top_menu_text text_no_1"><a href="/kalendarz"> Menu </a></p>
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
      <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
      </div>
</div>



<form id="registerForm" method="POST" action="thankyou.php">
	<input type="hidden" name="template" value="<?=intval($_GET["id"])?>"/>
	<div class="container">
	 <div class="row">
	  <div class="col-lg-12 col-md-12 col-sm-12">
		<h2>
		  ZAMÓWIENIE KALENDARZA
		</h2>
	  </div>
	  <div class="col-lg-12 col-md-12 col-sm-12">
	  <div class="form-group">
		  <p class="paddingForm">Ilośc zamawianych kalendarzy:</p>
		  <input type="number" name="calendarsAmount" class="form-control" id="calendars_amount" min="1" value="1">
      <p id="total_money_sum">Koszt twojego zamówienia to 30 zł</p>
	   </div>
	  </div>
	 </div>
	</div>
  <div class="container">
    
       <p class="paddingForm">Unikatowe wpisy pod datami Twojego kalendarza</p>
    

    <div class="col-lg-6 col-md-6 col-sm-6 center-text">
       <p class="monthHeader">Styczeń</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(0)">Dodaj opis</button>
       <div id="appendDate0">
       </div>

       <p class="monthHeader">Luty</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(1)">Dodaj opis</button>
       <div id="appendDate1">
       </div>

       <p class="monthHeader">Marzec</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(2)">Dodaj opis</button>
       <div id="appendDate2">
       </div>

       <p class="monthHeader">Kwiecień</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(3)">Dodaj opis</button>
       <div id="appendDate3">
       </div>

       <p class="monthHeader">Maj</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(4)">Dodaj opis</button>
       <div id="appendDate4">
       </div>

       <p class="monthHeader">Czerwiec</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(5)">Dodaj opis</button>
       <div id="appendDate5">
       </div> 
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
       <p class="monthHeader">Lipiec</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(6)">Dodaj opis</button>
       <div id="appendDate6">
       </div>

       <p class="monthHeader">Sierpień</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(7)">Dodaj opis</button>
       <div id="appendDate7">
       </div>

       <p class="monthHeader">Wrzesień</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(8)">Dodaj opis</button>
       <div id="appendDate8">
       </div>

       <p class="monthHeader">Październik</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(9)">Dodaj opis</button>
       <div id="appendDate9">
       </div>

       <p class="monthHeader">Listopad</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(10)">Dodaj opis</button>
       <div id="appendDate10">
       </div>

       <p class="monthHeader">Grudzień</p>
       <button class="btn btn-default button_append" type="button" onclick="addMonth(11)">Dodaj opis</button>
       <div id="appendDate11">
       </div> 
    </div>
  </div>

  <div class="container">
   <div class="col-lg-12 col-md-12 col-sm-12"> 
   <h2 class="paddingForm">
      Uwaga!
   </h2>
   <p>
    Wybrane przez Państwa zdjęcia do kalendarza, aby jakość ich po wydrukowaniu nie

wzbudzała zastrzeżeń, powinny mieć min. 1600 pikseli po krótszym boku.

Fotografie do wybranego przez Państwa kalendarza, po wypełnieniu formularza,

prosimy o wysłanie mailem na adres: drukarniarawicz@gmail.com .

Jednocześnie prosimy o nadanie nazw miesięcy poszczególnym fotografiom zgodnie

z ich przeznaczeniem.

W jednym mailu można przesłać załącznik o max objętości 20 MB, a więc wybrane

zdjęcia należy podzielić na klika części, lub przesłać na nasz adres przy pomocy

wybranej zewnętrznej aplikacji (np. www.wetransfer.com)
   </p>
   </div>
  </div>

  <div class="container">
    <p class="paddingForm">
      Dane osobowe do zamówienia
    </p>
   <div class="col-lg-12 col-md-12 col-sm-12"> 

      <div class="form-group">
        <label for="inputName"><p>Imię*:</p></label>
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Nazwisko">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <div class="form-group">
        <label for="inputSurname"><p>Nazwisko*:</p></label>
        <input type="text" name="surname" class="form-control" id="inputSurname" placeholder="Nazwisko">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <div class="form-group">
        <label for="inputEmail"><p>Email*:</p></label>
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <div class="form-group">
        <label for="inputPhoneNumber"><p>Numer telefonu*:</p></label>
        <input type="text" name="phoneNumber" class="form-control" id="inputPhoneNumber" placeholder="Numer telefonu - bez spacji między cyframi!">
      </div>
    </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
       <div class="form-group">
        <label for="inputStreet"><p>Ulica*:</p></label>
        <input type="text" name="street" class="form-control" id="inputStreet" placeholder="Ulica">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
       <div class="form-group">
        <label for="inputLocal"><p>Numer mieszkania*:</p></label>
        <input type="text" name="local" class="form-control" id="inputLocal" placeholder="Numer posesji / numer lokalu">
      </div>
    </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
       <div class="form-group">
        <label for="inputCity"><p>Miasto*:</p></label>
        <input type="text" name="city" class="form-control" id="inputCity" placeholder="Miasto">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
       <div class="form-group">
        <label for="inputLocal"><p>Kod pocztowy*:</p></label>
        <input type="text" name="postal" class="form-control" id="inputPostal" placeholder="Kod pocztowy np: 63-900">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <label for="comments"><p>Twoje uwagi dot. zamówienia:</p></label>
      <textarea name="comments" class="form-control" rows="3" id="comments" maxlength="200" placeholder="Twoje uwagi - limit 200 znaków"></textarea>
    </div>
     <div class="col-lg-12 col-md-12 col-sm-12"> 
      <p>Zabezpieczenie anty-spamowe:*</p>
      <div class="g-recaptcha" data-sitekey="6LfrrQcUAAAAAFMqCkuZacpK7roGYvlOD1cCL2gB"></div>
      <p id="re_captcha_alert"></p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <div class="checkbox">
        <label>
          <input type="checkbox" class="submit_checkbox" id="accept_terms"> <p id="accept_terms_text">Oświadczam że zapoznałem się i akceptuję <a class="red" href="terms.html" target="_blank">REGULAMIN</a> przyjmowania zleceń firmy Multigraf Zygmunt Musielak *.</p>
          <p id="accept_terms_alert"></p>
        </label>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <div class="checkbox">
        <label>
          <input type="checkbox" class="submit_checkbox" id="accept_personal_data"> <p>Wyrażam zgodę na przetwarzanie przez firmę Multigraf Zygmunt
          Musielak danych osobowych zawartych w niniejszym formularzu w
          celach związanych z realizacją zamówienia zgodnie z ustawą z dnia
          29.08.1997 r. o ochronie danych osobowych.*</p><p id="accept_personal_data_alert"></p>
        </label>

      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
     <p> * Pola wymagane do wypełnienia.</p>
    </div>

    </div>
    
  

    <button type="button" id="submit_form" onclick="submitFormNow()" class="btn btn-default teaser_button"><p class="text-center">Prześlij</p></button>
  </div>
</form>
</div>
<div id="bottom_menu">
  <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
      <a href="http://drukarniarawicz.pl"><img class="img-responsive center-block" src="images/Logo.png"></a>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
      <p id="back_to_top" class="top_menu_text text_no_5"><a href="#top_Anchor"> Powrót na górę strony </a></p>
    </div>
  </div>
</div>
</body>

<script type="text/javascript" src="jquery2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
</html>
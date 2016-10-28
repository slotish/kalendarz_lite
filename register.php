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



<form id="registerForm" method="POST" action="thankyou.php" enctype="multipart/form-data">
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
        <p class="paddingForm">Wybierz format kalendarza:</p>
          <select name="format" class="form-control" id="formatInput">
              <option value="A3" >Kalendarz A3</option>
              <option value="A4" >Kalendarz A4</option>
          </select>
		  <p class="paddingForm">Ilośc zamawianych kalendarzy:</p>
		  <input type="number" name="calendarsAmount" class="form-control" id="calendars_amount" min="1" value="1">
      <p id="total_money_sum">Koszt twojego zamówienia to 30 zł - bez ceny wysyłki</p>
	   </div>
	  </div>
	 </div>
	</div>
  <div class="container">
  <p class="paddingForm">Dołącz do zamówienia wybrane pliki fotografii, odpowiednio do kolejnych miesięcy:</p>
  <p class="centered">
  UWAGA!
  </p>
  <p>
      Wybrane przez Państwa zdjęcia do kalendarza, aby jakość ich po wydrukowaniu nie
      wzbudzała zastrzeżeń, powinny mieć min. 1600 pikseli po krótszym boku.
  </p>

  <div class="col-lg-6 col-md-6 col-sm-6 center-text">
       <p class="monthHeader">Styczeń</p>
          <a id="visibleInputButton1" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input1 " disabled>
          <input id="hiddenInput1"  name="file0" type="file" class="f input-large" />
       

       <p class="monthHeader">Luty</p>
           <a id="visibleInputButton2" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input2" disabled>
          <input id="hiddenInput2"  name="file1" type="file" class="f input-large" />
       

       <p class="monthHeader">Marzec</p>
           <a id="visibleInputButton3" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input3" disabled>
          <input id="hiddenInput3"  name="file2" type="file" class="f input-large" />

       <p class="monthHeader">Kwiecień</p>
           <a id="visibleInputButton4" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input4" disabled>
          <input id="hiddenInput4"  name="file3" type="file" class="f input-large" />

       <p class="monthHeader">Maj</p>
           <a id="visibleInputButton5" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input5" disabled>
          <input id="hiddenInput5"  name="file4" type="file" class="f input-large" />

       <p class="monthHeader">Czerwiec</p>
           <a id="visibleInputButton6" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input6" disabled>
          <input id="hiddenInput6"  name="file5" type="file" class="f input-large" />
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
       <p class="monthHeader">Lipiec</p>
           <a id="visibleInputButton7" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input7" disabled>
          <input id="hiddenInput7"  name="file6" type="file" class="f input-large" />
       <p class="monthHeader">Sierpień</p>
           <a id="visibleInputButton8" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input8" disabled>
          <input id="hiddenInput8"  name="file7" type="file" class="f input-large" />
       <p class="monthHeader">Wrzesień</p>
           <a id="visibleInputButton9" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input9" disabled>
          <input id="hiddenInput9"  name="file8" type="file" class="f input-large" />
       <p class="monthHeader">Październik</p>
           <a id="visibleInputButton10" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input10" disabled>
          <input id="hiddenInput10"  name="file9" type="file" class="f input-large" />
       <p class="monthHeader">Listopad</p>
           <a id="visibleInputButton11" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input11" disabled>
          <input id="hiddenInput11"  name="file10" type="file" class="f input-large" />
       <p class="monthHeader">Grudzień</p>
           <a id="visibleInputButton12" class="btn btn-default visible_input">
            <p class="input_txt">Dodaj zdjęcie</p>
          </a>     
          <input type="text" id="subfile" class="input-sm text_input12" disabled>
          <input id="hiddenInput12"  name="file11" type="file" class="f input-large" />
    </div>
  </div>



  <div class="container">
    
       <p class="paddingForm">Unikatowe wpisy pod datami Twojego kalendarza</p>
    

    <div class="col-lg-6 col-md-6 col-sm-6 center-text">
       <p class="monthHeader">Styczeń</p>
       <button id="add_description" class="btn btn-default button_append" type="button" onclick="addMonth(0)">Dodaj opis</button>
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
        <p class="top_indent_register">
                   W ciągu 24 godzin od otrzymania zamówienia - wysyłamy projekt wybranego przez

        Państwa kalendarza, wraz z fotografiami, do akceptacji.</p>
        <p>

        Gdyby taka informacja do Państwa nie dotarła - prosimy o kontakt.

        Po akceptacji i ew. dokonaniu przedpłaty (zależnie od wybranej opcji dostawy),

        otrzymacie Państwo w ciągu 3 dni roboczych (od odnotowania wpłaty na koncie)

        informację o wysłaniu zamówienia albo o możliwości jego osobistego odbioru.
        </p>
        <p>
        W razie jakichkolwiek wątpliwości, prosimy o kontakt telefoniczny lub mailowy.
        </p>

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
      <div class="form-group">
        <label for="inputPrice"><p>Opcja dostawy*:</p></label>
        <select class="form-control" id="inputShipping">
          <option></option>
          <option>Odbiór własny w siedzibie firmy w godz. 8-15 - 0 zł</option>
          <option>Przesyłka pocztowa zwykła - 8 zł</option>
          <option>Przesyłka kurierska - 14 zł</option>
       </select>
      </div>
      <div class="totalCostValue">

      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"> 
      <label for="comments"><p>Twoje uwagi dot. zamówienia:</p></label>
      <textarea name="comments" class="form-control" rows="3" id="comments" maxlength="200" placeholder="Twoje uwagi - limit 200 znaków"></textarea>
    </div>
    <!--
     <div class="col-lg-12 col-md-12 col-sm-12"> 
      <p>Zabezpieczenie anty-spamowe:*</p>
      <div class="g-recaptcha" data-sitekey="6LfrrQcUAAAAAFMqCkuZacpK7roGYvlOD1cCL2gB"></div>
      <p id="re_captcha_alert"></p>
    </div>
    -->
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
    
  

    <button type="button" id="submit_form" onclick="submitFormNow()" class="btn btn-default teaser_button"><p class="text-center">Zamawiam</p></button>
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
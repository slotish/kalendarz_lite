<!DOCTYPE html>

<html class="mouseClass">

<head>
    <meta charset="UTF-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <!-- NO FOLLOW NO INDEX !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <title>Kalendarz</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
    <!-- Scripts -->

    <!-- próbne
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="jqueryrotate.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <SCRIPT TYPE="text/javascript" SRC="site.js"></SCRIPT>
-->

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
    W przeciagu 24 godzin otrzymasz od nas maila na adres: <div id="mail_sent"></div> z potwierdzeniem. Gdyby taka informacja do Ciebie nie dotarła - prosimy o kontakt.
    </h2>
  </div>
</div>

</body>

<script type="text/javascript" src="jquery2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
</html>
<?
print_r($_POST);
?>
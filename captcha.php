<?php
session_start();

$errorMsg = "<h2>No error message</h2>";


if(isset($_POST['captchaFood'])){
  $captcha=$_POST['captchaFood'];
}
if(!$captcha){
	echo '<h2>Please check the the captcha form.</h2>';
} else {
	$secretKey = "6LfrrQcUAAAAAGahPCGFDfnl5KK6tPN_tElJU9E5";
	$ip = $_SERVER['REMOTE_ADDR'];
	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
	if(intval($responseKeys["success"]) !== 1) {
		echo '<h2>You are spammer ! Get the @$%K out</h2>';
	} else {
		$_SESSION["captchaFood"] = true;
	}
}
?>
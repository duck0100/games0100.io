<?php
include("../res/x5engine.php");
$nameList = array("uls","2mu","cku","435","g36","knr","vwu","djy","pee","kta");
$charList = array("A","3","R","U","H","T","M","S","V","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

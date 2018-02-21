<?php
include "class.php";

/*$user = new User;
$user->setname('Vasya_Pupkin');
$user->setpassword('xxxxx');

//echo $user->getname().'<br>';
//echo $user->getpassword().'<br>';*/

$adres = new advanceduser();
$adres->setname('Vasya_Pupkin');
$adres->setpassword('xxxxx');
$adres->setadres('Grushevskogo 54b');

echo $adres->getname()."<br>Pass: ".$adres->getpassword()."<br>Adres: ".$adres->getadres();

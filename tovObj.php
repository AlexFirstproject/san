<?php
include "tovClass.php";
if ($_POST[task] == "set"){
    /*$name = htmlspecialchars($_POST[name]);
    $code = htmlspecialchars($_POST[code]);
    $descr = htmlspecialchars($_POST[description]);
    $price = htmlspecialchars($_POST[price]);
    $avabil = htmlspecialchars($_POST[availability]);*/
    $setTov = new tovDb();
    $setTov->setTovdb($_POST[name], $_POST[code], $_POST[description], $_POST[price], $_POST[availability]);
}elseif ($_POST[task] == 'redact'){
    $redTov = new tovDb();
    $redTov->redactTovdb($_POST[name], $_POST[code], $_POST[description], $_POST[price], $_POST[availability], $_POST[id]);
}
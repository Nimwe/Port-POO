<?php
function charge($nomclasse) {
    require ($nomclasse.".php");
}

spl_autoload_register('charge');

$brest = new Port(' Brest');

$voilier = new Voilier(120);
$zodiac = new Zodiac(23);
$fregate = new Fregate(500);

$brest->accueilEngin($voilier);
$brest->accueilEngin($zodiac);
$brest->accueilEngin($fregate);




?>
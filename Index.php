<?php
include_once ".\Titulaire.php";

$test = new Titulaire("Jean","Valjean","1900-01-01", "Marseil");

echo $test->getNoms();



$compte = new compte ($test,"eparne" );

echo $solde;
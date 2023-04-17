<?php
include_once ".\Titulaire.php";
include_once ".\Compte.php";

$titulaire1 = new Titulaire("Jean","Valjean","1900-01-01", "Marseil");
$titulaire2 = new Titulaire("Pierre","Lerock","2015-08-28", "Ferrete");



$comptEparneJean = new Compte ($titulaire1,"eparne", -700, "franc" );

$compteCourantJean = new Compte ($titulaire1,"courant" );

$compteCourantPierre = new Compte ($titulaire2,"courant", 500, "euro" );

$compteJeunePierre = new Compte ($titulaire2,"Jeune", 200000 );


echo $titulaire1->getInfo();

echo $titulaire2->getInfo();

echo $compteCourantJean->getSolde(). "<br>";
echo $compteCourantPierre->getSolde(). "<br> ";

$compteCourantPierre->transfert($compteCourantJean, 200 );

echo $compteCourantJean->getSolde() ."<br> ";
echo $compteCourantPierre->getSolde(). "<br> ";
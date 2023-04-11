<?php 


/*
Les exercices suivants ont pour objectif de vous faire construire des classes et d'instancier des objets
y répondant, comportant les propriétés et méthodes nécessitées par les consignes. Prêtez attention
aux détails, testez souvent votre code et ne vous souciez pas du rendu visuel de vos affichages, ce
n'est pas le but premier de l'exercice.
I. Banque
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
et leurs comptes bancaires respectifs.
Un compte bancaire est composé des éléments suivants :
Un libellé (compte courant, livret A, ...)
Un solde initial
Une devise monétaire
Un titulaire unique
Un titulaire comporte :
Un nom
Un prénom
Une date de naissance
Une ville
L'ensemble de ses comptes bancaires.
Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros
Débiter le compte de X euros
Effectuer un virement d'un compte à l'autre.
On doit pouvoir :
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes
appartenant à celui(celle)-ci.
Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du
titulaire du compte.
*/

/*class compte banquaire 

Un libellé string 
Un solde initial (50)
Une devise monétaire euro 
Un titulaire unique a voir



Un titulaire comporte :
Un nom 

Un prénom

Une date de naissance

Une ville


L'ensemble de ses comptes bancaires.
Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros
Débiter le compte de X euros
Effectuer un virement d'un compte à l'autre.
On doit pouvoir :


Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes
appartenant à celui(celle)-ci.

*/

class Titulaire
{
    private $noms;

    private $prénoms;
    private $comptes=[];
 
    
    //date de naisance 
    private $dDN;
    private $ville;
    public function __construct($noms,$prénoms,$dDN,$ville) {
        $this->noms = $noms;
        $this->prénoms = $prénoms;
        $this->dDN = new DateTime ("$dDN");
        $this->ville = $ville;
    }

public function newCompte($id,$libellé ,$solde=50,$devise="euro")
{
    $compte = new Compte ("$this->noms"."$this->prénoms. $this->dDN.$this->ville",$libellé ,$solde=50,$devise="euro") ; 
    array_push($this->comptes ,$compte);
     return $compte;
}

public function getNoms (){


    return $this->noms;
}
public function identifiant(){
    echo $this->noms,$this->prénoms,$this->ville,$libellé ;
}




}

class Compte
{
   private Titulaire $titulaire; 
   private  $libellé;
   public   $solde;
   private  $devise;


   public function __construct( $titulaire,$libellé, $solde=50,$devise="euro" ) {
    $this->titulaire = $titulaire;
    $this->libellé = $libellé;
    $this->solde = $solde;
    $this->devise = $devise;
    }

    public function test(){
        echo "test";
    }
}



$test = new Titulaire("Jean","Valjean","1900-01-01", "Marseil");

echo $test->getNoms();
$compte1;
$compte1= +$test->newCompte("eparne" , 17);

echo $compte1->solde;
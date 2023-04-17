<?php 
class Titulaire
{

    /// Mieux en methode utilisant la date de naisance
    // private string  $age;
    
    public string  $noms;

    private string $prenoms;

    private array $comptes;

    //date de naisance 

    private DateTime $dDN;

    private  string $ville;



    public function __construct($noms,$prenoms,$dDN,$ville) {
        $this->noms = $noms;
        $this->prenoms = $prenoms;
        $this->dDN = new DateTime ($dDN);
        $this->ville = $ville;
        // $this->age = $this->age();
    }



//_____________________________________________________________getter setter

public function getNoms (){


    return $this->noms;
}
public function getPrenoms (){


    return $this->Prenoms;
}

public function getVille (){


    return $this->ville;

}

public function getDAteNaisance()
{
   return  $tis->dDN;
}


//_______________________________________________________________________________ fonction 


public function addCompte($compte)
{
    $this->comptes[]=$compte;
}

// fonction non utilise garde comme reference
// public function newCompte($id,$libelle ,$solde=50,$devise="euro")
// {
//     $compte = new Compte ( $this,"$this->noms"."$this->prenoms. $this->dDN.$this->ville",$libelle ,$solde=50,$devise="euro") ; 
//     array_push($this->comptes ,$compte);
//      return $compte;
// }

private function age()
{
    $now = new DateTime();

$age = $this->dDN->diff($now);
return $age->format('%y');
    
}

public function identifiant(){
    return "$this->noms $this->prenoms $this->ville $this->libelle";
}

public function getInfo()
{
    $resultat = "L'utilisateur $this->noms,$this->prenoms nee le". $this->dDN->format('Y/m/d'). "age de ".$this->age()." ans;  , posede les compte suivant :<br>";

    foreach ($this->comptes as $key ) 
    {
        $resultat = $resultat . $key->getLibelle(). "<br>";    
    }

    return $resultat;

}
}
<?php 
class Titulaire
{

    /// Mieux en methode utilisant la date de naisance
    // private string  $age;
    
    public string  $noms;

    private string $prénoms;

    private array $comptes;

    //date de naisance 

    private DateTime $dDN;

    private  string $ville;



    public function __construct($noms,$prénoms,$dDN,$ville) {
        $this->noms = $noms;
        $this->prénoms = $prénoms;
        $this->dDN = new DateTime ($dDN);
        $this->ville = $ville;
        // $this->age = $this->age();
    }



//_____________________________________________________________getter setter

public function getNoms (){


    return $this->noms;
}
public function getPrénoms (){


    return $this->Prénoms;
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

// fonction non utilisé gardé comme référence
// public function newCompte($id,$libellé ,$solde=50,$devise="euro")
// {
//     $compte = new Compte ( $this,"$this->noms"."$this->prénoms. $this->dDN.$this->ville",$libellé ,$solde=50,$devise="euro") ; 
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
    return $this->noms,$this->prénoms,$this->ville, $this->libellé ;
}

public function getInfo()
{
    echo "L'utilisateur $this->noms,$this->prénoms née le". $this->dDN->format('Y/m/d'). "agé de ".$this->age()." ans;  , poséde les compte suivant :<br>";

    foreach ($this->comptes as $key ) 
    {
        echo $key->getLibellé(). "<br>";    
    }

}
}
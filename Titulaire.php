<?php 
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
public function getPrénoms (){


    return $this->Prénoms;
}

public function getVille (){


    return $this->ville;
}

public function identifiant(){
    echo $this->noms,$this->prénoms,$this->ville,$libellé ;
}




}
<?php
class Compte
{
    // 
   private  Titulaire $titulaire; 
   private  string $libellé;
   private  float $solde;
   private   string $devise;



   public function __construct( $titulaire, $libellé, $solde=50,$devise="euro" ) 
   {
        

        $this->titulaire = $titulaire;

        $this->libellé = $libellé;
        
        $this->solde = $solde;
        
        $this->devise = $devise;


        $this->titulaire = $titulaire;


        $this->titulaire->addCompte($this);
        
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function getDevise()
    {
        return $this->devise;
    }
    public function getLibellé()
    {
        return $this->libellé;
    }

    public function changeSolde($changement)
    {
        $this->solde = $this->solde + $changement;
    }

    public function transfert($compteCible, $changement )
    {
        if ($changement<=0) {
            $this->changeSolde($changement);
            $changement= $changement *-1;
            $compteCible->changeSolde($changement);
        }

        if ($changement>0) {
            $compteCible->changeSolde($changement);
            $changement= $changement *-1;
            $this->changeSolde($changement);         
        }




    }
    
    public function nomsTitulaire()
    {
        return $this->titulaire->getNoms();
    }


   public function toString()
   {
    return "un compte  $this->libellé ";
   }

}
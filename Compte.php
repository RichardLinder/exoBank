<?php
class Compte
{
   private Titulaire $titulaire; 
   private  $libellé;
   public   $solde;
   private  $devise;


   public function __construct( $titulaire, $libellé, $solde=50,$devise="euro" , $noms = null,$prénoms= null ,$dDN= null ,$ville =null  ) {
    if ($titulaire=== null ) {
        $titulaire =  New Titulaire ($noms,$prénoms,$dDN,$ville)
    }

    $this->titulaire = $titulaire;

    $this->libellé = $libellé;
    
    $this->solde = $solde;
    
    $this->devise = $devise;
    
}


    public function lienCompteTitulaire()

    public function test(){
        echo "test";
    }
}
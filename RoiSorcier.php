<?php 

class RoiSorcier extends Personnage {
     public $force_frappe_1 = 5;
     public $force_frappe_2 = 20;

    public function __construct($nom, $force) {
        parent::__construct($nom, $force);
    }

    public function frappeAvecSonEpee($adversaire) {
        $force_de_frappe = $this->force_frappe_1;
        $adversaire->recoit_degat($this, $force_de_frappe);
    }

    public function attaqueAvecSonNazgul($adversaire) {
        $force_de_frappe = $this->force_frappe_2;
        $adversaire->recoit_degat($this, $force_de_frappe);
    }

    public function attaque($adversaire) {
        $choixAttaque = random_int(1,2);
        if ($choixAttaque === 1) {
            $this->frappeAvecSonEpee($adversaire);
        } else {
            $this->attaqueAvecSonNazgul($adversaire);
        }
    }
}
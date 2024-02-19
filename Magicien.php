<?php

require_once('./Personnage.php');
class Magicien extends Personnage {
    public $force_frappe_1 = 10;
    public $force_frappe_2 = 15;

    public function __construct($nom, $force) {
        parent::__construct($nom, $force);
    }

    public function lance_un_sort($adversaire) {
            $force_de_frappe = $this->force_frappe_1;
            $adversaire->recoit_degat($this, $force_de_frappe);
    }

    public function lance_rayon_lumiere($adversaire) {
            $force_de_frappe = $this->force_frappe_2;
            $adversaire->recoit_degat($this, $force_de_frappe);
    }

    public function attaque($adversaire) {
        $attaque_choisie = random_int(1, 2);
        if ($attaque_choisie === 1) {
            $this->lance_un_sort($adversaire);
        } else {
            $this->lance_rayon_lumiere($adversaire);
        }
    }
}

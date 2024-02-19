<?php

class Combat {
    public function demarrer_combat($magicien, $roi_sorcier) {
        while (true) {
            if ($magicien->getVie() <= 0) {
                echo $roi_sorcier->getNom() . " remporte le combat !\n";
                break;
            } elseif ($roi_sorcier->getVie() <= 0) {
                echo $magicien->getNom() . " remporte le combat !\n";
                break;
            } else {
                if (random_int(1, 2) == 1) {
                    echo $magicien->getNom() . " attaque...\n";
                    $magicien->attaque($roi_sorcier);
                    echo $roi_sorcier->getNom() . " a " . $roi_sorcier->getVie() . " points de vie restants.\n";
                } else {
                    echo $roi_sorcier->getNom() . " attaque...\n";
                    $roi_sorcier->attaque($magicien);
                    echo $magicien->getNom() . " a " . $magicien->getVie() . " points de vie restants.\n";
                }
            }
        }
    }
}


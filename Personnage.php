<?php

abstract class Personnage {
    private $nom;
    private $vie = 100;
    private $force;
    private $experience = 0;
    private $degats = 0;
    public $tour = 'joueur 1';

    public function __construct($nom, $force) {
        $this->nom = $nom;
        $this->force = $force;
    }

    public function frappe($cible, $force_de_frappe) {
        $cible->recoit_degat($this, $force_de_frappe);
    }

    public function esquive() {
    }

    public function recoit_degat($adversaire, $force_de_frappe) {
        $this->degats += $force_de_frappe;
        $this->vie -= $force_de_frappe;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getVie() {
        return $this->vie;
    }

    public function setVie($vie) {
        $this->nom = $vie;
    }
    public function getForce() {
        return $this->force;
    }

    public function setForce($force) {
        $this->nom = $force;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setExperience($experience) {
        $this->nom = $experience;
    }

    public function getDegats() {
        return $this->degats;
    }

    public function setDegats($degats) {
        $this->nom = $degats;
    }

}

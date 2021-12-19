<?php
class Personnage{

    private static $max_vie = 120;
    
    private $vie = 60;
    private $atk = 20;
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return "Mr." . $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }

    public function regenerer($vie = null){
        if (is_null($vie)) {
            $this->vie = self::$max_vie;
        } else {
            $this->vie += $vie;
        }
        
    }

    public function mort(){
        return $this->vie <= 0;
    }

    private function empecher_negatif(){
        if ($this-> vie < 0) {
            return $this->vie = 0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }
}
<?php

class troll {

    public $nom;
    public $hp = 80;
    public $mana = 0;
    public $atk = 10;
    public $def = 5;



    public function attaque($cible) {
        echo $this->nom . " attaque " . $cible->nom . '<br>';
        $cible->hp -= $this->atk;
        if($cible->mort()) {
            echo $cible->nom . ' est mort !' . '<br>';
        }
        else {
            echo $cible->nom . ' a survécu à cette attaque, il lui reste ' . $cible->hp . ' points de vie.  ' . '<br>';
        }
    }

    public function mort() {
        return $this->hp <= 0;
    }

    public function __construct($nom) {
        $this->nom = $nom;
    }



}
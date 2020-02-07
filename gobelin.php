<?php

class gobelin {

    public $nom;
    public $hp = 50;
    public $mana = 0;
    public $atk = 5;
    public $def = 2;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    /* -------------------- Actions --------------------- */


    public function attaque($cible) {
        $this->nom . " attaque " . $cible->nom . '<br>';
        $cible->hp -= $this->atk;
        if($cible->mort()) {
            echo $cible->nom . ' est mort !' . '<br>';
        }
        else {
            echo $cible->nom . ' a survécu à cette attaque, il lui reste ' . $cible->hp . ' points de vie.  ' . '<br>';
        }
    }

    /* ------------------------ Divers ----------------- */

    public function mort() {
        return $this->hp <= 0;
    }


}

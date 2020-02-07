<?php

class Personnage{

    public $nom;
    public $hp = 100;
    public $mana = 80;
    public $atk = 15;
    public $def = 5;


    public function __construct($nom) {
        $this->nom = $nom;
    }


    /* ----------- Attaques Magiques --------------- */



    public function flammes($cible) {
        $cible->hp -= 15;
        $this->mana -= 10;
        echo $this->nom . "fait jaillir des flammes de ses mains en direction de " . $cible . " !  " . '<br>';
        if($cible->mort()) {
            echo $cible->nom . " s'enflamme complètement et meurt en hurlant de douleur !" . '<br>';
        }
        else {
            echo $cible->nom . ' a survécue à cette attaque, il lui reste ' . $cible->hp . ' points de vie.  ' . '<br>';
        }
    }


    public function bouleDeFeu($cible) {
        $cible->hp -= 25;
        $this->mana -= 15;
        if($cible->mort()) {
            echo $cible->nom . " est frappé par la Boule de Feu et meurt calciné ! " . '<br>';
        }
        else {
            echo $cible->nom . ' a survécu à la Boule de Feu, il lui reste ' . $cible->hp . ' points de vie.  ' . '<br>';
        }
    }


    /* ----------- Attaques Physiques --------------- */


    public function attaque($cible) {
        $cible->hp -= $this->atk;
        if($cible->hp <= 20) {
            $cible->atk -= 10;
            echo $this->nom . " attaque " . $cible->nom . "." . '<br>';
            echo $this->nom . " a frappé " . $cible->nom . " violemment !! " . '<br>';
            echo $cible->nom . " tombe à genoux, il est sonné. Il perd de la Puissance d'Attaque !  " . '<br>';
        }
        else if($cible->mort()) {
            echo $cible->nom . " n'a pas survécu à cette Attaque, il s'écroule au sol !  " . '<br>';
        }
        else {
            echo  $cible->nom . ' a survécu à cette attaque, il lui reste ' . $cible->hp . ' points de vie.  ' . '<br>';
        }
    }


    /* ------------------ Sorts de Protection --------------- */



    public function regen($hp = null) {
        if(is_null($hp)) {
            $hp->hp = 100;
            echo "Tous les points de vie ont été régénérés !  " . '<br>';
        }
        else {
            $hp->hp += $hp;
            echo "Régénération de " . $hp . " points de vie !  " . '<br>';
        }
    }

    public function bouclierBois($cible) {
        $cible->def += 10;
        $this->mana -= 15;
        echo " Le score de Défense de " . $cible->nom . " a été buff de +15 par " . $this->nom.".    "  . '<br>';
    }

    public function bouclierPierre($cible) {
        $cible->def += 20;
        $this->mana -= 20;
        echo " Le score de Défense de " . $cible->nom . " a été buff de +20 par ". $this->nom.".    "  . '<br>';
    }

    public function crier() {
        echo $this->nom . ' crie : Leeeeroooooyyy Jeeeeennnnnnnkkiiiinnnssssss !!!!' . '<br>';
        echo " La puissance d'Attaque de " . $this->nom . " a été buff de +15.  " . '<br>';
        $this->atk += 15;

    }


    /* -------------------- Divers ------------------------ */

    public function mort() {
        return $this->hp <= 0;
    }



}

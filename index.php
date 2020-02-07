<?php

    require 'personnages.php';
    require 'gobelin.php';
    require 'troll.php';

/* ---------------------------------------------- */

$countCrierMerlin = 2;
$countRegenMerlin = 4;


$countCrierArthur = 4;
$countregenArthur = 2;



    /*   Personnages ---------------------------- */

$merlin = new Personnage('Merlin');
    $merlin->hp = 80;



$arthur = new Personnage('Arthur');
    $arthur->mana = 40;


    /*   Monstres ------------------------------- */

$gobelin1 = new gobelin('Gluuck');

$troll1 = new troll('Shpouf');


   /*    ---------------------------------------- */

$merlin->bouclierBois($arthur);
$arthur->crier();






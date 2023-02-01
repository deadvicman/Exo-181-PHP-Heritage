<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Victorien");

echo 'Nom du personnage : ' . $humain->getNom() . "<br>";
echo 'Vie du personnage : ' . $humain->getVie() . '<br>';

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom();

echo 'Nom du dragon : ' . $dragon->getNom() . "<br>";
echo 'Vie du dragon : ' . $dragon->getVie() . '<br>';


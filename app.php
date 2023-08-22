<?php

use App\Personnage\Monstre;
use App\Personnage\Vampire;
use App\Personnage\Hero;
use App\Combat\Combat;


require __DIR__.'/vendor/autoload.php';

// attention, la classe personnage est une classe abstaite, 
// elle ne peux donc pas etre instanciée directement
// PHP Fatal error:  Uncaught Error: Cannot instantiate abstract class
// $monstre = new Monstre();
// $monstre -> crier();
// echo $monstre -> getPuissance()."\n";

$vampire = new Vampire();
$vampire
    -> crier()
    -> setPuissance(20)
;
echo $vampire -> getPuissance()."\n";

$hero = new Hero();
$hero -> crier();

$combat1 = new Combat($hero, $monstre);

$combat2 = new Combat($hero, $vampire);

while ($combat1 -> isFini() == false || $combat2 -> isFini() == false)
{
    // le combat continue
    $combat1 -> action();
    $combat2 -> action();

    echo "\n";
    echo "Monstre = ".$monstre -> getVie()." point de vie"."\n";
    echo "Vampire = ".$vampire -> getVie()." point de vie"."\n";
    echo "Julia = ".$hero -> getVie()." point de vie"."\n";
    echo "\n";
}

if ($hero -> getVie() == 0 && $monstre -> getVie() == 0 && $vampire -> getVie() == 0) {
    echo "match nul \n";
}

elseif ($hero -> getVie() > 0) {
    echo "Vous avez gagné \n";
}

else { // $hero -> getVie() == 0 
    echo "MWAHAHA Vous avez perdu \n";
}
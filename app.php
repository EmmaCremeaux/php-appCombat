<?php

use App\Personnage\Monstre;
use App\Personnage\Hero;
use App\Combat\Combat;

require __DIR__.'/vendor/autoload.php';


$monstre = new Monstre();
$monstre -> crier();
echo $monstre -> getPuissance()."\n";

$monstre2 = new Monstre();
$monstre2 
    -> setCri('CRIII !!!')
    -> crier()
    -> setPuissance(20)
;
echo $monstre2 -> getPuissance()."\n";

$hero = new Hero();
$hero -> crier();

$combat1 = new Combat($hero, $monstre);

$combat2 = new Combat($hero, $monstre2);

while ($combat1 -> isFini() == false || $combat2 -> isFini() == false)
{
    // le combat continue
    $combat1 -> action();
    $combat2 -> action();

    echo "\n";
    echo "Toto = ".$monstre -> getVie()." point de vie"."\n";
    echo "Bob = ".$monstre2 -> getVie()." point de vie"."\n";
    echo "Julia = ".$hero -> getVie()." point de vie"."\n";
    echo "\n";
}

if ($hero -> getVie() == 0 && $monstre -> getVie() == 0 && $monstre2 -> getVie() == 0) {
    echo "match nul \n";
}

elseif ($hero -> getVie() > 0) {
    echo "Vous avez gagné \n";
}

else { // $hero -> getVie() == 0 
    echo "MWAHAHA Vous avez perdu \n";
}
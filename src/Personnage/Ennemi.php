<?php
namespace App\Personnage;

// interface : permet de regroupé des objet de type différent mais avec des même methodes.
interface Ennemi
{
    public function getVie();
    public function setVie($vie);

    public function getPuissance();
    public function setPuissance($puissance);

    public function crier();
}
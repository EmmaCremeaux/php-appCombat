<?php declare(strict_types = 1);

class Combat
{
    private $heroero = null;
    private $monstreonstre = null;

    public function __construct(Hero $heroero, Monstre $monstreonstre)
    {
        $this -> hero = $heroero;
        $this -> monstre = $monstreonstre;
    }

    public function getHero(): Hero 
    {
        return $this -> hero;
    }
    public function setHero(Hero $heroero)
    {
        $this -> hero = $heroero;

        return $this;
    }


    public function getMonstre(): Monstre
    {
        return $this -> monstre;
    }
    public function setMonstre(Monstre $monstreonstre)
    {
        $this -> monstre = $monstreonstre;

        return $this;
    }


    public function action()
    {
        // le monstre attaque
        $attaque = $this -> monstre -> getPuissance() * random_int(5, 15)/10;
        $vie = $this -> hero -> getVie() - $attaque;
        $this -> hero -> setVie($vie);

        // Si le heros est mort il ne peut pas contre attaquer.
        if ($this -> hero -> getVie() == 0) {
            return;
        }

        // le heros contre attaque
        $attaque = $this -> hero -> getPuissance() * random_int(5, 15)/10;
        $vie = $this -> hero -> getVie() - $attaque;
        $this -> monstre -> setVie($vie);
    }

    public function isFini()
    {
        if ($this -> hero -> getVie() == 0 || $this -> monstre -> getVie() == 0) {
            return true;
        }

        return false;
    }

}
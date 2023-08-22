<?php declare(strict_types = 1);
// en POO une variable ne s'appelle plus variable mais
// une propriété/ un attribut/ un membre.

// une fonction s'appelle une methode.

namespace App\Personnage;


// abstract est un mot clé qui empêche que la classe soit instanciée directement
abstract class Personnage
{
    protected $vie = 100;
    protected $puissance = 0;
    protected $cri = "";

    public function getVie()
    {
        return $this -> vie;
    }
    public function setVie($vie)
    {
        if ($vie < 0) {
            $vie = 0;
        }
        $this -> vie = $vie;

        // design pattern "fluent"
        return $this;
    }


    public function getPuissance() 
    {
        return $this -> puissance;
    }
    public function setPuissance($puissance)
    {
        $this -> puissance = $puissance;

        // design pattern "fluent"
        return $this;
    }


    public function setCri($cri) // set = setter
    {
        if (strrpos($cri, '!!!') !== strlen($cri) - 3) {
            // une exception permet de personnalisé
            // un message d'erreur
            // throw = generer, new Exception = tjr noté comme ça
            throw new Exception('Les cris doivent se terminer avec 
            3 point d\'exclamation');
        }
        $this -> cri = $cri;

        // design pattern "fluent"
        return $this;
    }

    public function crier()
    {
        echo $this -> cri."\n";

        // design pattern "fluent"
        return $this;
    }
}
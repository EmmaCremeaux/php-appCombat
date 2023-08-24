<?php declare(strict_types = 1);
// en POO une variable ne s'appelle plus variable mais
// une propriété/ un attribut/ un membre.

// une fonction s'appelle une methode.

namespace App\Personnage;
use App\Mixin\Criable;


// abstract est un mot clé qui empêche que la classe soit instanciée directement
abstract class Personnage
{
    use Criable;
    
    protected $vie = 100;
    protected $puissance = 0;

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

}
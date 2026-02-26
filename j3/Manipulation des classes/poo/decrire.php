
<?php

// La class s'appelle personnage
class Personnage
{
  // pour la construire construct
  // Les attributs sont string $nom et int $vie 
  // les methodes sont getnom/setnom et getvie/setvie
    public function __construct(private string $nom, private int $vie)
    {

    }

    public function getNom() : string
    {
        return $this->nom;
    }

    public function setNom(string $nom) : void
    {
        $this->nom = $nom;
    }

    public function getVie() : int
    {
        return $this->vie;
    }

    public function setVie(int $vie) : void
    {
        $this->vie = $vie;
    }
}
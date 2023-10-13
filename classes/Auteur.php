<?php

class Auteur {  
    private string $prenom;
    private string $nom;
    private array $livres;
    
    public function __construct(string $prenom, string $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = [];
    }

    public function getPrenom() {
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
         return $this;
    }

    public function getLivres() {
        return $this->livres;
    }

    public function setLivres($livres) {
        $this->livres = $livres;
        return $this;
    }

    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function afficherBibliographie() {
        $result = "<h2>Livres de Stephen King</h2>";
        foreach ($this->livres as $livre) {
            $result .=$livre->getTitre()." (".$livre->getDateParution()."): ".$livre->getNbPages()." pages / ".$livre->getPrix()." <br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}



<?php

class Auteur {
    private string $prenom;
    private string $nom;
    private array $bibliographies;
    
    public function __construct(string $prenom, string $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->bibliographies = [];
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

    public function getInfos() {
        return $this->getPrenom()." ".$this->getNom()."<br>";
    }

    public function getBibliographies() {
        return $this->bibliographies;
    }

    public function setBibliographies($bibliographies) {
        $this->bibliographies = $bibliographies;
        return $this;
    }

    public function addBibliographie(Bibliographie $bibliographie) {
        $this->bibliographies[] = $bibliographie;
    }

    public function afficherBibliographies() {
        $result = "<h2>Livres de Stephen King</h2>";
        foreach ($this->bibliographies as $bibliographie) {
            $result .=$bibliographie->getTitre()." (".$bibliographie->getDateParution()."): ".$bibliographie->getNbPages()." pages / ".$bibliographie->getPrix()." <br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}



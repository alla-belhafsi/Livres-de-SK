<?php

class Livre {

    private string $titre;
    private DateTime $dateParution;
    private int $nbPages;
    private int $prix;
    private Auteur $auteur;
    
    

    public function __construct(string $titre, string $dateParution, int $nbPages,  float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->dateParution = new DateTime($dateParution);
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
        
        
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    public function getNbPages(): string {
        return $this->nbPages;
    }

    public function setNbPages($nbPages) {
        $this->nbPages = $nbPages;
        return $this;
    }

    public function getDateParution(): string {
        return $this->dateParution->format("Y");
    }

    public function setDateParution($dateParution) {
        $this->dateParution = $dateParution;
        return $this;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }

    public function getAuteur(): string {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }

    public function __toString() {   
        return $this->titre." ".$this->dateParution->format("Y")." ".$this->nbPages." ".$this->prix;
    }
}
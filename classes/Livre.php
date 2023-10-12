<?php

class Livre {

    private string $titre;
    private DateTime $dateParution;
    private int $nbPages;
    private int $prix;
    private array $bibliographies;
    

    public function __construct(string $titre, string $dateParution, int $nbPages,  int $prix) {
        $this->titre = $titre;
        $this->dateParution = new DateTime($dateParution);
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->bibliographies = [];
        
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

    public function getDateParution(): DateTime {
        return $this->dateParution->format(Y);
    }

    public function setDateParution($dateParution) {
        $this->dateParution = $dateParution;
        return $this;
    }

    public function getPrix(): int {
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
        return $this->titre." ".$this->dateParution->format("Y")." ".$this->nbPages." ".$this->prix;
    }
}
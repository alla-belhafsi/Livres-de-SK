<?php

class Bibliographie {

    private Auteur $auteur;
    private Livre $livre;

    public function __construct(Auteur $auteur, Livre $livre) {
        $this->auteur = $auteur;
        $this->livre = $livre;
        $this->auteur->addBibliographie($this);
        $this->livre->addBibliographie($this);
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
        return $this;
    }

    public function getLivre() {
        return $this->livre;
    }

    public function setLivre($livre){
        $this->livre = $livre;
        return $this;
    }
}
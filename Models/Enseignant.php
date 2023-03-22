<?php

class Enseignant{

    private $id;
    private $nom;
    private $prenom;
    private $adresse_email;
    private $telephone;


    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getAdresse_email() {
        return $this->adresse_email;
    }
    public function setAdresse_email($adresse_email) {
        $this->adresse_email = $adresse_email;
    }

    public function getTelephone() {
        return $this->telephone;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }


}
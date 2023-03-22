<?php

public class Eleve{
    //Les attributes
    private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $adresse;
    private $niveau_scolaire;

    // Getters and setters
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

    public function getDateNaissance(){
        return $this->date_naissance;
    }
    public function setDateNaissance($date) {
        $this->date_naissance = $date;
    }

    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getNiveauScolaire() {
        return $this->niveau_scolaire;
    }
    public function setNiveauScolaire($niveau_scolaire){
        $this->niveau_scolaire = $niveau_scolaire;
    }

    //Constructeurs 
    /*
        public function __construct(){

        }

        public function __construct($id,$nom,$prenom,$date_naissance,$adresse,$niveau_scolaire){

            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->adre$adresse = $adresse;
            $this->ni$niveau_scolaire =$niveau_scolaire;
            
        }
    */


}

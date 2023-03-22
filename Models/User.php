<?php

class User{

    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $telephone;
    private $type;
    private $login;
    private $password;




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

    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getTelephone() {
        return $this->telephone;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        $this->type = $type;
    }

    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }



}
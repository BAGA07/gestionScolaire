<?php

class Matiere{

    private $id;
    private $nom;
    private $coef;
    private $classes_id;


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

    public function getCoef(){
        return $this->coef;
    }
    public function setCoef($coef) {
        $this->coef = $coef;
    }

    public function getClasses_id(){
        return $this->class_id;
    }
    public function setClasses_id($class_id) {
        $this->class_id = $class_id;
    }


}
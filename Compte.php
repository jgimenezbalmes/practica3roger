<?php

class Compte{
    //Atributs
    private $nom;
    private $cognom;
    private $diners;

    //Constructors
    function __construct1(){
    }

    function __construct($nom, $cognom, $diners){
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->diners= $diners;
    }


   //Getters i setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getCognom()
    {
        return $this->cognom;
    }

    public function setCognom($cognom)
    {
        $this->cognom = $cognom;
    }

    public function getDiners()
    {
        return $this->diners;
    }

    public function setDiners($diners)
    {
        $this->diners = $diners;
    }

    //Funció on es treuen diners i s'actualitza el balanç
    function treureCalers ($calersTrets){
        $calers = $this->getDiners();
        $calers-=$calersTrets;
        $this->setDiners($calers);
    }


    // Funcion donde se pone dinero y donde se actualiza el balance
    function posarCalers ($calersFicats){
            $calers = $this->getDiners();
            $calers+=$calersFicats;
            $this->setDiners($calers);
    }
}
    $prova = new Compte("Jordi", "Pujol", 50000);
    $prova->treureCalers(250);
    echo "Diners totals després de retirada: " , $prova->getDiners(),"<br>";
    $prova->posarCalers(1000);
    echo "Diners totals després d'ingrés: " , $prova->getDiners();

?>
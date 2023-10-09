<?php

class Employee extends \Worker {

    private int $horesTreball;
    private $preuHora;


    public function __construct(int $horesTreball, int $preuHora,string $nom = "", string $cognom = "", int $edad = 25)
    {
        parent::__construct($nom, $cognom, $edad);
        $this->$horesTreball = $horesTreball;
        $this->$preuHora = $preuHora;
    }


    public function calcularSou(): int
    {
        return (int)$this->preuHora * $this->horesTreball;
    }
}
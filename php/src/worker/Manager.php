<?php

class Manager extends \worker\Treballador {

    private $salari;

    public function __construct(int $salari, string $nom = "", string $cognom = "", int $edad = 25)
    {
        parent::__construct($nom, $cognom, $edad);
        $this->$salari = $salari;
    }


    public function calcularSou(): int
    {
        return (int) $this->salari + ($this->salari * parent::getEdad())/100;
    }
}
<?php

require_once 'Treballador.php';
class Employee extends Treballador {

    private int $horesTreball;
    private $preuHora;


    public function __construct(int $horesTreball, int $preuHora,string $nom = "", string $cognom = "", int $edad = 25)
    {
        parent::__construct($nom, $cognom, $edad);
        $this->horesTreball = $horesTreball;
        $this->preuHora = $preuHora;
    }

    public function __toString(): string
    {
        return "<p>" . parent::__toString() ."PREU HORA: ".$this->preuHora." HORES TREBALLADES: ".$this->horesTreball." SOU: ".$this->calcularSou(). "</p>";

    }


    public function calcularSou(): int
    {
        return $this->preuHora * $this->horesTreball;
    }
}
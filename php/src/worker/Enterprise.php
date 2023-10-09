<?php

require_once 'Treballador.php';
class Enterprise{
    public function __construct(
        private string $nom = "",
        private string $direccio="",
        private array $workers = []
    ){ }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDireccio(): string
    {
        return $this->direccio;
    }

    public function setDireccio(string $direccio): void
    {
        $this->direccio = $direccio;
    }

    public function addWorker(Treballador $t): void
    {
        array_push($this->workers, $t);
    }
    public function listWorkersHtml() : string{
        $html = "";
        foreach ($this->workers as $worker) {
            $html .=$worker->__toString();
        }
        return $html;
    }
    
    public function getCosteNominas(): float{
        $costTotal = 0;
        foreach ($this->workers as $worker) {
            $costTotal += $worker->calcularSou();
        }
        return $costTotal;
    }

}

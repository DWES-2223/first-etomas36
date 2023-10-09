<?php

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

    public function addWorker(Worker $t){
        array_push($this->workers, $t);
    }

    public function listWorkersHtml() : string{
        $html = "";
        foreach ($this->workers as $worker) {
            $html .= \Worker::toHtml($worker);
        }
        return $html;
    }

}

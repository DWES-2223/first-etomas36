<?php

class Persona
{
    private $nom;
    private $cognom;
    private $edad;

    /**
     * @param $nom
     * @param $cognom
     * @param $edad
     */
    public function __construct($nom, $cognom, int $edad = 1)
    {
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * @param mixed $cognom
     */
    public function setCognom($cognom): void
    {
        $this->cognom = $cognom;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string{

        return $this->nom." ".$this->cognom;

    }
    public static function getNombreStatico($emp): string
    {
        return $emp->nom." ".$emp->cognom;
    }

    public function estaJubilado(): bool{

        return $this->edad > 65;

    }
    

    public static function toHtml(Persona $p): string {
        $html = "<p>".self::getNombreStatico($p)."</p>";
        return $html;
    }




}
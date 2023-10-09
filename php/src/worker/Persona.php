<?php
define("LIMITE_EDAT",66);
abstract class Persona
{

    public static int $limite_edat = LIMITE_EDAT;

    public function __construct(
        private string $nom = "",
        private string $cognom="",
        private int $edad = 25
    ){ }

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

    public static function modificaLimite(int $limit){
        self::$limite_edat = $limit;
    }

    public function estaJubilado(): bool{

        return $this->edad >= self::$limite_edat;

    }

    public function  __toString(): string {
        return "NOM: ".$this->nom." COGNOM: ".$this->cognom." EDAD: ".$this->edad;
    }
    abstract public static function toHtml(Persona $p): string;


}
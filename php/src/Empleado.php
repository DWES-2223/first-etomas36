<?php

class Empleado extends Persona8
{

    private int $sou;
    private $telefonos;


    public function __construct(int $sou,string $nom = "", string $cognom = "", int $edad = 25)
    {
        parent::__construct($nom, $cognom, $edad);
        $this->sou = $sou;
        $this->telefonos = [];
    }

    public function getSou(): int
    {
        return $this->sou;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public static function getPhones($emp): array
    {
        return $emp->telefonos;
    }
    public function anyadirTelefono(int $telefono) : void{
        array_push($this->telefonos, $telefono);
    }
    public function listarTelefonos(): string{
        return implode(", ",$this->telefonos);
    }
    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
    public function debePagarImpuestos(): bool {

        return $this->sou >= 3333;

    }

    public static function toHtml(Persona $p): string{                                              //ASKEJAR HELP
        if($p instanceof Empleado){
            
            $html = "<p>".parent::getNombreStatico($p)."</p>";
            $phones = self::getPhones($p);
            $html = $html."<ul>";
            foreach ($phones as $phone){
                $html = $html."<li>$phone</li>";
            }
            $html = $html."</ul>";
            return $html;
        }
    }

    public function  __toString(): string {

        $html = "<p>".parent::__toString()."</p>";
        $html = $html."<ul>";
        foreach ($this->telefonos as $phone){
            $html = $html."<li>$phone</li>";
        }
        $html = $html."</ul>";
        return $html;

    }

}






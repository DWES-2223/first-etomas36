<?php

namespace worker;
abstract class Worker extends Persona
{
    private $telefonos;


    public function __construct(string $nom = "", string $cognom = "", int $edad = 25)
    {
        parent::__construct($nom, $cognom, $edad);
        $this->telefonos = [];
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public static function getPhones($emp): array
    {
        return $emp->telefonos;
    }

    public function anyadirTelefono(int $telefono): void
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos(): string
    {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    abstract public function calcularSou():int;

    //307
    public static function toHtml(Persona $p): string
    {
        $html = "<p>" . parent::getNombreStatico($p) . "</p>";
        $phones = self::getPhones($p);
        $html = $html . "<ul>";
        foreach ($phones as $phone) {
            $html = $html . "<li>$phone</li>";
        }
        $html = $html . "</ul>";
        return $html;

    }

    //308
    //public static function toHtml(Persona $p): string{                                              //ASKEJAR HELP
    //    $html ="";
    //    if($p instanceof Empleado){
    //        $html = "<p>".parent::getNombreStatico($p)."</p>";
    //        $phones = self::getPhones($p);
    //        $html = $html."<ul>";
    //        foreach ($phones as $phone){
    //            $html = $html."<li>$phone</li>";
    //        }
    //        $html = $html."</ul>";
    //    }
    //    return $html;
    //}

    //309
    public function __toString(): string
    {

        $html = "<p>" . parent::__toString() . "</p>";
        $html = $html . "<ul>";
        foreach ($this->telefonos as $phone) {
            $html = $html . "<li>$phone</li>";
        }
        $html = $html . "</ul>";
        return $html;

    }

}






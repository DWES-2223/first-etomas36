<?php




include_once ("Persona8.php");
$a = new Persona8('Ethan',"Tomas");
echo $a->getNombreCompleto();
echo "<br>";
echo $a->estaJubilado()?"Si jubilao":"No jubilao";

//306
include_once ("Empleado.php");
$b = new Empleado(4000,"ethan","Tomas",21);
$b->anyadirTelefono("676068583");
$b->anyadirTelefono("676068583");

echo "<br>";
$telefonos = $b->getTelefonos();
echo $b->listarTelefonos();

echo "<br>";
//$b->vaciarTelefonos();
//echo $b->listarTelefonos();

echo "<br>";
echo $b->debePagarImpuestos()?"Si paga impostos": "No paga impostos";
echo "<br>";

//307
//$bHtml = Empleado::toHtml($b);
//echo $bHtml;

//308
include_once ("Persona.php");
$first = new Persona('Ethan',"Tomas");
$prova = Persona::toHtml($first);
echo $prova;

//308
//$html = Empleado::toHtml($first);
//echo $html;

//309
echo "<br>";
echo $b;




<?php




include_once ("Persona8.php");
$a = new Persona8('Ethan',"Tomas");
echo $a->getNombreCompleto();
echo "<br>";
echo $a->estaJubilado()?"Si jubilao":"No jubilao";


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

include_once ("Persona.php");
$first = new Persona('Ethan',"Tomas");
$prova = Persona::toHtml($first);
echo $prova;

//$html = Empleado::toHtml($first);
//echo $html;

echo "<br>";
echo $b;



phpinfo();

?>
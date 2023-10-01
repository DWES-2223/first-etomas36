<?php

include ("functions.php");
include ("atletes.php");

$recordVell = vell($records);
echo "La Data del record més antic es: ".$recordVell;
echo "<br> La Data del record més antic en Angles es: ".fecha_inglesa($recordVell);

$dates = array_column_ext($records,'data',-1);
$natalicis = array_column_ext($records,'natalici',-1);


$atletaMesJove = jove($dates,$natalicis);
echo "<br>El atleta més Jove es: ".$atletaMesJove." Anys";
echo "<br><br>";
include("270a.php");
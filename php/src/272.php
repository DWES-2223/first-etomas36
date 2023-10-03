<?php

include ("functions.php");
include ("atletes.php");

//PRIMERA PARTE
$recordVell = vell($records);
echo "La Data del record més antic es: ".$recordVell;
echo "<br> La Data del record més antic en Angles es: ".fecha_inglesa($recordVell);

//SEGUNDA PARTE
$clubs = array_column_ext($records,'club',-1);
$atleta = array_column_ext($records,'atleta',-1);
$ciutat = array_column_ext($records,'lloc',-1);

echo "<br>El Club amb més Victories es: ".laureado($clubs);
echo "<br>El Atleta amb més Victories es: ".laureado($atleta);
echo "<br>La Ciutat amb més Victories es: ".laureado($ciutat);

// TERCERA PARTE
$dates = array_column_ext($records,'data',-1);
$natalicis = array_column_ext($records,'natalici',-1);

$atletaMesJove = jove($dates,$natalicis);
echo "<br>El atleta més Jove té: ".$atletaMesJove." Anys";
echo "<br><br>";
include("270a.php");
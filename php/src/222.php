<?php

$base = $_GET["base"];
$exponent = $_GET["exponent"];


if (isset($base) && isset($exponent)){

    //echo "$base^$exponent = ".pow($base,$exponent);
    $potencia =1;
    for ($i = 0; $i < $exponent; $i++) {
        $potencia *=$base;
    }
    echo "$base^$exponent = ".$potencia;


}else{
    echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
}
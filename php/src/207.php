<?php

$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$numero3 = $_GET["numero3"];




if (isset($numero1) && isset($numero2) && isset($numero3)){

    echo "El nombre més gran entre ".$numero1 .", ".$numero2." i ".$numero3." és el ".
        (($numero1 > $numero2 && $numero1 > $numero3)? $numero1 : (($numero2 > $numero3)? $numero2 : $numero3))
        ."<br>";

}else{
    echo "Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString";
}
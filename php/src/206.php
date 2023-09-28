<?php

$numero = $_GET["numero"];

extract($_GET);




if (isset($numero)){

    echo "El número ".$numero;

    if ($numero==0){
        echo " és zero";
    }elseif ($numero >= 0){
        echo " és positiu";
    }else{
        echo " és negatiu";
    }

}else{
    echo "Posa el numero a comprobar a la variable numero del QueryString";
}
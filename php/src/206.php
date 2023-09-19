<?php

$numero = $_GET["numero"];

extract($_GET);




if (isset($numero)){

    if ($numero==0){
        echo "El número ".$numero." és zero";
    }elseif ($numero >= 0){
        echo "El número ".$numero." és positiu";
    }else{
        echo "El número ".$numero." és negatiu";
    }



}else{
    echo "Posa el numero a comprobar a la variable numero del QueryString";
}
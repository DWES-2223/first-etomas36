<?php


$hora = $_GET["hora"];
$minut = $_GET["minut"];
$segon = $_GET["segon"];


if (isset($hora) && isset($minut) && isset($segon)){

    if ($segon + 1 >= 60){
        $segon = 0;
        if ($minut + 1 >= 60){
            $minut = 0;
            if ($hora + 1 >= 24){
                $hora = 0;
            }else{
                $hora++;
            }
        }else{
            $minut++;
        }
    }else{
        $segon++;
    }

    echo $hora.":".$minut.":".$segon;

}else{
    echo "Posa les variables hora, minut i segon pel QueryString";
}
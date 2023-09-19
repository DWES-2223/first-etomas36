<?php


$edad = $_GET["edat"];


define('DECADA',10);




if (isset($edad)){
    echo "La teua edad a lany ". ($anyoActual = date("Y") - 10)." es: ".($edad - DECADA)."<br>";
    echo "La teua edad a lany ". ($anyoActual = date("Y") + 10)." es: ".($edad + DECADA)."<br>";
    echo "La edad de jubilació es: ".($anyoActual = date("Y") +(67 - $edad));

}else{
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
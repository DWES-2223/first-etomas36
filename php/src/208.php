<?php

$edat = $_GET["edat"];

if (isset($edat)){

    $categoria = "";
    switch ($edat){
        case $edat < 3  :
            $categoria = "bebé";
            break;
        case $edat <=12 :
            $categoria = "xiquet";
            break;
        case $edat <= 17 :
            $categoria = "adolescent";
            break;
        case $edat <= 66 :
            $categoria = "adult";
            break;
        case $edat > 67 :
            $categoria = "jubilat";
            break;
    }
    echo "ets un ". $categoria;

    //$categoria = "";
//
    //if ($edat < 3){
    //    $categoria = "bebé";
    //}else if ($edat <= 12) {
    //    $categoria = "xiquet";
    //}else if ($edat <= 17){
    //    $categoria = "adolescent";
    //}else if ($edat <= 66) {
    //    $categoria = "adult";
    //}else if ($edat > 67){
    //    $categoria = "jubilat";
    //}
    //echo "ets un ". $categoria;

}else{
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
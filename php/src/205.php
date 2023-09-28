<?php

$quantitat = $_GET["quantitat"];

extract($_GET);

$billetes = [500,200,100,50,20,10,5,2];

if (isset($quantitat)){

    $cantbillets = 0;

    foreach ($billetes as $billete){
        $cantbillets = 0;
        while ($quantitat >= $billete){
            $quantitat -= $billete;
            $cantbillets +=1;
        }
        echo $cantbillets." ". (($billete <= 2)? 'moneda': 'bitllet')." de ".$billete."<br>";
    }

}else{
    echo "Posa la quantitat a la variable quantitat pel QueryString";
}
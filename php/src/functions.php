<?php

function esParell(int $num):bool{
    return $num%2==0;
}

function arrayAleatori(int $tam, int $min, int $max):array{
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[$i] = rand($min,$max);
    }
    return $array;
}

function countParells(array &$array): int{
    $totalParells = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (esParell($array[$i])){
            $totalParells++;
        }
    }
    return $totalParells;
}

function major(...$nums): int{
    $mayor =0;
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] > $mayor){
            $mayor = $nums[$i];
        }
    }
    return $mayor;
}

function concatenar(...$paraules) : string{
    return join(' ',$paraules);
}
function digits(int $num): int{
    if ($num < 0){
        return strlen((string)$num)-1;
    }
    return strlen((string)$num);
}
/* function digits(int $num): int{
    $nums = explode("",$num);
    return count($nums);
} */
function digitsN(int $num, int $post): int{

    $stringNum = (string)$num;
    return (int)substr($stringNum,$post - 1,1);
}

function llevaDarrere(int $num, int $cant): int{
    $stringNum = (string)$num;
    if ($cant > strlen($stringNum)){
        return 0;
    }
    return (int)substr($stringNum,0,strlen($stringNum)-$cant );
}

function llevaDavant(int $num, int $cant): int{
    $stringNum = (string)$num;
    return (int)substr($stringNum,$cant);
}

function peseta2euros(int $num,  $cotizacio = 0.0060 ): int{
    return (int)($num / $cotizacio );
}

function euro2pesetes(int $num, $cotizacio = 166 ): int{
    return (int)($num * $cotizacio);
}

function vell(array $records): mixed {
    $vell = "1.10.2023";
    $recordVell = new DateTime($vell);

    foreach ($records as $record ) {
        $date = new DateTime($record["data"]);
        if ($recordVell > $date)
            $recordVell = $date;
    }
    return $recordVell->format('d.m.Y');
}

function fecha_inglesa(string $text ):string {
    $enDate = new DateTime($text);
    return $enDate->format('Y/m/d');
}

function laureado(array $records):mixed {

    $arrayVegades=[];
    $mesFamos = null;

    foreach ($records as $record) {
        if (array_key_exists($record,$arrayVegades)){
            $arrayVegades[$record]++;
        }else{
            $arrayVegades[$record] = 1;
        }
    }
    $quantitatVegades = 0;
    foreach ($arrayVegades as $mesVoltes => $vegades) {
        if ($quantitatVegades < $vegades){
            $quantitatVegades = $vegades;
            $mesFamos = $mesVoltes;
        }
    }

    return $mesFamos;
}

function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}
function jove(array $dates, array $natalicis):mixed{

    $mesJove = 41;

    foreach ($natalicis as $valueAny => $natalici) {
        foreach ($dates as $valueDate => $date) {
            if ($valueAny === $valueDate){
                $edatAtleta = any($date) - $natalici;
                if ($mesJove > $edatAtleta ){
                    $mesJove = $edatAtleta;
                }
            }
        }
    }
    return $mesJove;
}

function any($date)
{
    $enDate = new DateTime($date);
    return $enDate->format('Y');
}

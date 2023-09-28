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

function euro2pesetes(int $num, $cotizacio = 166.3860 ): int{
    return (int)($num * $cotizacio);
}


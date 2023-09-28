<?php

$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
    echo $i;
    echo ($i == 10)?'=':'+';


}
echo $suma ."<br>";

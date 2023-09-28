<?php

$ejeX = $_POST["files"];
$ejeY = $_POST["columnes"];

if (isset($ejeX) && isset($ejeY)){
    //echo "<table style='border: 1px solid black;border-collapse: collapse'>";
    for ($i = 1; $i <= $ejeX; $i++) {
        $letra = chr(64 + $i);
        echo "<tr>";
        if ($i == 1){
            for ($j = 1; $j <= $ejeY; $j++) {
                echo " <td>$letra$j</td> ";
            }
        }else{
            for ($j = 1; $j <= $ejeY; $j++) {
                if ($j == 1){
                    echo " <td>$letra$j</td> "; // style='border: 1px solid black;width: 50px; text-align: center'
                }else{
                    echo " <td></td> ";
                }
            }
        }
        echo "</tr> ";
    }
    //echo "</table>";
}
<?php

$ejeX = $_POST["files"];
$ejeY = $_POST["columnes"];

if (isset($ejeX) && isset($ejeY)){
    //echo "<table style='border: 1px solid black;border-collapse: collapse'>";
    for ($i = 1; $i <= $ejeX; $i++) {
        $letra = chr(64 + $i);
        echo "<tr>";
        for ($j = 1; $j <= $ejeY; $j++) {
            if ($i == $j) {
                echo " <td>$letra$j</td> ";
            }else if ($i + $j == $ejeY+1){
                echo " <td>$letra$j</td> "; // style='border: 1px solid black;width: 50px; text-align: center'
            }else{echo " <td></td> ";}
        }
        echo "</tr> ";
    }
    //echo "</table>";
}
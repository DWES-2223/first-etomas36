<?php

$ejeX = $_POST["files"];
$ejeY = $_POST["columnes"];


if (isset($ejeX) && isset($ejeY)){
    //echo "<table style='border: 1px solid black;border-collapse: collapse'>";
    for ($i = 0; $i < $ejeX; $i++) {
        $letra = chr(65 + $i);
        echo "<tr>";
        for ($j = 1; $j <= $ejeY; $j++) {
            echo " <td>$letra$j</td> "; //style='border: 1px solid black;width: 50px; text-align: center'
        }
        echo "</tr> ";
    }
    //echo "</table>";
}






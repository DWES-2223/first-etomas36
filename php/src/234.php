<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php

$persona1 = ['nom'=>'Alejandro','altura'=>'183'];
$persona2 = ['nom'=>'Arturo','altura'=>'180'];
$persona3 = ['nom'=>'Random','altura'=>'165'];
$persona4 = ['nom'=>'Beibi','altura'=>'170'];
$persona5 = ['nom'=>'NoName','altura'=>'150'];
$persones = [$persona1,$persona2,$persona3,$persona4,$persona5];
$AnotherPersonas = [['nom'=>'Alejandro','altura'=>'183'],
['nom'=>'Arturo','altura'=>'180'],
    ['nom'=>'Random','altura'=>'165'],
['nom'=>'Beibi','altura'=>'170'],
['nom'=>'NoName','altura'=>'150']]
?>

<table>

        <?php
        $alturaMedia = 0;
        for ($i = 0; $i < count($persones); $i++) {
            echo   " <tr> <td>",$persones[$i]['nom'],"</td>";
            echo   "<td>",$persones[$i]['altura'],"</td> </tr>";
            $alturaMedia += $persones[$i]['altura'];

        }
        echo   "<tr> <td>","Altura media","</td> ";
        echo   "<td>",$alturaMedia/5,"</td> </tr>";
        ?>

</table>



</body>
</html>
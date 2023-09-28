<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$num = [];
$numMayor = 0;
$numMenor = 99;
$totalNumeros = 0;

for ($i = 0; $i < 33; $i++) {
    $num[$i] = rand(0,99);
    if ($num[$i] > $numMayor){
        $numMayor = $num[$i];
    }
    if ($num[$i] < $numMenor){
        $numMenor = $num[$i];
    }
    $totalNumeros += $num[$i];
}

echo "Menor <li>",$numMenor,"</li> ";
echo "Mayor <li>",$numMayor,"</li> ";
echo "Mediana <li>",$totalNumeros/33,"</li> ";
?>



</body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$num = [];
$totalM = 0;
$totalF = 0;
echo "<ul>";
for ($i = 0; $i < 100; $i++) {
    $num[$i] = rand(0,1);
    if ($num[$i] == 0){
        $num[$i] = "M";
        $totalM++;
    }else{$num[$i] = "F";
        $totalF++;
    }
    echo " <li>",$num[$i],"</li> ";
}
echo "</ul>";
echo "Total F: ", $totalF;
echo "Total M: ", $totalM
?>



</body>
</html>
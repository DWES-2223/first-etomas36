


<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$num = [];
echo "<ul>";
for ($i = 0; $i < 50; $i++) {
    $num[$i] = rand(0,99);
    echo " <li>",$num[$i],"</li> ";
}
echo "</ul>";
?>



</body>
</html>
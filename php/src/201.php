<?php
$a = 10;
$s = 5;

 define('AMPLADA',2);

 $resultado = $a * $s * AMPLADA;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo y print</title>
</head>
<body>
<p><?php echo "àrea del rectangle és: ",$resultado; ?></p>
</body>
</html>
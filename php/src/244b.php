<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>244B</title>
</head>
<body>
<h1>Supermercat Server</h1>
<?php
include_once("functions.php");
if (isset($_POST["names"]) && isset($_POST["prices"])){
    $names = $_POST['names'];
    $prices = $_POST['prices'];

    $products = count($names);

    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Euros</th>";
    echo "<th>Pesetas</th>";
    echo "</tr>";

    $totalEuros = 0;
    $totalPesetes = 0;
    for ($i = 0; $i < $products; $i++) {
        echo "<tr>";
        echo "<td> $names[$i] </td>";
        echo "<td> $prices[$i] </td>";
        $totalEuros += $prices[$i];

        $pesetas = euro2pesetes((int)$prices);
        $totalPesetes += $pesetas;
        echo "<td> $pesetas </td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td>  </td>";
    echo "<td> $totalEuros</td>";
    echo "<td> $totalPesetes </td>";
    echo "</tr>";

    echo "</table>";

}else{
    echo "No se ha establecido una cantidad";
}
?>

</body>
</html>





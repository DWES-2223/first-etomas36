<?php

include("encapçalat.php");

include("functions.php");
if (isset($_POST["names"]) && isset($_POST["prices"])){
    $names = $_POST['names'];
    $prices = $_POST['prices'];

    $products = count($names);

    $totalEuros = 0;
    $totalPesetes = 0;
    echo "<ul>";
    for ($i = 0; $i < $products; $i++) {
        $pesetas = euro2pesetes((int)$prices);
        $totalPesetes += $pesetas;
        $totalEuros += $prices[$i];

        echo "<li> $names[$i]&nbsp;&nbsp;&nbsp; $prices[$i]€ &nbsp;&nbsp;&nbsp; $pesetas Ptas </li>";
    }
    echo "</ul>";

}else{
    echo "No se ha establecido una cantidad";
}

include("footer.php");
?>

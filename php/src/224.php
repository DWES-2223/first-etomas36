<?php


if (isset($_POST["casilles"])){
    $casilles = $_POST["casilles"];

    if (isset($casilles)){

        $casillesLength = count($casilles);
        $resultat = 0;
        for ($j = 0; $j < $casillesLength; $j++) {
            $resultat+= $casilles[$j];
        }

        echo "El resultat de la suma es : ".$resultat;
    }
}else {
    $quantitat = $_POST["quantitat"];

    if (isset($quantitat)) {

        echo "<form action='224.php' method='post'>";
        for ($i = 0; $i < $quantitat; $i++) {
            echo "<label>quantitat$i <input type='number' name='casilles[]'></label><br>";
        }
        echo '<button name="submit" type="submit">Submit</button>';
        echo "</form>";
    }
    $quantitat = null;
}

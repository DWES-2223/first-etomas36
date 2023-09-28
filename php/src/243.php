


<?php
include_once("functions.php");

if (isset($_POST["moneda"]) && (isset($_POST['quantitat']))){
    $moneda = $_POST["moneda"];
    $quantitat = $_POST["quantitat"];

    $resultat = 0;

    if ($moneda == "euro"){
        $resultat = euro2pesetes((int)$quantitat);
        $moneda = "pesetes";
    }else{
        $resultat = peseta2euros((int)$quantitat);
    }

    echo '<form>
<label>'.$moneda.'<input value="'.$resultat.'" type="text"></label><br>
</form>';

}else{?>
<form method="post" action="243.php">
    <label>euros<input name="moneda" placeholder="Euros" type="text" required="required"></label><br>
    <label>Quantitat a transofrmar<input name="quantitat" placeholder="Escriu la quantitat" type="text" required="required" ></label><br>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
  <?php
}


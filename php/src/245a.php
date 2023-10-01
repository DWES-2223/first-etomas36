<?php

include("encapçalat.php");


if (isset($_GET["quantitat"])){
    if (is_numeric($_GET["quantitat"])){
        $quantitat = $_GET['quantitat'];
        for ($i = 0; $i < $quantitat; $i++) {
            echo "<form method='post' action='245b.php'>
                <label>Producto$i</label>
                <input id='nom$i' type='text' placeholder='Nombre' name='names[]'>
                <input id='preu$i' type='text' placeholder='Precio' name='prices[]'>
               <br>";
        }
        echo "
        <button name='submit' type='submit'>Submit</button>
        </form>";
    }else{
        echo "Dades incorrectes";
    }
}else{
    echo "Dades incorrectes";
}
include("footer.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>244A</title>
</head>
<body>

<?php
if (isset($_GET["quantitat"])){
    if (is_numeric($_GET["quantitat"])){
    $quantitat = $_GET['quantitat'];
    for ($i = 0; $i < $quantitat; $i++) {
        echo "<form method='post' action='244b.php'>
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
?>
</body>
</html>





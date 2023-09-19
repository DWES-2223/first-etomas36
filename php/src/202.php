<?php
$name = "Ethan";
$surname = "Tomas Horsman";
$email = "cigarroloko@gmail.com";
$natalici = "01-03-2002";
$telefon = "no hay"


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo y print</title>
</head>
<body>
<table class="202">
    <tr>
        <td>Nom</td>
        <td><?=$name?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?=$surname?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$email?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?=$natalici?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?=$telefon?></td>
    </tr>
</table>


</body>
</html>
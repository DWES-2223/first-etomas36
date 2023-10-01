<?php

include ("246password.php");

if (isset($_POST["usuari"]) && isset($_POST["password"])){
    $user = $_POST["usuari"];
    $password = $_POST["password"];

    if (array_key_exists($user, $usuarios)){
        if (in_array($password, $usuarios)){
            echo "Benvingut $user";
        }else{
            echo "Password incorrecte";
        }
    }else {
        echo "Usuari no existent";
    }
}
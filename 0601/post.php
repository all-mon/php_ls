<?php

$name = "";
$age = "";

if(isset($_POST["name"])){
    $name = htmlentities($_POST["name"]);
}

if(isset($_POST["age"])){
    $age = htmlspecialchars($_POST["age"]);
}

echo "Имя: $name <br> Возраст: $age";


?>
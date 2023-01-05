<?php


const PI = 3.14;
echo PI . "</br>";

//Также для определения константы может применяться функция define()
define("NUMBER",22);
echo NUMBER . "</br>";

//Чтобы проверить, определена ли константы, мы можем использовать функцию bool defined(string $name)
if (!defined("PI"))
    define("PI", 3.14);
else
    echo "Константа PI уже определена";

?>
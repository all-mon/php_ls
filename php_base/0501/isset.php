<?php
//Функция isset() позволяет определить, инициализирована ли переменная или нет
$message;
if(isset($message))
    echo $message . "</br>";
else
    echo "переменная message не определена </br>";

$message = "Hello PHP";
if(isset($message))
    echo $message . "</br>";
else
    echo "переменная message не определена </br>";

?>
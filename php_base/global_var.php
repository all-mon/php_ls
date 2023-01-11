<?php

$name = "Tom";

// function test(){
//     echo "Hello, " . $name; НЕ СРАБОТАЕТ тк ф-ция не видит внешнюю переменную
// }

function hello(){
    global $name;
    echo "Hello, " . $name . "</br>";
}
hello();

function changeName()
{
    global $name;
    $name = "Tomas";
}
changeName();   
echo $name . "</br>"; // Tomas


function changeName2()
{
    $username = $GLOBALS["name"];
    echo "Старое имя: $username <br>";
    // изменяем значение переменной $name
    $GLOBALS["name"] = "Tomas2";
}
changeName2();
echo "Новое имя: " . $name . "</br>";

?>
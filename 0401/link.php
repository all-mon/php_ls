<?php

//Передача параметров по ссылке
function square(&$a){
    $a *= $a;
}

$num = 2;
$copy = $num;
square($num);
echo "Square $copy = $num </br>";

//Возвращение ссылки из функции
function &checkName(&$name){
    if($name === "admin") $name = "Tom";
    return $name;
}

$userName = "admin"; 
$checkedName = &checkName($userName);
//$checkedName = "111";
echo "<br />userName: $userName";
echo "<br />checkedName: $checkedName";

?>
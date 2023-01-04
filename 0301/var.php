<?php

$num1 = 10;
$str1 = 'abc';
echo "$num1 $str1<br/>";

$num1 = $str1;
echo "$num1 $str1<br/>";

$num2;
echo "$num2<br/>"; //переменная не определена выводит ошибку

$num2 = 11;
echo "$num2<br/>";

echo " 
<p>
    В PHP есть десять базовых типов данных:
    <ul>
    <li>bool (логический тип)</li>
    <li>int (целые числа)</li>
    <li>float (дробные числа)</li>
    <li>string (строки)</li>
    <li>array (массивы)</li>
    <li>object (объекты)</li>
    <li>callable (функции)</li>
    <li>mixed (любой тип)</li>
    <li>resource (ресурсы)</li>
    <li>null (отсутствие значения)</li>
    </ul>
</p>
";

$a = 15;
$b = "15";
$result1 = $a == $b;//выведет 1(true)
$result2 = $a === $b;//выведет ничего(false)

echo $result1 . ", " . $result2;

if($result2 === true){
    echo "true";
}else if($result2 === false){
    echo "false";
}else{
    echo " yyyyyyyyyy";
}

echo "</br>";


//match vs switch

switch(8.0){
    case "8.0":
        $result = "string";
        break;
    case 8.0:
        $result = "float";
        break;
}
echo "Switch: " . $result . "</br>";

match (8.0) {
    "8.0" => $result = "string",
    8.0 => $result = "float"
};
echo "Match: " . $result . "</br>";

//Массивы

$numbers = [1,-3,-5,21,32,66];
$numbers[] = 25;//добавит в конец
$numbers[7] = 1222;//добавит под индексом 7, инд 5 и 6 не существует 
print_r($numbers); echo "</br>";


$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
$num = count($users);
foreach($users as $key => $value)
{
    echo "$key - $value<br />";
}


//функции
function add($a,$b){
    return $a + $b;
}

$result = add(2,6);
echo $result;






?>
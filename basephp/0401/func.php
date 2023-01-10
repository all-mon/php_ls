<?php
//анонимные ф-ции и коллбеки

//Func uses callback
function sum($numbers, $condition)
{
    $res = 0;
    foreach($numbers as $number){
        if($condition($number))
        {
            $res += $number;
        }
    }
    return $res;  
}
//Anon func 1
$isPositiveNumber = function($number){ return $number > 0;};
//Anon func 2
$isZero = function($number){ return $number === 0;};

$numbers = [-2,1,2,0,-6];

$res = sum($numbers, $isPositiveNumber);
echo "Анонимные ф-ции и колбык 1: " . $res . "</br>";

$res = sum($numbers, $isZero);
echo "Анонимные ф-ции и колбык 2: " . $res . "</br>";

?>
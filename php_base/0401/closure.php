<?php 
$number = 89;//внешняя переменная
 
$showNumber = function()
{
    echo "Результат 1: " . $number . "</br>";//ошибка - переменная недоступна 
};
 
$showNumber();

//используем замыкание к.с. use($n)
$showNumber = function() use($number){
    echo "Результат 2: " . $number . "</br>";
};

$showNumber();

$showNumber = function($n) use($number){
    $res = $n + $number;
    echo "Результат 3: " . $res . "</br>";
};

$showNumber(11);

?>
<?php
//variable declarations and data types
$int = 10;
$float = 10.2;
$str = 'abc';
$bool = false;
$null = null;


/*На самом деле массив в PHP - это упорядоченное отображение, которое устанавливает соответствие между значением и ключом.
Этот тип оптимизирован в нескольких направлениях, поэтому вы можете использовать его как собственно массив,
список (вектор), хеш-таблицу (являющуюся реализацией карты), словарь, коллекцию, стек, очередь и, возможно, что-то ещё.
Так как значением массива может быть другой массив PHP, можно также создавать деревья и многомерные массивы.*/
$justArray = array('1',2,44.2,null,false,$int);
$array = [
    1 => 'first',
    2 => 2,
    'key' => 'value',
];

function tmp(mixed $mixed){
    var_dump($mixed);
}
tmp('str');
tmp(1);
tmp(10.2);
tmp(function ($a=10,$b=5){
    return $a * $b;
});


?>
<?php

$int = 10;
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

$users = ["Tom", "Bob", "Sam"];

//Some methods
//1) is_array
$isArray = is_array($users);
echo ($isArray == true) ? "Yes, it`s array </br>" : "NO, var users is not array </br>";
echo "<hr>";


//2) count() и sizeof()
$number = count($users);
// то же самое, что
// $number = sizeof($users);
echo "В массиве users $number элемента/ов </br>";
echo "<hr>";

//3)Функция shuffle перемешивает элементы массивы случайным образом
shuffle($users);
print_r($users);
echo "<hr>";

//4)Функция compact позволяет создать из набора переменных ассоциативный массив, где ключами будут имена переменных
$model = "Apple II";
$producer = "Apple";
$year = 1978;
 
$data = compact("model", "producer", "year");
print_r($data);
// получится следующий вывод
// Array ( [model] => Apple II [producer] => Apple [year] => 1978 ) 
echo "<hr>";

//5)Сортировка массивов
$users = ["Ац", "Бу", "Аа", "Гф"];
//Для сортировки по возрастанию используется функция asort
asort($users);
print_r($users);
echo " :asort()<hr>";

//Чтобы отсортировать массив в обратном порядке, применяется функция arsort
arsort($users);
print_r($users);
echo " :arsort()<hr>";

//Сортировка по ключам
ksort($users);
print_r($users);
echo " :ksort()<hr>";

//Сортировка по ключам в обратном порядке
krsort($users);
print_r($users);
echo " :krsort()<hr>";

//Естественная сортировка

//Проблема
$os = array("Windows 7", "Windows 8", "Windows 10");
asort($os);
print_r($os);
echo " :asort() сработает не правильно, тк сортирует строки<hr>";


//Решение 
natsort($os);
print_r($os);
echo " :natsort()<hr>";

//Если нам надо еще при этом, чтобы сортировка не учитывала регистр, то мы можем применить функцию natcasesort():
?>
<?php

//Оперции с массивами
$users = ["Tom", "Bob", "Sam"];


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
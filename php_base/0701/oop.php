<?php
    class Person
    {
        public $name = "Undefined", $age = 18;

        function hello()
        {
            echo "Hello!</br>";
        }
        function displayInfo()
        {
            echo "Name: " . $this->name ."; Age: " . $this->age . "<br>";
        // также можно написать
        // echo "Name: $this->name; Age: $this->age<br>";
        }
    }
$tom = new Person();
$tom -> name = "Tom";
$tom -> age = 35;

$personName = $tom->name;// получение значения свойства $name
echo "Имя пользователя: " . $personName . "<br>";
$tom->hello();
print_r($tom);


echo "<hr>";
//сравнение объектов

//разные объекты, одинаковые поля
echo "Разные объекты, одинаковые поля: </br>";
$tomas = new Person();
$tomas -> name = "Tom";
$tomas -> age = 35;

if($tom == $tomas){
    echo "tom = tomas</br>";
}else echo "tom != tomas</br>";

if($tom === $tomas){
    echo "tom = tomas</br>";
}else echo "tom != tomas</br>";


//одинаковые объекты
echo "Одинаковые \$tomas = \$tom объекты:</br>";
$tomas = $tom;
if($tom == $tomas){
    echo "tom = tomas</br>";
}else echo "tom != tomas</br>";

if($tom === $tomas){
    echo "tom = tomas</br>";
}else echo "tom != tomas</br>";
echo "<hr>";
?>
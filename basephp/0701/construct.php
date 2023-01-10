<?php

class Person{
    public $name;//классический способ объеявления св-ва
    function __construct($name = "Sam", public $age = 33)// можно объявить поля прямо в конструкторе
    {
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct()
    {
        echo "Вызов деструктора </br>";
    }
     
    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }
}

$tom = new Person("Tom", 36);
$tom -> displayInfo();
 
$bob = new Person("Bob", 41);
$bob -> displayInfo();

echo "<hr>";

?>
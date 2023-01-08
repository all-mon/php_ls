<?php
//Множественное наследование не поддерживается.

class Person
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayInfo()
    {
        echo "Имя: $this->name<br>";
    }
    function sayHello()
    {
        echo "Hello</br>";
    }
}

class Employee extends Person
{
    public $company;

    function __construct($name, $company)
    {
        parent::__construct($name);
        $this->company = $company;
    }
    function displayInfo()
    {
        parent::displayInfo();
        echo "Работает в $this->company<br>";
    }
}

$per = new Person("I`m person");
$per -> displayInfo();
$per -> sayHello();
echo "<hr>";

$emp = new Employee("I`m employee","Dadya");
$emp -> displayInfo();
$emp ->sayHello();

echo "<hr>";
//instanceof 
echo "<h3>instanceof</h3>";
$man = new class {};


if($emp instanceof Employee){
    echo "true<br>";
}else echo "false<br>";
if($emp instanceof Person){
    echo "true<br>";
}else echo "false<br>";

if($per instanceof Employee){
    echo "true<br>";
}else echo "false<br>";
if($per instanceof Person){
    echo "true<br>";
}else echo "false<br>";

if($man instanceof Employee){
    echo "true<br>";
}else echo "false<br>";
if($man instanceof Person){
    echo "true<br>";
}else echo "false<br>";
echo "<hr>";

//Запрет наследования и оператор final
echo "<h3>Запрет наследования и оператор final</h3>";

class Jmot
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayInfo()
    {
        echo "Имя: $this->name<br>";
    }

    //final нельзя наследовать
    final function sayHello()
    {
        echo "Hello</br>";
    }
}
class Tmp extends Jmot
{
    function __construct($name,public $company="tmp")
    {
        parent::__construct($name);
        $this->company = $company;
    }

    function displayInfo()
    {
        echo "Name: $this->name;Company: $this->company<br>";
    }

    //вызовет ошибку final
    // function sayHello(){
    //     parent::sayHello();
    //     echo "good";
    // }
    
    function sayHello2(){
            parent::sayHello();
            echo "good<br>";
        }
}

    $tmp = new Tmp("tmp");
    $tmp->sayHello();
    $tmp->displayInfo();

?>
<?php

class Person
{
    private static $counter;
    public $name;
    protected $age;
    private $id;

    function __construct($name, $age)
    {
        self::$counter++;
        $this->id = self::$counter + 100;
        $this->age = $age;
        $this->name = $name;
        echo "Run construct, counter:" . self::$counter . "<br>";
    }

    function __destruct()
    {
        self::$counter--;
        echo "Run destruct, counter:" . self::$counter . "<br>";
    }

    static function getInf(Person $pers)
    {
        echo "Name: $pers->name;  Age: $pers->age<br>";
    }
}

$sam = new Person("Sam", 18);
Person::getInf($sam);

$ivan = new Person("Ivan", 18);
Person::getInf($ivan);

$tmp = new class("Bob",22) extends Person{
    //public $name,$age;
};
//$tmp->name="Bob";
//$tmp->age=22;

Person::getInf($tmp);

?>
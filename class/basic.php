<?php
class Monkey{
    public const type =  "Monkey";
    public static $count = 9999999;
    var $name;

    function __construct($name){
        $this->name = $name;
    }

    function sayHello(){
        echo "$this->name: Hello World!";
    }
}

$monkey = new Monkey("Sun Wu Kong");
$monkey->sayHello();

echo Monkey::type;
echo Monkey::$count;

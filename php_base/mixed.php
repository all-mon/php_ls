<?php

//The mixed type accepts every value.
// It is equivalent to the union type object|resource|array|string|float|int|bool|null.
// Available as of PHP 8.0.0.
function testMixed(mixed $mixed){
    var_dump($mixed);
}
testMixed('str');
testMixed(1);
testMixed(10.2);
testMixed(function ($a=10, $b=5){
    return $a * $b;
});
<?php
//variable declarations and data types
$int = 10;
$float = 10.2;
$str = 'abc';
$bool = false;
$null = null;

$arr = compact('int','float','str','bool','null');//puts vars in an array

// in separate files:
//callable
//mixed
//object
//array
//resource


//get var type
foreach ($arr as $item)
{
    if (is_int($item))
    {
        echo "IS_INT() , TRUE \n";
    }else{
        var_dump($item);//value and type
        $type = get_debug_type($item);//type only
        echo $type . "\n";
    }
    echo "+++++++++++next++++++++++++++\n";
}








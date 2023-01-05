<?php
function getCount(){
    static $counter = 0;
    $counter++;
    echo $counter . "</br>";
}

getCount();//1
getCount();//2
getCount();//3


?>
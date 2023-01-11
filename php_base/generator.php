<?php

function generateNumbers()
{
    for ($i = 10; $i <= 15; $i++) {
         
        yield $i;
    }
}
 
foreach(generateNumbers() as $index => $number)
{
    echo "$index - $number<br/>";
}
echo "<hr>";

foreach(generateNumbers() as $index)
{
    echo "$index<br/>";
}
?>
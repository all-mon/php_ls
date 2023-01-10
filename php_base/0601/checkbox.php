<?php

if(isset($_POST["list"])){
    $list = $_POST["list"];
    foreach($list as $item) echo $item . "</br>"; 
}

?>
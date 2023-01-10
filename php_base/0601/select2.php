<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    <?php
        if(isset($_POST["eselect"])){
            $e_select = $_POST["eselect"];
            foreach($e_select as $item) echo $item . "</br>";   
        }
    ?>

    <h3>Element select:</h3>
    <form method="post">
        <select name="eselect[]" size="3" multiple="multiple">
            <option value="111">111</option>
            <option value="dad">dad</option>
            <option value="222">222</option>
            <option value="vvv">vvv</option>
        </select>
        <input type="submit" value="post"/>
    </form>
        
   
    
</body>
</html>
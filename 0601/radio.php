<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <?php
        if(isset($_POST["radio"])){
            $radio = $_POST["radio"];
            echo $radio . "</br>";   
        }
    ?>

    <h3>Element radio:</h3>
    <form method="post">
        <p>1r<input type="radio" name="radio" value="1"></p>
        <p>2r<input type="radio" name="radio" value="2"></p>
        <p><input type="submit" value="post"/></p>
    </form>
    
</body>
</html>
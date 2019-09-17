<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    function sum($x,$y){
        $z=$x+$y;
        return $z;
    }
    echo sum(5,10). "<br>";
    echo "3 + 4 = ".sum(3,4). "<br>";
    echo "6 + 6 = ".sum(6,6). "<br>";
    ?>
</body>
</html>
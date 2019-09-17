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
    function sum($a,$b,$c){
        $z=$a+$b+$c;
        return $z;
    }
    echo "tổng = ". sum(5,2,3)."<br>";
    echo "TB 3 số = ".sum(5,5,5)/3;
    ?>
</body>
</html>
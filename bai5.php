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
    $age = array9("peter"=>"35","ben"=>"37","joe"=>"43");

    foreach ($age as $x => $x_value) {
        echo "key=". $x . ", value=" . $x_value;
        echo "<br>";
    }
    ?>
</body>
</html>
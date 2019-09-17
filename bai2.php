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
    $t=date("H");
    echo "<p>the hour (of the sever) is " . $t ;
    echo " , and will give the following message:</p>";
    if($t < "10"){
        echo "have a good morning!";
    }
    elseif($t<"20"){
        echo "have a good day!";
    }
    else{
        echo "have a good night!";
    }
    ?>
</body>
</html>
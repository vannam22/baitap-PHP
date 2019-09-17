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
    function check_palindrome($string){
        if($string==strrev($string)){
            return 1;
        }
        else {
            return 0;
        }
    }
    if(check_palindrome(CAC)){
        echo "là palindrome";
    }
    else{
        echo "NO";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bai tap 2</title>
    <style>
img {
  display: block;
  width:200px;
}
span{ text-decoration: underline;}
.main{
display:flex;
}
</style>
</head>
<body>
 <?php
    function anh(){
     $ten="Máy ảnh Sony RX100 IV(Chính<br> Hãng)";
     $gia_1="19.090.000";
     $gia_2 ="22.990.000";
     $dv="đ";
     $giam="-17%";
     echo "<div style=float:left;padding-top:30px;padding-left:150px>";
     echo "<img src=http://i1.topgia.vn/tco/sa2015/8/may-anh-1.jpg alt=taive>";
     echo "<p style=width:300px>".$ten."</p>";
     echo "<div class=main>"."<h2>".$gia_1."<span>".$dv."</span>"."</h2>"
                            ."<p style=color:#787878;text-decoration:line-through;padding:7px 1px>".$gia_2."<span>".$dv."</span>"."</p>"
                            ."<p style=color:red;padding-top:7px>".$giam."</p>".
          "</div>";
    echo "</div>";
    }
        for($i=0; $i<6; $i++)
        {
            anh();
        }
  ?> 
</body>
</html>

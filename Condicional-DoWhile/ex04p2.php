<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Document</title>
   
</head>
<body>
    <h1>PHP</h1>  
<div>

<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

switch($n1){
    case 1:
        echo $n1+$n2;
            break;

    case 2:
        echo $n1-$n2;
            break;

    case 3:
        echo $n1*$n2;
            break;


    case 4:
        echo $n1/$n2;
            break;
    }
?>








</div>

</body>
</html>
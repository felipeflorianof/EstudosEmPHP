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
    
        function soma($a, $b){
            $s = $a + $b;
            return $s;
        }
        
        $x = 10;
        $y = 8;

        $res = soma($x, $y);
        echo "A soma entre $x e $y é = $res";

    ?>


</div>
</body>
</html>
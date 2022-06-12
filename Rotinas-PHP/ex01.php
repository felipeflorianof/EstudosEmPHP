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
            echo "<p>A soma vale $s</p>";
        }


        //Exemplos de chamadas
        soma(3, 4);
        soma(10, 7);
        soma(1000, 5000);
        $x = 10;
        $y = 9;
        soma($x, $y);
    ?>


</div>
</body>
</html>
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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) / 2;
    // $s = $n1 + $n2;

    // echo "A soma entre $n1 e $n2 é igual a $s";
    echo "<h3>Valores recebidos: $n1 e $n2 <br></h3>";
    echo "A soma entre $n1 e $n2 vale: ". ($n1+$n2)."<br>";
    echo " A subtração vale: ". ($n1-$n2)."<br>";
    echo " A multiplicação vale: ". ($n1*$n2)."<br>";
    echo " A divisão vale: ". ($n1/$n2)."<br>";
    echo " O resto da divisão vale: ". ($n1%$n2). "<br>";
    echo " A média vale: $m <br>";
    ?>
    </div>
</body>
</html>
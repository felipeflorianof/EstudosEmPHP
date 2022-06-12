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
    
    $v1 = $_GET["a"];
    $v2 = $_GET["b"];
    echo "<h2>Valores: $v1 e $v2 adicionados.</h2>";
    echo "O valor absoluto de $v2 é ". abs($v2);
    echo "<br> A potencia de $v1 <sup> $v2 </sup> é igual a: ". pow($v1, $v2);
    echo "<br> A raíz de $v1 é: ". sqrt($v1);
    echo "<br> O valor de $v2 arredondado é: ". round($v2); // ceil(Arredonda pra cima) or floor(Arredonda pra baixo)
    echo "<br> A parte inteira de $v2 é: ". intval($v2);
    echo "<br> O valor de $v1 em moeda é: R$". number_format($v1,2,",",".");
    
    ?>
    </div>
</body>
</html>
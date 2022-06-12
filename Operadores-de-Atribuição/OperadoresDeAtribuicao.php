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

        $preco = $_GET["p"];
      //$precoaumento = $preco + ($preco*10/100); or

        echo "O preço do produto é  = R$". number_format($preco, 2);

        $preco += ($preco*10/100); // Repare que se esse código vinhesse antes do echo "O preço do produto é" ocorreria um erro, e teriamos que usar a primeira forma
        
        echo "<br>Mas com 10% de aumento o produto passa a valer: R$". number_format($preco, 2);

        $preco = $_GET["p"];
        $preco -= ($preco*10/100);
        echo "<br>Já se quisermos que o produto tenha 10% de desconto o preço ficaria em R$". number_format($preco, 2); //tenha cuidado com a variável única...
    ?>
    </div>
</body>
</html>
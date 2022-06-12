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
    <form method="post" action="ex02.php">

    Nota 1: <input type="number" placeholder="2 digitos:" name="a"><br><br>
    Nota 2: <input type="number" placeholder="2 digitos:" name="b"> <br><br>
    <input type="submit" value="Calcular Média"/>

    </form>

    <?php

    $n1 = $_POST["a"];
    $n2 = $_POST["b"];
    $media = ($n1 + $n2) / 2;
    $sit;

    if($media >= 7){
        $sit = "APROVADO(A)!";
    }else if($media >= 5 && $media < 7){
        $sit = "RECUPERAÇÃO!";
    }else{
        $sit = "REPROVADO(A)!";
    }

    echo "A média entre $n1 e $n2 é igual a $media<br>";
    echo "Situação do aluno: $sit";

    ?>
</div>
</body>
</html>
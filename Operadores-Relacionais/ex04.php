
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
    $ano = $_GET["n1"];
    $nasc = $_GET["n2"];
    $idade = $ano - $nasc;

    $res2 = $idade >= 16 && $idade < 18 || $idade >= 65 ? "voto é opcional." : "voto não possível";
    $res = $idade >= 18 && $idade < 65 ? "voto é obrigatório" : $res2;

    echo "Sabendo que você tem $idade anos, seu $res!";

    ?>
</div>
</body>
</html>
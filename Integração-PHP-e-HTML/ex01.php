
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
    <form method="post" action="ex01.php">

    Valor:<input type="text" name="v"/>
    <input type="submit" value="Calcular"/>

    </form>

    <?php

    $valor = $_POST["v"];
    $rvalor = sqrt($valor);
    echo "<br>Valor $valor adicionado.";
    echo "<br>A raíz quadrada de $valor é ". number_format($rvalor, 2);

    ?>
</div>
</body>
</html>
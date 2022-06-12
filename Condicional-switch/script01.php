
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

    $n = $_POST["n"];    
    $op = $_POST["op"];
    

    switch($op){
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ** 3;
            break;
        case 3:
            $r = sqrt($n); // || $n ^ (1/2);
            break;
        default:
            echo "[ERRO] Por favor informe um número para prosseguir.";
        break;
    }
    echo "O resultado é $r";

    ?>
<br><br>
    <a href="ex01.php"><input type="button" value="Voltar"></a>
    
</div>
</body>
</html>
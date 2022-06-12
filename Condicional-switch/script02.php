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
        $dia = $_POST["d"];
        
        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "$dia é dia útil";
                break;
            case 1:
            case 7:
                echo "$dia é dia útil pra quem quer ter uma vida melhor e estuda ou trabalha nos fins de semana!";
                break;
        default:
                echo"Dia da semana Inválido!";
        }
    ?>
    <br><br><br>
        <a href="ex02.php"><input type="button" value="Voltar"></a>

</div>
</body>
</html>
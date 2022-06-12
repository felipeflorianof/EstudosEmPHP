
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

    Digite o seu ano de nascimento: <input type="number" placeholder="4 digitos:" name="a">
    <input type="submit" value="Enviar"/>

    </form>

    <?php

    $ano = $_POST["a"];
    $idade = date("Y") - $ano;

    if($idade >= 18 && $idade < 65){
        echo "Pode Dirigir e também pode votar! por que você tem $idade anos.";
    } else if($idade >= 16 && $idade < 18){
        echo "Seu voto é opcional pois você tem $idade anos, porém  você não pode dirigir!";
    }else if($idade >= 65){
        echo "Seu voto é opcional e por questões de segurança agora você precisa fazer o teste de habilitação de 3 em 3 anos.";
    }else{
        echo "Não pode dirigir nem votar! você tem $idade anos portanto é considerado menor de idade.";
    }

    ?>
</div>
</body>
</html>
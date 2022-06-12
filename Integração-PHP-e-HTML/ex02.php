
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
    Digite seu nome:<input type="text" name="n"/><br>
    Ano de nascimento:<input type="number" name="nasc"><br>
   
    <fieldset>
        <legend>Sexo:</legend>
        <input type="radio" name="sexo" value="homem" checked>
        <label for="masc">Masculino</label>
        <input type="radio" name="sexo" value="mulher">
        <label for="fem">Feminino</label>
    </fieldset>
    <input type="submit" value="Enviar"/>
    </form>

    <?php

    $nome = $_POST["n"];
    $nasc = $_POST["nasc"];
    $sexo = $_POST["sexo"];
    $idade = date("Y") - $nasc;

    echo "Olá $nome legal saber que você é um(a) $sexo e tem $idade anos! pra calcular sua idade eu levei em consideração que você nasceu em $nasc e o ano atual, bom é isso... obrigado por preencher o formulário! ;)";
    


    ?>
</div>
</body>
</html>
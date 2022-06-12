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
        $ano = $_GET["a"]; // o get pega o valor passado na url, por exemplo: ?a=2022
        echo "O ano atual é $ano mas ano que vem será ". ++$ano;
        $ano = $_GET["a"];
        echo "<br>Por outro lado o ano passado foi ". --$ano;
    ?>
    </div>
</body>
</html>
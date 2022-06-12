<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Variáveis de variáveis</title>
</head>
<body>
    <h1>PHP</h1>
    <div>
    <?php 
    $site = "cursoemvideo";
    $$site = "cursodephp";

    echo "estou fazendo um $cursoemvideo no $site";
    echo "<br>O conteúdo da variável site é $site";
    echo "<br>e o conteúdo da variável cursoemvideo é $cursoemvideo";
    ?>
    </div>
</body>
</html>
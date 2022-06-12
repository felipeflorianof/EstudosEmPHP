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
       $a = 3;
       $b = $a;
       $b += 5;

       echo "A variável 'a' vale $a e a variável 'b' vale $b, portando a soma dessas duas variáveis seria: ". ($a + $b);

       $a = 3;
       $b = &$a; // Quando eu uso o & e digo que b = a eu 'conecto' as duas variáveis, fazendo com que o valor que 'b' teria também passe pra o valor de 'a'.
       $b += 5;

       echo "<br>A variável 'a' vale $a e a variável 'b' vale $b, portando a soma dessas duas variáveis seria: ". ($a + $b);
    ?>
    </div>
</body>
</html>
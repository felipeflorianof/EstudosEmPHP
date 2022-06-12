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
<h4>Passagem de parâmetro por valor:</h4><br>
    <?php
        
      function teste($x){
        $x = $x + 2;
        echo "Valor de X = $x";
      }

      $a = 3;
      teste($a);
      echo "</br>Valor de A = $a";
    ?>

<h4>Passagem de parâmetro por referência:</h4><br> 
    <?php //Altera automaticamente o valor da variável $a (3) quando percebe que $a pertence a variável $x e $x recebe + 2
    
      function teste1(&$x){
        $x = $x + 2;
        echo "Valor de X = $x";
      }

      $a = 3;
      teste1($a);
      echo "</br>Valor de A = $a";
      

    ?>


</div>
</body>
</html>
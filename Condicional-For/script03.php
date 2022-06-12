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

        $numprimo = $_GET["n1"];
        $numdivisores = 0;

        for($i = 1; $i <= $numprimo; $i++){
            if($numprimo % $i == 0){
                $numdivisores++;
            }
        }
        
        if($numdivisores == 2){
            echo "Número Primo!";
        }else{
            echo "Número Comum.";
        }
      
        
    ?>

    <a href="ex03.php"><input type="button" value="Voltar"></a>

</div>
</body>
</html>
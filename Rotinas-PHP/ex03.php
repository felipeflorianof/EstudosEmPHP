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
    
       function soma(){
           $p = func_get_args(); // função que vai pegar automaticamente os valores do parâmetro da 'function soma'
           $tot = func_num_args(); // fução que vai contar quantos números eu tenho tenho do parâmetro na minha function
           $s = 0; 

           for($i = 0; $i < $tot; $i++){
           $s = $s + $p[$i]; // $s recebe $s + $p que no caso é todos os valores que forem inseridos no soma(), com o parâmetro [$i], que no caso o $i é a minha variável de 'varredura do array', ela percorre o array e vai somando os valores contidos lá
           } 
           return $s;
       }

       $res = soma(3, 4, 8 , 1, 2, 62);
       echo $res;
    ?>


</div>
</body>
</html>
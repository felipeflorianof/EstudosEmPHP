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
<form method="get" action="ex04.php">
    <h4>Selecione os valores e depois a operação desejada;</h4><br>
    Valor 1:<input type="number" name="a" id="ase" required><br><br>
    Valor 2:<input type="number" name="b" id="ded" required><br><br>
    <select name="tab">
       
        <option value="1">Soma</option>
        <option value="2">Subtração</option>
        <option value="3">Multiplicação</option>
        <option value="4">Divisão</option>
    </select><br><br><br>
    <input type="submit" value="Enviar">

</form>


<?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $sel = $_GET["tab"];
    $r;

switch($sel){
    case 1:
        $r = $n1+$n2;
            break;

    case 2:
        $r = $n1-$n2;
            break;

    case 3:
        $r = $n1*$n2;
            break;

    case 4:
        $r = $n1/$n2;
            break;
    }

    echo "O resultado é $r";
?>


</div>

</body>
</html>
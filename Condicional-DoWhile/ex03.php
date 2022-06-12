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
<form method="get" action="ex03pt2.php">
    <h4>Selecione um número, e clique em "Enviar" para ver a sua tabuada:</h4><br>
    <select name="tab">
        
   <?php
    $i = 1;

    do{
        echo "<option>$i</option>";
        $i++;
    }while($i <= 10);

 
   ?>
    </select><br><br><br>
    <input type="submit" value="Enviar">

    

</form>
</div>

</body>
</html>
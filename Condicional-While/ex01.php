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
    

    <form  method="post" action="ex01.php">

    <?php

    $c = 1;

    while($c <= 5) {
        echo "Valor $c: <input type='number' name='v$c' id='n' min='0' max='100'><br><br>";
        $c++;
    }
  
    ?><br><br><br>
    <input type="submit" value="Enviar">
    </form>
  
</div>
</body>
</html>
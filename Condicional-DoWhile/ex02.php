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
    

    <form  method="post" action="ex02.php">
    Digite um número para ver seu Fatorial: <br><input type="number" name="i" id="num" required><br><br>
    <input type="submit" value="Enviar"><br><br>
    </form>


    <?php
    $i = $_POST["i"];
    $fat = 1;

    while($i >= 1){
        $fat = $fat * $i;
        $i--;
    }
    $i = $_POST["i"];
    echo "$i! = $fat<br>";



    ?>
  
</div>
</body>
</html>
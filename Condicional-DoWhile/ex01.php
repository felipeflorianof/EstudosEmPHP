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
    Início: <br><input type="number" name="i" id="num" required><br><br>
    Final: <br><input type="number" name="f" id="fim" required><br><br>
    Incremento: <br><input type="number" name="inc" id="in" required><br><br>
    <input type="submit" value="Enviar"><br><br>

    </form>


    <?php

    $i = $_POST["i"];
    $f = $_POST["f"];
    $inc = $_POST["inc"];

if($i < $f){
    do{
        echo "$i<br>";
        $i+= $inc;
    }while($i <= $f);

}else{
    do{
        echo "$i<br>";
        $i-= $inc;
    }while($i >= $f);

}
 
    ?>
  
</div>
</body>
</html>
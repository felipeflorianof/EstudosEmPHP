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
$i = 1;
$v = $_GET["tab"];
echo "<h2>A tabuada de: $v</h2><br><br>";
do{
    echo "$v x $i = <strong>". ($v*$i). "</strong><br>";
    $i++;


}while($i <= 10);
    ?>


<br>
    <br>
        <br>
    <a href="ex03.php"><input type="button" value="Voltar"></a>

</div>

</body>
</html>
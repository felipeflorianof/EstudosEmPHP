
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Document</title>
    <?php
      $txt = $_POST["t"];
      $tam = $_POST["tam"];
      $cor = $_POST["cor"];
    ?>

    <style>
        span.texto{
            font-size: <?php  echo "$tam"; ?>;
            color: <?php echo "$cor"; ?>;
        }
    </style>

</head>
<body>
    <h1>PHP</h1>  
<div>

   <form method="post" action="ex03.php">
    <label for="itxt">Texto: </label>
    <input type="text" name="t" id="itxt"> </br></br>
    <label for="itam">Tamanho: </label>
    <select name="tam" id="itam">
        <option value="8pt">8</option> 
        <option value="10pt">10</option>
        <option value="14pt" selected>14</option>
        <option value="20pt">20</option>
        <option value="40pt">40</option> 
    </select> </br></br>
    <label for="icor">Cor: </label>
    <input type="color" name="cor" id="icor"> <br><br>
    <input type="submit" value="Gerar">
   </form>

    <?php

    echo "<span class='texto'>$txt</span>";


    ?>
</div>
</body>
</html>
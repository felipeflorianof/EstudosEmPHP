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

<form method="get" action="script02.php">
    <select name="tab" id="tabx">

    
    <?php
  
    for($c = 1; $c <= 10; $c++){
        echo "<option>$c</option>";
    }  

    ?>


    </select><br><br><br>
    <input type="submit" value="Enviar">
</form>
</div>
</body>
</html>
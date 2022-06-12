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


        for($c = 0; $c <= 10; $c++){
            echo "$c ";
        }

        echo "</br>";

        for($c = 10; $c >= 0; $c--){
            echo "$c ";
        }

        echo "</br>";

        for($c = 0; $c <= 50; $c += 5){
            echo "$c ";
        }
    ?>
  
</div>
</body>
</html>
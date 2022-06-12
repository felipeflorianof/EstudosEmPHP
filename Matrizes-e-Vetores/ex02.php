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
        <pre>
        <?php
        $n = range(5,20,5);
        foreach($n as $valor){
            echo "$valor ";
        }
           
        ?>
        </pre>
    </div>
</body>
</html>
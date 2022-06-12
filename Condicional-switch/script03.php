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
        $estado = $_POST["lista"];

        switch($estado) {
            case 1:
                echo "O estado selecionado fica na Região norte";
                break;
            case 2:
                echo "O estado selecionado fica na região nordeste";
                break;
            case 3:
                echo "O estado selecionado fica na região sul";
                break;
            case 4:
                echo "O estado selecionado fica na região sudeste";
                break;
            case 5:
                echo "O estado selecionado fica na região centro-oeste";
                break;
        }
    
    
    ?>

</div>
</body>
</html>
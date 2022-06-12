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
            $n = array(
                    7 => 1,
                    6 => 3,
                    45 => 6,
                    7889 => 43,
                    2 => 4534);
                    $n[] = "E";
                    unset($n [7889]);
                    unset($n [7890]);
                    $n[] = "Felipe";
            print_r($n);
        ?>
        </pre>

                <pre>
                    <?php // Array associativo

                    $test = array(
                        "nome" => "Felipe",
                        "Idade" => 18,
                        "Altura" => "1.80",
                        "peso" => 64.5,
                    );
                    $test["fuma"] = true;
                       foreach($test as $key => $content){
                        echo "<br>O valor de $key é $content <br>";
                       }
                    ?>
                </pre>

    </div>
</body>
</html>
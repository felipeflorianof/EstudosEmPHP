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
      
            $n = array(15, 16, 4, 8, 42, 23);
            $n[] = 18; // adiciona valores ou elementos ao final do meu array / array_push($n, 18); seria uma outra forma de fazer
            array_pop($n); // Elimina o último valor do meu array, nesse caso o 18
            array_unshift($n, 7); //Adiciona valores ao início do array
            array_shift($n); //Remove o primeiro valor do array
            rsort($n); // Organiza o array em ordem decresente
            asort($n); // Organiza o array em ordem crescente MOVENDO TAMBÉM OS ÍNDICES
            sort($n); // Organiza o array em ordem crescente
            ksort($n); // Organiza os índices em ordem
            krsort($n); // Organiza os índices em order decrescente

            
                print_r($n);
                echo "O array tem ".count($n)." elementos.</br>";
                
            
        ?>
        </pre>


    </div>
</body>
</html>
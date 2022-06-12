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
     
<h3>printf</h3>
    <?php


        $produto = "Leite";
        $preco = 4.5;
        // echo "O $produto custa R$ ". number_format($preco,2)."</br>"; Esse comando faz a mesma coisa do comando abaixo, porém o comando abaixo é uma função string e pode ser mais útil em algumas situações.
        printf("O %s custa R$ %.2f", $produto, $preco);


        
        /* Parâmetros
        
        %d = Valor decimal (Positivo ou negativo)
        %u = Valor decimal sem sinal (Apenas positivos)
        %f = Valor real
        %s = string
        
        */

    ?>
<br><br>

<h3>print_r</h3>
    <?php
        //Muito útil para períodos de teste, o objetivo aqui não é exibir o vetor de forma bonita, mas sim exibi-lo claramente.

        $x[0] = 1;
        $x[1] = 2;
        $x[2] = 33;
        $x[3] = 421;

        print_r($x);

        echo "<br>";

        $x2 = array(1, 2, 3, 4, 54, 12, 78, 100);
        print_r($x2); // var_dump($x2) ou var_export($x2) funcionariam também. some little things will change, but not the final result.
    ?>
<h3>wordwrap</h3>
    <?php

        $txt = "Esse é apenas um exemplo de uma string muito maior que o normal, por isso vamos utilizar o wordwrap nela...";
        $res = wordwrap($txt, 5, "</br>\n", false);
        echo $res;


    ?>
<h3>strlen</h3> 
    <?php // Verifica o length da string.

       $teste = "Exemplo";
       $tamanho = strlen($teste); 
       echo "A string da variável teste: ($teste) possui $tamanho letras.";
    ?>
<h3>trim</h3>
    <?php // elimina caractéres desnecessários que o usuário possa vir a digitar, por exemplo esses espaços no começo e fim da variável $nome. algumas variações dessa função são o ltrim e o rtrim.

        $nome = "   Jose da Silva   ";
        $ajustatamanho = trim($nome);
        echo strlen($ajustatamanho);

    ?>
<h3>str_word_count</h3>
    <?php
    $frase = "Um exemplo de frase para ser exemplificado";
    $letras = str_word_count($frase, 1); // aqui vai dar 7, por que eu tenho 7 palavaras digitadas, posso usar de parâmetro 0, 1 e 2, cada um faz uma coisa, teste.
    print_r($letras);
    echo $letra;

    ?>
<h3>explode</h3>
    <?php // "Versão mais moderna" do str_word_count 

        $site = "Curso em video";
        $vetor = explode(" ", $site);
        print_r($vetor);

    ?>
<h3>str_split</h3>
    <?php // Pega cada palavra da string e joga em um índice diferente

    $nome = "Maria";
    $vetor = str_split($site);
    print_r($vetor);

    ?>
<h3>implode</h3>
    <?php // também se pode utilizar a função join(), é a mesma coisa. essa função vai inserir um caractere no caso a # foi usada apenas para exemplificar, você pode também utilizar " " por exemplo.  

    $vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "video";
    $text = implode(" ", $vetor);
    print $text;

    ?>

<h3>chr</h3>
    <?php // mostra a letra do código passado através de números no teclado

    $teste = chr(70);
    echo $teste;

    ?>

<h3>ord</h3>
    <?php // mostra o código de cada letra do teclado, o contrário da função acima.

    $teste = ord("f");
    echo $teste;

    ?>
<h3>strtolower</h3>
    <?php // deixa a string em letras minúsculas

    $nome = "Felipe Floriano";
    echo strtolower($nome);

    ?>
<h3>strtoupper</h3>
    <?php // deixa a string em letras maiúsculas

    $nome = "Felipe Floriano";
    echo strtoupper($nome);

    ?>
<h3>ucfirst</h3>
    <?php // Deixa A PRIMEIRA LETRA em maíuscula, uc significa 'UpperCase', ucfirst, a primeira letra será maiúscula.

    $nome = "felipe floriano";
    print ucfirst($nome);

    ?>
<h3>ucwords</h3>
    <?php // Deixa A PRIMEIRA LETRA em maíuscula, uc significa 'UpperCase', ucfirst, a primeira letra será maiúscula.

    $nome = "felipe floriano";
    print ucwords($nome);

    ?>
<h3>strrev</h3>
    <?php // escreve a string ao contrário
    $nome = "felipe floriano"; 
    print strrev($nome);

    ?>
<h3>strpos</h3>
    <?php // de acordo com o segundo parâmetro passado, ele vai mostrar a posição que aquela string se encontra.
    $nome = "felipe floriano";
    echo strpos($nome, "floriano");

    ?>
<h3>stripos</h3>
    <?php // de acordo com o segundo parâmetro passado, ele vai mostrar a posição que aquela string se encontra, considerando letras maiúsculas e mínusculas.
    $nome = "felipe floriano";
    echo stripos($nome, "FLORIANO");

    ?>
<h3>substr_count</h3>
    <?php // conta quantas vezes o segundo parâmetro (nesse casso a string "felipe") foi encontrado na frase.
    $nome = "felipe floriano felipe";
    echo substr_count($nome, "felipe");

    ?>
<h3>substr</h3>
    <?php // fatia a string, de acordo com os parâmetros passados, sendo 0 indicando onde começa e 6 o número de passos até o"fatiamento". também funciona de outra maneira passando apenas 1 parâmetro ou passando parâmetros negativos, teste.
    $nome = "felipe floriano";
    echo substr($nome, 0, 6);

    ?>
<h3>str_pad</h3>
    <?php // faz uma string caber em um determinado espaço, STR_PAD_RIGHT, STR_PAD_LEFT e STR_PAD_BOTH
    $nome = "felipe floriano";
    $novo = str_pad($nome, 30, "-", STR_PAD_BOTH);
    print $novo;

    ?>
<h3>str_repeat</h3>
    <?php //repete o que passarmos como parâmetro, sendo o 1 parâmetro o que queremos repetir e o segundo as vezes que queremos repetir.
    $nome = "felipe floriano ";
    print str_repeat("-", 36)."</br>";
    print str_repeat($nome, 2)."</br>";
    print str_repeat("-", 36). "</br>";
    

    ?>
<h3>str_replace</h3>
    <?php // substitui uma string por outra, podemos usar o str_ireplace também, esse i é de ignore.
    $frase = "Gosto de estudar Matemática!";
    print str_replace("Matemática", "PHP", $frase);

    ?>
</div>
</body>
</html>

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
    <form method="post" action="script01.php">

    Digite um número: <input type="number" placeholder="Digite um número:" name="n"><br><br>
    <fieldset>
        <legend> Operação</legend>
        <input type="radio" name="op" id="dobro" value="1" checked>
        <label for="dobro">Dobro</label>
        <input type="radio" name="op" id="cubo" value="2">
        <label for="cubo">Ao cubo</label>
        <input type="radio" name="op" id="raiz" value="3">
        <label for="raiz">Raíz quadrada</label><br><br>
        <input type="submit" value="Calcular">
    </fieldset>

    </form>
</div>
</body>
</html>
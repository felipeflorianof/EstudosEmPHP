
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
    
    <select name="lista" id="list">
    <option value="inf">CONSIDERE OS SEGUINTES VALORES</option>
    <option value="2">Segunda = 2</option>
    <option value="3">Terça = 3</option>
    <option value="4">Quarta = 4</option>
    <option value="5">Quinta = 5</option>
    <option value="6">Sexta = 6</option>
    <option value="7">Sábado = 7</option>
    <option value="1">Domingo = 1</option>

    </select>
    <br><br>
    <form method="post" action="script02.php">

    Digite o dia da semana: <input type="number" placeholder="Digite um número" name="d" min="1" max="7" required><br><br>
    <br>
    <input type="submit" value="Enviar">

    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="proc.php" method="post">
        <div>
            <label for="nome">Nome:  </label>
            <br>
            <input type="text" name="nome" id="nome"/>
            <br>
            <label for="cpf">CPF:  </label>
            <br>
            <input type="text" name="cpf" id="cpf"/>
            <br>
            <label for="rg">RG:  </label>
            <br>
            <input type="text" name="rg" id="rg"/>
            <br>
            <label for="EMAIL">EMAIL:  </label>
            <br>
            <input type="email" name="ema" id="ema"/>
        </div> 
        <div>
            <input type="submit" value="Enviar">
        </div>
        
</body>
</html>
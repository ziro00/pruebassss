
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

        <form method="POST" action="PHP/subir.php">
        <h2>Ingresar:</h2>
            <input type="text" name="ci" placeholder="CI">
            <br>
            <input type="text" name="nombre" placeholder="Nombre">
            <br>
            <input type="text" name="apellido" placeholder="Apellido">
            <br>
            <select name="grupo" placeholder="Grupo">
                <option value="3BA">3BA</option>
                <option value="3BB">3BB</option>
                <option value="3BC">3BC</option>
                <option value="3BD">3BD</option>
            </select>
            <br>
            <input type="number" name="nota" placeholder="Nota" max="12">
            <br>
            <input type="submit" value="Subir">

        </form>
</body>
</html>
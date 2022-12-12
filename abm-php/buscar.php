
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
    <form action="PHP/buscar.php" method="POST">
        <select name="Juicio">
            <option value="Exonera">Exonera</option>
            <option value="Febrero">Febrero</option>
            <option value="Diciembre">Diciembre</option>
        </select>
        <label for="clase">Seleccione la clase a la que pertenece el alumno:</label>
        <br>
        <input type="submit" value="buscar">
    </form>
</body>
</html>


<?php 
    require 'PHP/conectar.php';
 ?>
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
  
     <table border="1" >
        <tr>
            <td>CI</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>GRUPO</td>
            <td>NOTA</td>
            <td>JUICIO</td>
        </tr>
        <?php 
            $sql="SELECT * from estudiante";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>
                <tr>
                    <td><?php echo $mostrar['ci'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['apellido'] ?></td>
                    <td><?php echo $mostrar['grupo'] ?></td>
                    <td><?php echo $mostrar['nota'] ?></td>
                    <td><?php echo $mostrar['juicio'] ?></td>
                </tr>
            <?php 
            }
             ?>
    </table>
    <br>
    <a href="ingresar.php"><button>Ingresar</button></a>
    <a href="eliminar.php"><button>Eliminar</button></a>
    <a href="editar.php"><button>Editar</button></a
</body>
</html>
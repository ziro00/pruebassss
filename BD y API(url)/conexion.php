<!DOCTYPE html>
<html>
<head>
	<title>ejemplo de conexion</title>
</head>
<body>
<table border="10">
<tr>
  <th>CI</th>
  <th>Nombre</th>
  <th>eMail</th>
  <th>F. Nacimiento</th>
</tr>




<?php

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_CONTRA','');
define('BD_NOMBREBD','queengamer');

  $conexion = new mysqli(BD_SERVIDOR,BD_USUARIO,BD_CONTRA,BD_NOMBREBD);
   if($conexion->connect_errno){
   echo "Error al abrir";
}else{
	$sql="select * FROM persona";
  $resultado=$conexion->query($sql);
  while($fila=$resultado->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$fila['CI']."</td>";
    echo "<td>".$fila['Nombre']."</td>";
    echo "<td>".$fila['Email']."</td>";
    echo "<td>".$fila['Fnac']."</td>";
    echo "<tr>";
}
}

?>
</table>
</body>
</html>
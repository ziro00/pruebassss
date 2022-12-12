<?php
  require 'conectar.php';

  $CI = $_POST['ci'];

  $message = 'mau';
    
  if (!empty($CI)) {
    $sql = "DELETE FROM estudiante WHERE ci=".$CI."";
    $stmt = $conexion->query($sql);
    header("Location: ./../index.php");
  }
  ?>
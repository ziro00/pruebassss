<?php 
    require 'conect.php';
    $Juicio = $_POST['Juicio'];
	$stmt = $pdo->query("SELECT * FROM estudiante WHERE juicio = '$Juicio' ");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rows);
?>
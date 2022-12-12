<?php
$link = 'mysql:host=localhost;dbname=pweb';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($link,$user,$pass);

    }
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
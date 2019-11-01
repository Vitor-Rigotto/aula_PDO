<?php
$conn = new PDO("mysql:dbname=aula;host=localhost","root","kalunga");


$stmt = $conn->prepare("DELETE FROM usuarios WHERE codigo = :CODIGO");

$codigo = 7;

$stmt->bindParam(":CODIGO",$codigo);


$stmt->execute();

?>
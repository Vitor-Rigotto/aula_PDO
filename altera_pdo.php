<?php
$conn = new PDO("mysql:dbname=aula;host=localhost","root","kalunga");
$stmt = $conn->prepare("UPDATE usuarios SET  nome = :NOME, sobrenome = :SOBRENOME, email = :EMAIL, senha = :SENHA WHERE codigo = :CODIGO ");

$codigo = 7;
$nome = "MARIA";
$sobrenome = "DO CARMO";
$email = "maria123@maria.com";
$senha = "654321";



$stmt->bindParam(":NOME",$nome);
$stmt->bindParam(":SENHA",$senha);
$stmt->bindParam(":SOBRENOME",$sobrenome);
$stmt->bindParam(":EMAIL",$email);
$stmt->bindParam(":CODIGO",$codigo);


$stmt->execute();

?>
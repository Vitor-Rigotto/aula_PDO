<?php 
$conn = new PDO("mysql:dbname=aula;host=localhost", "root", "");
$stmt = $conn->prepare("INSERT INTO usuarios (codigo, nome, sobrenome, email, senha, horario)
VALUES (:CODIGO, :NOME, :SOBRENOME, :EMAIL, :SENHA, :HORARIO)");

$codigo = NULL;
$nome = "Funciona ";
$sobrenome = "DO CARMO";
$email = "abc@def.com";
$senha = "123456";
$horario = NULL;

$stmt->bindParam(":CODIGO", $codigo);
$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":SOBRENOME", $sobrenome);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":HORARIO", $horario);

$stmt->execute();

?>
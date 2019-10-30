<?php
$conn = new PDO("mysql:dbname=aula;host=localhost", "root", "");

$conn->beginTransaction();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE codigo = :CODIGO");

        $codigo = 15; // tenha certeza que exista um registro com esse codigo

        $stmt->bindParam(":CODIGO", $codigo);

        $stmt->execute();

$conn->rollBack(); // desfaz todas as ações anteriores
//$conn->commit(); //confirma todas as ações anteriores

?>
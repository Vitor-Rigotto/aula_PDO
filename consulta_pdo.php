<?php
$conn = new PDO("mysql: dbname=aula; host=localhost", "root", "" );

$stmt = $conn->prepare("select * from usuarios order by 1");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);

?>
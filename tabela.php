<?php 

$server 	= '127.0.0.1';
$usuario 	= 'root';
$senha 		= '';
$database	= 'aula';
$con = mysqli_connect($server,$usuario,$senha,$database);
if (mysqli_connect_errno()) {
	echo "Falha ao conectar com o Banco de Dados!!";
}else{
	$comandoSQL = '
					CREATE TABLE usuarios (
					codigo INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					nome VARCHAR(255) NOT NULL,
					nascimento DATETIME NOT NULL,
					email VARCHAR(50),
					naturalidade VARCHAR(32),
                    ufnatural VARCHAR(2),
                    estado VARCHAR(10),
                    imagem VARCHAR(255)
					)
				';
	mysqli_query($con,$comandoSQL);
	mysqli_close($con);

}


 ?>
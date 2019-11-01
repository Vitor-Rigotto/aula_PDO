<?php 

$server 	= '127.0.0.1';
$usuario 	= 'root';
$senha 		= '';
$database	= 'aula';
$con = mysqli_connect($server,$usuario,$senha,$database);
if (mysqli_connect_errno()){
	// erro na conexão
		echo "Erro de conexão =>".mysqli_connect_error();
		echo "Criando database....<br>";
		$con = mysqli_connect($server,$usuario,$senha);
		if (!mysqli_connect_errno()){
			$consultaSQL = 'CREATE database aula';
			mysqli_query($con,$consultaSQL);
			mysqli_close($con);
			echo "Banco de Dados Criado com Sucesso!!<br>";
		}

}else{
	// conexão com sucesso
	echo "Conectado com Sucesso!!";
} 


 ?>
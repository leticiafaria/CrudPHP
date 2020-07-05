<?php 

require_once 'db_connect.php';

if(isset($_GET['cpf'])) {
	$cpf = $_GET['cpf'];

	$sql = "DELETE FROM cadastro WHERE cpf = {$cpf}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Removido com sucesso!</p>";
		echo "<a href='../exibir.php'><button class=\"button\" type='button'>Voltar</button></a>";
	} else {
		echo "Erro ao deletar registro : " . $connect->error;
	}

	$connect->close();
}

?>
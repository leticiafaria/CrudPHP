<?php 

require_once 'db_connect.php';

if(isset($_POST["nome"])) {

	if (empty($_POST["nome"]) ||
		empty($_POST["dataNasc"]) ||
		empty($_POST["rg"]) ||
		empty($_POST["pai"]) ||
		empty($_POST["mae"]) ||
		empty($_POST["cpf"]) ||
		empty($_POST["telefone"]) ||
		empty($_POST["profissao"]) ||
		empty($_POST["email"]) ||
		empty($_POST["escolaridade"]) ||
		empty($_POST["celular"])) {

		$_SESSION['msg'] = "Preencha todos os campos antes de cadastrar!";
		header("Location: ../formulario.php");
		exit();
	}

	extract($_POST);

	$sql = "SELECT * FROM cadastro where cpf = '{$cpf}'";
	$result = $connect->query($sql);

	if ($result->num_rows >= 1) {
		$_SESSION['msg'] = "CPF já cadastrado.";
		header("Location: ../formulario.php");
		exit();
	}

	$sql = "INSERT INTO cadastro (nome,dataNasc,rg,pai,mae,cpf,telefone,profissao,email,escolaridade,celular) VALUES ('$nome','$dataNasc','$rg','$pai','$mae','$cpf','$telefone','$profissao','$email','$escolaridade','$celular')";
	if($connect->query($sql) === TRUE) {
		echo "<p>Gravado com sucesso</p>";
		echo "<a href='../formulario.php'><button class=\"button\" type='button'>Voltar</button></a>";
		echo "<a href='../exibir.php'><button class=\"button\" type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>
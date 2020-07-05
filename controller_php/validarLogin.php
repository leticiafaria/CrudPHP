<?php 

require_once 'db_connect.php';

if(isset($_POST)) {

	if (empty($_POST["login"])) {
		$_SESSION['msg'] = "Preencha os campos antes de logar!.";
		header("Location: ../index.php");
		exit();
	}else if(strlen($_POST["login"]) < 3 ){
		$_SESSION['msg'] = "Login precisa ter no mínimo 3 caracteres e Senha precisa ter no mínimo 3 e máximo 8.";
		header("Location: ../index.php");
		exit();
	}

	if (empty($_POST["senha"])) {
		$_SESSION['msg'] = "Preencha os campos antes de logar!";
		header("Location: ../index.php");
		exit();
	}else if(strlen($_POST["senha"]) < 3 || strlen($_POST["senha"]) > 8){
		$_SESSION['msg'] = "Login precisa ter no mínimo 3 caracteres e Senha precisa ter no mínimo 3 e máximo 8.";
		header("Location: ../index.php");
		exit();
	}

	
	//extract($_POST);

	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$sql = "SELECT * FROM usuario where login = '{$login}' and senha = '{$senha}'";

	$result = $connect->query($sql);

	if ($result->num_rows < 1) {
		$_SESSION['msg'] = "Dados de acesso invalidos.";
		header("Location: ../index.php");
		exit();
	}

	$_SESSION['logado'] = true;
	header("Location: ../exibir.php");
	

	$connect->close();
}

?>
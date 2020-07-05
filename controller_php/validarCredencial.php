<?php 

if (!isset($_SESSION['logado']) || empty($_SESSION['logado']) || !$_SESSION['logado'] ) {
	$_SESSION['msg'] = "Faça login para ter acesso";
	header("Location: ../index.php");
}

?>
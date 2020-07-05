<!DOCTYPE html>
<html>
<head>
	<title>Lista 6</title>
	<?php require_once('topo.php') ?>

</head>
<body>	
		<form id ="loginForm" method="post" action="controller_php/validarLogin.php"> 
			<div class="grupo">
				<label for="login">Login:</label>
				<span class="campo-nulo"><br>
					<input id="login" name="login" type="text" placeholder=""> <br>
				</span>
				<span class="campo-nulo"> 
				</span>
			</div>
			<div class="grupo">
				<label for="senha">Senha:</label>
				<span class="campo-nulo"><br>
					<input id="senha" name="senha" type="password" placeholder=""> <br>
				</span>
				<span class="campo-nulo">
				</span>
			</div>
			<span>
				<button id="cadastrar" class="button" type="submit">Logar</button>
				<button id="limpar" class="button" onclick="reset()">Limpar</button>
			</span>
		</form>

		<div class="row">
			<div class="col-md-12">
				<?php
				session_start();
				if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
			</div>
		</div>

</body>
</html>
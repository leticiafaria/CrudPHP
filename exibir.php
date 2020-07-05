<?php require_once 'controller_php/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista 6</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<?php require_once('topo.php') ?>
	
</head>
<body>
<br/>
<div>
	<a href="formulario.php"><button class="button" type="button">Cadastrar</button></a>
	<br/><br/>
	<table class="table">
		<thead>
			<tr>
				<th>CPF</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Data Nascimento</th>
				<th>RG</th>
				<th>Pai</th>
				<th>Mãe</th>		
				<th>Escolaridade</th>
				<th>Telefone</th>
				<th>Profissão</th>
				<th>Celular</th>
				<th>Remover</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM cadastro";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) { ?>

					<tr>
						<td><?= $row['cpf'] ?></td>
						<td><?= $row['nome'] ?></td>
						<td><?= $row['email'] ?></td>
						<td><?= $row['dataNasc'] ?></td>
						<td><?= $row['rg'] ?></td>
						<td><?= $row['pai'] ?></td>
						<td><?= $row['mae'] ?></td>
						<td><?= $row['escolaridade'] ?></td>
						<td><?= $row['telefone'] ?></td>
						<td><?= $row['profissao'] ?></td>
						<td><?= $row['celular'] ?></td>
						<td>
							<a href="controller_php/remove.php?cpf=<?= $row['cpf'] ?>">
								<button type='button'>Remover</button>
							</a>
						</td>
					</tr>
				<?php }
			} else {
				echo "<tr><td colspan='4'><center>Sem usuarios cadastrados</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<?php require_once('topo.php') ?>

</head>
<header>

</header>
<body>

		<div class="col-md-12">
				<?php
				session_start();
				if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
		</div>
			
		<form method="post" action="controller_php/validarFormulario.php">
		<div id="Esquerda">
            <div id="margem">
                <br>
                <label for="name">Nome Completo:</label><br>
                <input name="nome" type="text" id="name" placeholder="Nome Completo"/>
                <br>
                <label for="RG"> RG: (formato: xx.xxx.xxx.xx): </label><br>
                <input name="rg" type="text" id="RG" pattern="\d{2}.\d{3}.\d{3}.\d{2}$" placeholder="00.000.000.00" />
                <br>
                <label for="Pai"> Pai: </label><br>
                <input name="pai" type="text" id="Pai" placeholder="Nome do Pai"/>
                <br>
                <label  for="Escolaridade"> Escolaridade: </label><br>
                <select name="escolaridade">
        	<option>Selecione</option>
        	<option>Ensiono Fundamental</option>
        	<option>Ensino Médio</option>
        	<option>Ensino Superior</option>
    		</select>
                <br>
                <label for="tel"> Telefone (formato: xxxx-xxxx): </label><br>
                <input name="telefone" type="tel" pattern="\d{4}-\d{4}$" id="tel" class="form-control phone-mask" placeholder="0000-0000"/>
                <br>                
                    Data de Nascimento: <br>
                    <input name="dataNasc" type="date" name="Birthday" />
                <br>
                <label for="mail">E-mail: </label><br>
                <input name="email" type="email" id="mail" placeholder="exemplo@hotmail.com" />
                <br>
                <br><br>
                <button class="button" type="submit">Cadastrar</button>
                <button class="button" type="reset" onclick="reset()">Limpar Campos</button>
            </div>
        </div>
        <div id="Direita">
            <br> <label for="cpf">CPF (formato: xxx.xxx.xxx-xx):</label><br>
            <input name="cpf" type="text" patthern="^\d{3}.\d{3}.\d{3}-\d{2}$" id="cpf" class="form-control cpf-mask" placeholder="000.000.000-00"/>
            <br>
            <label for="Mae">Mãe: </label><br>
            <input name="mae" type="text" placeholder="Nome da Mãe">
            <br>


            <label for="Profissao">Profissao: </label><br>
            <input name="profissao" type="text" placeholder="Profissão">
            <br>
            <label for="Celular">Celular (formato: (xx)xxxx-xxxx): </label><br>
            <input id="cel" type="tel" patthern="(\d{2})\d{4}-\d{4}$" name="celular" placeholder="(00)00000-0000">

        </div>
		</form>

</body>
</html>
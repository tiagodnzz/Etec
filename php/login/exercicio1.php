<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício</title>
</head>
<body>
	<center>
		<fieldset>
			<legend>Exercício</legend>
				<form action="" method="POST">
					Login:
					<input type="text" name="txt_login" placeholder="Digite o seu login"><br>
					Senha:
					<input type="password" name="txt_senha" placeholder="Digite a sua senha"><br>
					<input type="submit" name="btn_cadastrar" value="Cadastrar">
				</form>
		</fieldset>
	</center>
	<?php
  			//Recebendo dados do formulario
			$login = $_POST['txt_login'];
			//Exibir o resultado
			/*echo 'Login:'.$login.'<br>';*/

			$senha = $_POST['txt_senha'];
			/*echo 'senha:'.$senha.'<br>';*/

			
			if(($login == 'administrador') && ($senha == '1234')){
				 echo '<font color = "blue">'."seja bem vindo $login";
			}			
			else{
				echo '<font color = "red">'."usuario ou senha incorreto";
			}

		?> 
	
</body>
</html>
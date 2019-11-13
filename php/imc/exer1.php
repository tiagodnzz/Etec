<!DOCTYPE html>
<html>
   <head>
	 <meta charset="utf-8">
		 <title>Exercicio 1</title>
   </head>
  <body bgcolor="white">
  		<center>
  			<fieldset>
  				<legend>Login</legend>
  					<form action="" method="POST">
  						Login:
  						<input type="text" name="txt_login" placeholder="Digite o seu login"><br><br>
  						Senha:
  						<input type="password" name="txt_senha" placeholder="Digite a sua senha"><br><br>
  						<input type="submit" name="btn_cadastrar" value="Cadastrar"><br>

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
				echo "seja bem vindo $login!";
			}
				elseif(( $login == 'Administrador') && ($senha == '1234')){
				echo "seja bem vindo $login!";
			} 
				elseif(( $login == 'ADMINISTRADOR') && ($senha == '1234')){
				echo "Seja bem vindo $login!";
			}
			else{
				echo "Usuario ou senha incorreto!";
			}
		?>

  </body>
</html>
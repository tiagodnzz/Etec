<!DOCTYPE html>
<html>
   <head>
	 <meta charset="utf-8">
		 <title>Aula3</title>
   </head>
  <body bgcolor="pink">
  		<center>
  			<fieldset>
  				<legend>Login</legend>
  					<form action="" method="POST">
  						Login:
  						<input type="text" name="txt_login" placeholder="Digite o seu login"><br>
  						Senha:
  						<input type="password" name="txt_senha" placeholder="Digite a sua senha"><br>
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

			if(($login == 'carlos') && ($senha == '4605')){
				echo "seja bem vindo $login!";
			}
				elseif(( $login == 'Carlos') && ($senha == '4605')){
				echo "seja bem vindo $login!";
			} 
				elseif(( $login == 'CARLOS') && ($senha == '4605')){
				echo "seja bem vindo $login!";
			} 
				elseif(( $login == 'Carlos') && ($senha == '4605')){
				echo "seja bem vindo $login!";
			} 
			else{
				echo "usuario ou senha incorreto!";
			}

		?> 
  </body>
</html>
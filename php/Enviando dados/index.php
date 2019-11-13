<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Aula 2</title>
</head>
<body>
		<fieldset>
    <form action="" method="POST">
    	Nome:
    	<input type="text" name="txt_nome" placeholder="Digite o seu nome" size="40"><br>
    	Sexo:
    	<input type="radio" name="rdb_sexo" value="masculino">
    	Masculino
    	<input type="radio" name="rdb_sexo" value="feminino">
    	Feminino<br>
    	Email:
    	<input type="email" name="txt_email" placeholder="Digite o seu email"><br>
    	Estado:
    		<select name="slt_estado">
    			<option value=""></option>
    			<option value="sp">SP</option>
    			<option value="rj">RJ</option>
    			<option value="rn">RN</option>

    		</select>
    		Data de Nascimento
    	<input type="date" name="txt_data"><br>
    	<input type="passaword" name="txt_senha" placeholder="Digite sua senha"><br>
    <table>
    		<tr>
    				<center>
    			<td>
    				Mensagem:
    			</td>
    				</center>
    		</tr>
    	</table>		
    		
    				<textarea name="txa_mensagem" rows="10" cols="30"></textarea>

    	<input type="submit" name="btn_cadastrar" value="cadastrar">
    </form>
		</fieldset>  
		<?php

			$nome= $_POST['txt_nome'];
			echo 'nome:'.$nome.'<br>';

			$sexo= $_POST['rdb_sexo'];
			echo 'sexo:'.$sexo.'<br>';

			$email= $_POST['txt_email'];
			echo 'email:'.$email.'<br>';

			
			$estado= $_POST['slt_estado'];
			echo 'estado:'.$estado.'<br>';

			$data= $_POST['txt_data'];
			echo 'data de nascimento:'.$data.'<br>';

			$senha= $_POST['txt_senha'];
			echo 'senha:'.$senha.'<br>';


		?>  
</body>
</html>
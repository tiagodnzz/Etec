<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>
			Aula 1- codigo separadp
		</title>
</head>
<body>
	<center>
		<fieldset>
			<legend>Cadastro</legend>
				<form action="">
				Nome: 
					<input type="text" name="txt_nome" placeholder="Digite seu nome">
					<input type="submit" name="btn_cadastrar" value="Cadastrar"><br><br>
				</form>	
		</fieldset>
	</center>
	 <?php
	 //Recebe valores do campo nome
	 	$nome=$_GET['txt_nome'];
	 //Exibindo o nome
	 	echo "<center> O nome é: $nome</center>";
	 	//echo '<center>O nome é:'.$nome.'</center>';
	 	?>
	 	<br><br>		
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 3</title>
</head>
<body>
	<fieldset>
		<center>
			Média de Notas<br><br>
			<form method="POST">
				Aluno:
				<input type="text" name="aluno"><br><br>
				Nota 1:
				<input type="text" name="nota1"><br><br>
				Nota 2:
				<input type="text" name="nota2"><br><br>
				Nota 3:
				<input type="text" name="nota3"><br><br>
								
				<input type="submit" value="Calcular Média" name="btn_verificar">
			</form>
		</center>
	</fieldset>

	<?php

	$alu = $_POST['aluno'];
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$media =($nota1 + $nota2 + $nota3)/3;

	if ($media >= 7 ) {
		echo "$alu foi Aprovado com media $media";
	}
	elseif ($media >= 5 ) {
		echo "$alu foi Recuperação com media $media";
	}
	else {
		echo "$alu foi Reprovado com media $media";
	}
	

	 ?>

</body>
</html>
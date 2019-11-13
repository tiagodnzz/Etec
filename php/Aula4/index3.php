<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula 4</title>
</head>
<body >
	<center>
		<h2>Selecione a cor desejada</h2>
		<form method="POST">
			<input type="radio" name="week" value="Seg">Seg
			<input type="radio" name="week" value="Ter">Ter
			<input type="radio" name="week" value="Qua">Qua
			<input type="radio" name="week" value="Qui">Qui
			<input type="radio" name="week" value="Sex">Sex
			<input type="radio" name="week" value="Sab">Sab
			<input type="radio" name="week" value="Dom">Dom
			<input type="submit" value="verificar" name="btn_verificar">
		</form><br><br>

		<?php
		$valor = $_POST['week'];
		switch($valor){
				
				case "Seg":
					echo "Operação de software aplicativo II - Fernando<br>Desenvolvimento de design de websites II - Rafael";
					break;
				
				case "Ter":
					echo "Desenvolvimento de software - Thiago";
					break;
				
				case "Qua":
					echo "Projeto de aplicações web - Sara<br>Redes de comunicações de dados - Thiago";
					break;
				
				case "Qui":
					echo "Tecnologia e linguagens para banco de dados I - Rafael<br>Pré TCC - Sara";
					break;
				
				case "Sex":
					echo "Criação e editoração de imagens - Rafael<br>Composição e projeto - Rafael";
					break;
				
				case "Sab":
					echo "Lazer";
					break;
				
				case "Dom":
					echo "Lazer";
					break;
		}
		?>

	</center>
</body>
</html>
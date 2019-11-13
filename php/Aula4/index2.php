<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula 4</title>
</head>
<body bgcolor="grey">
	<center>
		<h2>Selecione a cor desejada</h2>
		<form method="POST">
			<select name="Cor">
				<option value="">&nbsp;</option>
				<option value="azul">Azul</option>
				<option value="amar">Amarelo</option>
				<option value="verd">Verde</option>
				<option value="verm">Vermelho</option>
				<option value="pret">Preto</option>
			</select>
			<input type="submit" value="verificar" name="btn_verificar">
		</form>
		<?php
		$valor = $_POST['Cor'];
		switch($valor){
				case "azul":
					echo '<font color="blue">blue</font>';
					break;

				case "amar":
					echo '<font color="yellow">Yellow</font>';
					break;

				case "verd":
					echo '<font color="green">Green</font>';
					break;

				case "verm" :
					echo '<font color="red">Red</font>';
					break;

				case "pret":
					echo '<font color="black">Black</font>';
					break;

				default:
					echo "Obrigado por participar !";
		}
		?>

	</center>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula 4</title>
</head>
<body bgcolor="#3299CC">
	<center>
		<form method="POST">
			Digite um valor de 0 a 5:
			<input type="text" name="txt_valor">
			<input type="submit" value="verificar" name="btn_verificar">
		</form>
		<?php
		$valor = $_POST['txt_valor'];
		switch($valor){
				case 0:
					echo "Você ganhou um playstantion 4";
					break;

				case 1:
					echo "Você Ganhou uma Bicicleta";
					break;

				case 2:
					echo "Você Ganhou uma Tv";
					break;

				case 3:
					echo "Você Ganhou uma moto";
					break;

				case 4:
					echo "Você Ganhou um barco";
					break;

				case 5:
					echo "Você Ganhou um Xbox one";
					break;

				default:
					echo "Obrigado por participar !";
		}
		?>

	</center>
</body>
</html>
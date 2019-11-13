<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula 4</title>
</head>
<body bgcolor="grey">
	<center>
		<h2>Selecione o personagem</h2>
		<form method="POST">
			<select name="nome">
				<option value="">&nbsp;</option>
				<option value="chaves">Chaves</option>
				<option value="chiquinha">Chiquinha</option>
				<option value="quico">Quico</option>
				<option value="nhonho">nhonho</option>
				<option value="dona">Dona Florinda</option>
				<option value="seu">Seu Madruga</option>
				<option value="clotilde">Dona Clotilde</option>
			</select>
			<input type="submit" value="Ver foto" name="btn_verificar"><br><br><br>
		</form>
		<?php
		$valor = $_POST['nome'];
		switch($valor){
				case "chaves":
					echo "<img src='IMG/cha.jpg'>";
					break;

				case "nhonho":
					echo "<img src='IMG/nho.jpg'>";
					break;

				case "seu":
					echo "<img src='IMG/mad.jpg'>";
					break;

				case "dona":
					echo "<img src='IMG/flo.jpg'>";
					break;

				case "clotilde":
					echo "<img src='IMG/vei.jpg'>";
					break;

				case "chiquinha":
					echo "<img src='IMG/chi.jpg'>";
					break;

				case "quico":
					echo "<img src='IMG/kik.jpg'>";
					break;



				default:
					echo "Obrigado por participar !";
		}
		?>

	</center>
</body>
</html>

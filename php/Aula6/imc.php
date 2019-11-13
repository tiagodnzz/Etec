<!DOCTYPE html>
<html>
<head>
	<title>Exercicio Imc</title>
</head>
<body>
	<fieldset>
		<center>
			Calcule seu IMC<br><br>
			<form method="POST">
				Nome:
				<input type="text" name="n"><br><br>
				Altura:
				<input type="text" name="a"><br><br>
				Peso:
				<input type="text" name="p"><br><br>

				<input type="submit" value="Calcular IMC" name="btn_verificar">
			</form>
			<br>
		

	<?php 

	$nome = $_POST["n"];
	$altu = $_POST["a"];
	$peso = $_POST["p"];
	$imc = $peso/($altu*$altu);

	if ($imc <=17) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Você esta muito abaixo do peso";
	}
	elseif ($imc <=18.49) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Você esta abaixo do peso";
	}
	elseif ($imc <=24.99) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Você esta no peso normal";
	}
	elseif ($imc <=29.99) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Você esta acima do peso";
	}
	elseif ($imc <=34.49) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Obesidade I";
	}
	elseif ($imc <=39.99) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Obesidade II (Severa)";
	}
	elseif ($imc > 40.00) {
		echo "$nome<br>";
		echo "Seu imc é de $imc, Obesidade III (Mórbida)";
	}
	
	 ?>
		</center>
	</fieldset>
</body>
</html>
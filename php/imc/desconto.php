<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
</head>
<body>
	<fieldset>
		<center>
			Veja seu Desconto<br><br>
			<form method="POST">
				Nome do Cliente:
				<input type="text" name="n"><br><br>
				Valor da compra:
				<input type="text" name="v"><br><br>
								
				<input type="submit" value="Calcular Desconto" name="btn_verificar">
			</form>
		</center>
	</fieldset>

	<?php 
	$nome = $_POST['n'];
	$valor = $_POST['v'];

	if ($valor <=200) {
		$desconto=$valor*0.10;
		$pagar=$valor-$desconto;
		echo "Seu desconto de $desconto e seu valor final é $pagar";
	}
	elseif ($valor <=500) {
		$desconto=$valor*0.15;
		$pagar=$valor-$desconto;
		echo "Seu desconto de $desconto e seu valor final é $pagar";
	}
	elseif ($valor <=500) {
		$desconto=$valor*0.20;
		$pagar=$valor-$desconto;
		echo "Seu desconto de $desconto e seu valor final é $pagar";
	}
	 ?>
	 
</body>
</html>
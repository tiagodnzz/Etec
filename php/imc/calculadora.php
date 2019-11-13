<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercicio 2</title>
	</head>
	<body>
		<center>
				<form method="POST">
					Valor 1:
					<input type="text" name="txt_valorone"><br>
					Valor 2:
					<input type="text" name="txt_valortwo"><br>
					Operação:
					<select name="slt_operacao">
						<option value="">&nbsp;</option>
						<option value="Som">Soma</option>
						<option value="Sub">Subtração</option>
						<option value="Mul">Multiplicação</option>
						<option value="Div">Divisão</option>
						<option value="Rai">Raiz Quadrada</option>
						<option value="Exp">Exponenciação</option>
						<option value="Res">Resto da Divisão</option>
					</select>
					<br>
					<input type="submit" value="Calcular" name="bnt_calcular" width="20">
				</form>
		</center>

		<?php
			$valorone=$_POST['txt_valorone'];
			$valortwo=$_POST['txt_valortwo'];
			$operacao=$_POST['slt_operacao'];

	switch ($operacao) {
		case 'Som':
		$resposta = $valorone + $valortwo;
			echo "Resposta: $resposta";
			break;
		case 'Sub':
		$resposta = $valorone - $valortwo;
			echo "Resposta: $resposta";
			break;
		case 'Mul':
		$resposta = $valorone * $valortwo;
			echo "Resposta: $resposta";
			break;
		case 'Div':
		$resposta = $valorone / $valortwo;
			echo "Resposta: $resposta";
			break;
		case 'Rai':
		$resposta = sqrt($valorone = $valortwo);
			echo "Resposta: $resposta";
			break;
		case 'Exp':
		$resposta = pow($valorone, $valortwo);
			echo "Resposta: $resposta";
			break;
		case 'Res':
		$resposta = $valorone % $valortwo;
			echo "Resposta: $resposta";
			break;
			default;
			break;							
		}
	?>
	</body>
</html>
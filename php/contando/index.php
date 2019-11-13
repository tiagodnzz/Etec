<!DOCTYPE html>
<html>
<head>
	<title>Aula 9</title>
</head>
<body>
	<center>
		<fieldset>
			<form method="GET" >
				Inicial:
			<input type="text" name="txt_1"><br><br>
				Final:
			<input type="text" name="txt_2"><br><br> 
				Selecionar:	
				<select name="slt">
					<option value="">&nbsp;</option>
					<option value="par">Par</option>
					<option value="impar">Impar</option>
				</select><br><br>

			<input type="submit" name="btn_verific"><br><br>
<?php
	$ini = $_GET ['txt_1'];
	$fini = $_GET ['txt_2'];
	$pi = $_GET ['slt'];

		if($pi == 'par' ) {
			for ($i=$ini; $i <= $fini ; $i++) {
				if ($i%2 == 0) {
							echo $i. "<br>";
						}	
		}
	}
	elseif ($pi == 'impar') {
		for ($i=$ini; $i <= $fini ; $i++) {
				if ($i%2 == 1) {
							echo $i. "<br>";
						}	
		}	
	}
?>
			</form>
		</fieldset>
	</center>
</body>
</html>
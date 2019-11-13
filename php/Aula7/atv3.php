<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Repetidorzin While</title>
</head>
<body>
	<center>
		<fieldset>
			<form method="POST" action="">
				Frase:
				<input type="text" name="txt_fra"><br><br>
				Numero de vezes:
				<input type="text" name="txt_num"><br><br>
				<input type="submit" name="btn_enviar">
			</form>
		</fieldset>
	</center>
<?php
$frase = $_POST['txt_fra'];
$num = $_POST['txt_num'];
	$i=0;
	while ($i <= $num) {
	echo "$frase<br>";
	$i++;
	}
?>
</body>
</html>
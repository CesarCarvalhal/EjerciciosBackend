<html>
	<body>
	<h1>Jubilacion</h1>
	<?php
	function edad_en_X_años($edad) {
		return $edad +5;
	}
	function mensaje($age){
	if (edad_en_X_años($age) > 65) {
		return "En 5 años tendras edad de jubilacion";
		} else {
		return "¡Disfruta de tu tiempo!";
		}
	}
	?>

	<table>
	<tr>
		<th>Edad</th>
		<th>Info</th>
	</tr>

	<?php
	$lista = array(50,60,61,62,63);
	foreach ($lista as $valor) {
		echo "<tr>";
		echo "<td>".$valor."</td>";
		echo "<td>".mensaje($valor)."</td>";
		echo "</tr>";
	}
	?>

	</table>
	</body>
</html>

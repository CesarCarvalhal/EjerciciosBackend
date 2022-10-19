<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('Fail');
?>
<html>
	<body>
		<h1>Conexion establecida</h1>
		<a href="/logout.php">Logout</a>
		<?php
			// Lanzar una query
			$query = 'SELECT * FROM tJuegos';
			$result = mysqli_query($db, $query) or die ('Query error');
			//Recorrer el resultado
			while ($row = mysqli_fetch_array($result)) {
				echo '<br>';
				echo '<br>';
				echo $row[1];
				echo '<br>';
				echo '<img src="'.$row[2].'">';
				echo '<br>';
				echo '<br>';
				echo $row[3];
				echo '<br>';
				echo $row[4];
				echo '<br>';
				echo '<br>';
				//Que cada elemento con ID <id> tenga un enlace href que redirija a la página:/detail.php?id=<id>
				echo '<a href="detail.php?juego_id='.$row[0].'">Ver detalles</a>';

			}
		mysqli_close($db);
		?>
	</body>
</html>

<?php
    $db = mysqli_connect('localhost','root','1234','mysitedb') or die ('Fail');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <style>

			*{
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}

			.tituloPagina{
				margin-top: 2%;
				text-align: center;
			}

			.conexionEStablecida{
				font-size: 15px;
			}


            .img{
                transition: 0.3s ease-in-out;
                width: 230px;
				margin-top:7%;
            }

            .img:hover{
                transform: scale(1.25);
            }

			div{
				display: inline-block;
				margin: 15px;
				margin-left: 6%;
				margin-top: 5%;
			}

			.tituloJuego{
				font-weight: bold;
				text-align: center;
			}
			
        </style>
    </head>
        <body>
            <h2 class="conexionEStablecida">Conexion establecida - <a class="enlace" href="/logout.php">Logout</a></h2>
            <h2 class="tituloPagina">JUEGOS</h2>
            <?php
                // Lanzar una query
                $query = 'SELECT * FROM tJuegos';
                $result = mysqli_query($db, $query) or die ('Query error');
                //Recorrer el resultado
                while ($row = mysqli_fetch_array($result)) {
                    //Mostrar los datos horizontales de la tabla
                    echo '<div>';

                    echo '<p class="tituloJuego">'.$row[1].'</p>';
                    echo '<a href="detail.php?juego_id='.$row[0].'"><img class="img" src="'.$row[2].'"></a>';
					echo '</div>';
					
                    
                }
            mysqli_close($db);
            ?>
        </body>
</html>
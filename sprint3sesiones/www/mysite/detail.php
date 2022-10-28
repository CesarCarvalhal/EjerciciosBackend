<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
    <head>
        <style>
            *{
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}

            body{
                background-color: #212121;
                color: white;
            }

            .logout{
                font-size: 15px;
                text-align: right;
                color: white;
            }

            .cajaComentario{
                color:
            }

            .trailer{
                color: white;
            }

            .cambioContrasena{
                color:white;
            }
        </style>
    </head>
        <body>
        <a class="logout" href="/logout.php">Logout</a> - <a class="cambioContrasena" href="/cambioContrasena.php">Cambiar contraseña</a>

            <?php
                if (!isset($_GET['juego_id'])) {
                    die('No se ha especificado un juego');
                    }
                    $juego_id = $_GET['juego_id'];
                    $query = 'SELECT * FROM tJuegos WHERE id='.$juego_id;
                    $result = mysqli_query($db, $query) or die('Query error');
                    $only_row = mysqli_fetch_array($result);
                    echo '<h1>'.$only_row[1].'</h1>';
                    echo '<img src="'.$only_row[2].'">';
                    echo '<br>';
                    echo '<a class="trailer" href="'.$only_row[3].'">Trailer</a>';
                    echo '<p>Dificultad: '.$only_row[4].'</p>';
                    echo '<br>';

                ?>
        <h3>Comentarios:</h3>
        <ul>
            <?php
                $query2 = 'SELECT * FROM tComentarios c join tUsuarios u  on u.id=c.usuario_id WHERE c.juego_id='.$juego_id;
                $result2 = mysqli_query($db, $query2) or die('Query Error');
                while ($row = mysqli_fetch_array($result2)) {
                        echo '<li>'.$row['nombre'].' ('.$row['fecha_comentario'].') : ' .$row['comentario'].'</li>';
                }
                mysqli_close($db);
            ?>

            </ul>
            <p>Deja un nuevo comentario:</p>
    <form class="cajaComentario"action="/comment.php" method="post">
        <textarea rows="4" cols="50" name="new_comment"></textarea><br>
        <input type="hidden" name="juego_id" value="<?php echo $juego_id; ?>">
        <input type="submit" value="Comentar">
    </form>
        </body>
</html>
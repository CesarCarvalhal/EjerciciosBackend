<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
    <body>
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
                echo '<p>'.$only_row[3].'</p>';
                echo '<p>'.$only_row[4].'</p>';
                echo '<br>';

            ?>
    <h3>Comentarios:</h3>
    <ul>
        <?php
            $query2 = 'SELECT * FROM tComentarios WHERE juego_id='.$juego_id;
            $result2 = mysqli_query($db, $query2) or die('Query error');
            while ($row = mysqli_fetch_array($result2)) {
                    echo '<li>'.$row['comentario'].'</li>';
                }
                mysqli_close($db);
            ?>
        </ul>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CambioContrasena</title>
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background-color: #212121;
        }

      .cambioContrasena{
        text-align: center;
        background-color: #dcdcdc;
        margin-left: 40%;
        margin-right: 39%;
        margin-top: 15%;
      }

      .boton{
        margin-top:5%;
        margin-bottom: 5%;
      }

      input{
        margin-top: 7px;
      }

      .enlaceLogin{
        color: white;

      }

      .enlaceHome{
        color: white;

      }
    </style>

</head>
<body>
<a class="enlaceLogin" href="/login.html">Login</a> - <a class="enlaceHome" href="/main.php">Home</a>


    <form class="cambioContrasena" action="cambioContrasena.php" method="post">
        <br>
        <label for="f_password">Contraseña actual</label>
        <input type="password" name="f_password" id="f_password">
        <label for="f_new_password">Nueva contraseña</label>
        <input type="password" name="f_new_password" id="f_new_password">
        <label for="f_new_password2">Repetir contraseña</label>
        <input type="password" name="f_new_password2" id="f_new_password2">
        <br>
        <input class= "boton"type="submit" value="Cambiar contraseña">
    </form>
    <?php
        session_start();
        $password_posted = $_POST['f_password'];
        $new_password_posted = $_POST['f_new_password'];
        $new_password_posted2 = $_POST['f_new_password2'];
        if (!empty($password_posted ) && !empty($new_password_posted)  && !empty($new_password_posted2) ) {
            $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');

            $query = "SELECT id, contrasena FROM tUsuarios WHERE id = '".$_SESSION['user_id']."'";
            $result = mysqli_query($db, $query) or die('Query error');
            if (mysqli_num_rows($result) > 0) {
                $only_row = mysqli_fetch_array($result);
                if ($only_row[1] == $password_posted) {
                    if ($new_password_posted == $new_password_posted2) {
                        $query = "UPDATE tUsuarios SET contrasena = '".$new_password_posted."' WHERE id = '".$_SESSION['user_id']."'";
                        $result = mysqli_query($db, $query) or die('Query error');
                        echo '<p>Contraseña cambiada</p>';
                    } elseif ($new_password_posted != $new_password_posted2) {
                        echo '<p>Las contraseñas no coinciden</p>';
                    }
                } else{
                    echo '<p>Contraseña incorrecta</p>';
                }

            }
            mysqli_free_result($result);
            mysqli_close($db);
        }
    ?>



</body>
</html>
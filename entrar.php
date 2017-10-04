<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Entrar</title>
        <meta name="description" content="pagina para entrar en la página web"/>
        <meta name="keywords" content="formulario, form, nombre, nombre de usuario, password"/>
        
        <?php
            include 'head.php';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <section id="entrar">
            <h2>Formulario para entrada en la página</h2>
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <table>
                    <tr>
                        <th>
                            <label for="nombre">Nombre ó nombre de usuario</label>
                        </th>
                        <td>
                            <input type="text" name="nombre" id="nombre" maxlength="20" required/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password">Contraseña</label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password" maxlength="20" required/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Aceptar"/>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
            if($_POST){
                $nombre_entrar = filter_input(INPUT_POST, 'nombre');
                $password_entrar = filter_input(INPUT_POST, 'password');
                
                $server = 'localhost';
                $user = 'root';
                $password = "";
                $db = "alerta_partidos_web_db";
                
                $conn = new mysqli($server, $user, $password, $db);
                
                if($conn->connect_error){
                    die("Conexión fallida: ".$conn->connect_error);
                }
                
                $sql = "SELECT username FROM usuarios WHERE (username='$nombre_entrar' OR email='$nombre_entrar') AND 
                    password='$password_entrar'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()) {
                        $_SESSION['entrada'] = $row['username'];
                    }
                }else{
                    echo "<div class='dataBase'>Su contraseña y su nombre de usuario o email no coinciden. "
                    . "Inténtelo de nuevo, por favor.</div>";
                }
                
                $conn->close();
                
                // creo una variable de sesion para utilizarla de contador y así recargar la página una vez
                // para que se muestren los enlaces de los canales.
                $_SESSION['entrar'] += 1;
                if($_SESSION['entrar'] == 1){
                $v = "<script>window.location.reload();</script>";
                for($i = 0; $i < 2; $i++){
                    echo $v;
                }
                unset($v);
                }                
            }            
            ?>
        </section>
        <?php
        include 'footer.php';
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Registrarse</title>
        <meta name="description" content="pagina para registrarse en alerta partidos"/>
        <meta name="keywords" content="formulario, form, nombre, nombre de usuario, email, password"/>
        <?php
            include 'head.php';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <section id="form_reg">
            <h2>Formulario para registrarse</h2>
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <table>
                    <tr>
                        <th>
                            <label for="nombre">Nombre</label>
                        </th>
                        <td>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre" maxlength="20"
                                   size="40" required/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="userName">Nombre de usuario</label>
                        </th>
                        <td>
                            <input type="text" name="userName" id="userName" placeholder="Nombre de usuario" maxlength="20"
                                   required/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="email">Email</label>
                        </th>
                        <td>
                            <input type="email" name="email" id="email" placeholder="example@gmail.com" required/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password1">Contraseña</label>
                        </th>
                        <td>
                            <input type="password" name="password1" id="password1" placeholder="Contraseña" required/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password2">Confirmar contraseña</label>
                        </th>
                        <td>
                            <input type="password" name="password2" id="password2" placeholder="Confirmar contraseña" required/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <input type="submit" value="Guardar">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if($_POST){
                    $nombre = filter_input(INPUT_POST, 'nombre');
                    $nombre_usuario = filter_input(INPUT_POST, 'userName');
                    $email = filter_input(INPUT_POST, 'email');
                    $password1 = filter_input(INPUT_POST, 'password1');
                    $password2 = filter_input(INPUT_POST, 'password2');
                    if($password1 === $password2){
                        $server = 'localhost';
                        $user = 'root';
                        $password = "";
                        $db = "alerta_partidos_web_db";
                        
                        $conn = new mysqli($server, $user, $password, $db);
                        if($conn->connect_error){
                            die("Conexion fallida: ".$conn->connect_error);
                        }
                        $sql1 = "SELECT username FROM usuarios WHERE username='$nombre_usuario'";
                        $result = $conn->query($sql1);
                        if($result->num_rows > 0){
                            echo "<div class='dataBase'>Este nombre de usuario ya existe en la base de datos, "
                            . "elija otro.</div>";
                        } else {
                            $sql = "INSERT INTO usuarios (nombre, username, email, password) "
                                    . "VALUES ('$nombre', '$nombre_usuario', '$email', '$password1')";

                            if ($conn->query($sql) === TRUE) {
                                echo "<div class='dataBase'>Te has registrado con éxito</div>";
                            } else {
                                echo "<div class='dataBase'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                            }
                        }
                        $conn->close();
                    }else{
                        echo "<div class='dataBase'>Las contraseñas no coinciden, inténtalo de nuevo por favor.</div>";
                    } 
                }else{
                    echo "<div class='dataBase'>No fueron rellenados los campos correctamente.</div>";
                }
            ?>
        </section>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
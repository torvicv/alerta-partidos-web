<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Teledeporte</title>
        <meta name="description" content="pagina donde puedes introducir el deporte sobre el que quieres recibir 
              las alertas de correo electronico del canal teledeporte"/>
        <meta name="keywords" content="teledeporte, deporte, alertas, email, correo electronico, canal"/>
        <?php
        include 'head.php';
        ?>
    </head>
    <body id="teledeporte_body">
        <?php
        include 'header.php';
        ?>
        <section>
            <h2>Teledeporte</h2>
            <h3>Indicaciones</h3>
            <ul>
                <li>
                    Introducir el nombre del deporte del que queremos recibir avisos, no importa que estén en 
                    mayúsculas o minúsculas.
                </li>
            </ul>
        </section>
    </body>
</html>
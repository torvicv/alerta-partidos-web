<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta name="description" content="Te envia correos sobre los deportes elegidos, que retransmiten en los 
              canales teledeporte, eurosport y eurosport 2, asi podras estar al tanto de tus deportes preferidos.">
        <meta name="keywords" content="eurosport, eurosport 2, teledeporte, retransmisiones, deportes, deporte, 
              correo, alertas">
        
        
        <title>Alertas retransmisiones deportivas</title>
        <?php
            include 'head.php';
        ?>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div id="indicaciones">
            
            <h2>Indicaciones</h2>
            <ul>
                <li>Para recibir las alertas en tu email (correo electrónico) deberas:
                    <ol>
                        <li>Registrarte</li>
                        <li>Recibirás un email para que confirmes que eres tú quien nos envía la petición.</li>
                        <li>Con ese código y la contraseña recibida podrás entrar en una página donde podrás 
                        elegir los deportes o deporte de los que quieres recibir alertas.</li>
                        <li>Especifica bien el deporte, por ej: si eliges <b>balonmano</b> y el canal en su 
                            programación lo nombra como <b>Handball</b> no recibirás alertas, asi que antes de 
                            introducir el nombre del deporte, fijate bien como lo llaman en la página oficial de 
                            <strong>teledeporte</strong> o <strong>eurosport.</strong></li>
                    </ol>
                </li>
                <li>Una vez registrado, encontrarás un menú y dos imágenes, desde donde podrás enlazar a la 
                sección de teledeporte, a la de eurosport 1 o eurosport 2.</li>
            </ul>
        </div>
        
            <?php
            var_dump($_SESSION);
                include 'footer.php';
            ?>
    </body>
</html>

<header>
    <h1>Alertas deportes</h1>
<?php if(isset($_SESSION['entrada'])){
            echo "<h3 style='margin-left: 30px';>Bienvenido $_SESSION[entrada]</h3>";
        } ?>
    <ul>
        <li>Página web donde podras recibir alertas de los deportes que tú elijas.</li>
        <li>Los deportes en los canales <strong>Teledeporte</strong>, <strong>Eurosport</strong> y 
            <strong>Eurosport 2</strong>.</li>
        <li>Así podrás estar al tanto de cuando retransmiten tus deportes preferidos.</li>
    </ul>
</header>
<nav id="menu"><a href="index.php">Home</a>
<?php if(!isset($_SESSION['entrada'])){ ?>
    <a href="registrarse.php">Registrarse</a>
    <a href="entrar.php">Entrar</a>
<?php   }
        if(isset($_SESSION['entrada'])){ ?>
            <a href="#">Eurosport</a><a href="#">Eurosport 2</a><a href="#">Teledeporte</a>
            <a href="desloguearse.php">Desloguearse</a></nav>
<?php   }else{
            echo "</nav>";
        }




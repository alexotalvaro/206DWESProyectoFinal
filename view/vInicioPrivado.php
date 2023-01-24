<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
?>
<h3>Inicio Privado</h3>
<form>
    <?php 
        echo 'Bienvenido: '.$_SESSION['usuarioDWES206LoginLogoff']->getDescUsuario();
                    echo '<br>';
                    if ($_SESSION['usuarioDWES206LoginLogoff']->getNumConexiones() == 1) {
                        echo 'Esta es la primera vez que te conectas';
                    } else {
                        echo 'Te has conectado: ' . $_SESSION['usuarioDWES206LoginLogoff']->getNumConexiones() . ' veces';
                        echo '<br>';
                        //echo'Tu ultima conexión ha sido: ' . $_SESSION['usuarioDWES206LoginLogoff']->getFechaHoraUltimaConexion();
                    }
        
    ?>
    <br>
    <input class="botonLogin" type="submit" name="detalle" value="Detalle">
    <input class="botonLogin" type="submit" name="salir" value="Salir">
</form>
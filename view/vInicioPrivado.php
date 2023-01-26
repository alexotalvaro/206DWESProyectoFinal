<?php
/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
?>
<h3>Inicio Privado</h3>
<form>
    <?php 
        echo 'Bienvenido: '.$_SESSION['usuarioDWES206ProyectoFinal']->getDescUsuario();
                    echo '<br>';
                    if ($_SESSION['usuarioDWES206ProyectoFinal']->getNumConexiones() == 1) {
                        echo 'Esta es la primera vez que te conectas';
                    } else {
                        echo 'Te has conectado: ' . $_SESSION['usuarioDWES206ProyectoFinal']->getNumConexiones() . ' veces';
                        echo '<br>';
                        echo'Tu ultima conexión ha sido: ' . $_SESSION['usuarioDWES206ProyectoFinal']->getFechaHoraUltimaConexionAnterior()->format('Y-m-d H:i:s');
                    }
        
    ?>
    <br>
    <input class="botonLogin" type="submit" name="detalle" value="Detalle">
    <input class="botonLogin" type="submit" name="salir" value="Salir">
</form>
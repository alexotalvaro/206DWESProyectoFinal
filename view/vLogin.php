<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
?>
<form method="post">
    <label class="tituloC"> Usuario: </label>
    <input class="cajaL" type = "text" name = "usuario" placeholder="Usuario">
    <br>
    <label class="tituloC"> Contraseña: </label>
    <input class="cajaL" type="password" name="contra" placeholder="Password">
    <br>
    <input class="botonLogin" id="inicio" type="submit" name="inicioSesion" value="Aceptar" >
    <input class="botonLogin" id="salir" type="submit" name="salir" value="Cancelar">
<!--    <input class="botonLogin" id="registro" type="submit" name="registro" value="Crear Usuario">-->

</form>

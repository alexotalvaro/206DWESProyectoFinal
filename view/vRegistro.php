<?php
/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
?>
<script src="webroot/js/validacionEntrada.js">script</script>
<form>
    <label class="tituloC"> Usuario:</label>
    <input class="cajaL" type = "text" name = "usuario" id="usuario">
    <br>
    <label class="tituloC"> Contraseña: </label>
    <input class="cajaL" type="password" name="contra" id="contra">
    <br>
    <label class="tituloC"> Descripción del Usuario</label>
    <input class="cajaL" type="text" name="descripcion" id="descripcion">
    <br>
    <input class="botonLogin" type="submit" name="crear" value="Aceptar" id="crear">
    <input class="botonLogin" type="submit" name="salir" value="Cancelar" id="salir">
</form>
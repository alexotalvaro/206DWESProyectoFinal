<?php
/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 29 01 2023
 */
?>
<h3>Mantenimiento De Departamentos</h3>
<form>
    <label> Buscar departamento por Descripción: </label>
    <br>
    <input class="cajaL" type="text" name="descripcion">
    <br>
    <input class="botonLogin" type="submit" name="buscar" value="Buscar">
    <input class="botonLogin" type="submit" name="volver" value="Volver">

    <?php
    if (!empty($_SESSION['departamento'])) {
        echo '<table><thead><tr><th>Codigo</th><th>Descripcion</th><th>Fecha Creacion</th><th>Volumen Negocio</th></tr></thead><tbody>';
        print"<tr>";
        echo '<td>' . $_SESSION['departamento']->getCodDepartamento() . '</td>';
        echo '<td>' . $_SESSION['departamento']->getDescDepartamento() . '</td>';
        echo '<td>' . $_SESSION['departamento']->getFechaCreacionDepartamento() . '</td>';
        echo '<td>' . $_SESSION['departamento']->getVolumenNegocio() . '</td>';
        echo '<td>' . $_SESSION['departamento']->getFechaBajaDepartamento() . '</td>';
        print '</table>';
    }
    ?>
</form>



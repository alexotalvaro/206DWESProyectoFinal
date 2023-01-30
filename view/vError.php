<?php
/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 * Muestra en una tabla con los errores almacenados en $_SESSION['error'].
 */
?>

<h3>Error</h3>
<table>
    <?php
    echo '<tr><td>Codigo: </td><td>' . $_SESSION['error']->getCodError() . '</td></tr>';
    echo '<tr><td>Descripcion: </td><td>' . $_SESSION['error']->getDescError() . '</td></tr>';
    echo '<tr><td>Archivo: </td><td>' . $_SESSION['error']->getArchivoError() . '</td></tr>';
    echo '<tr><td>Linea: </td><td>' . $_SESSION['error']->getLineaError() . '</td></tr>';
    echo '<tr><td>Pagina Siguiente: </td><td>' . $_SESSION['error']->getPaginaSiguiente() . '</td></tr>';
    ?>
</table>
<form>
    <input class="botonLogin" type="submit" name="volver" value="Volver">
</form>

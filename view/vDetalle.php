<?php
/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
?>
<form>
    <input class="botonLogin" type="submit" name="volver" value="Volver">
</form>
<h3>Detalle </h3>
<table>
    <?php
    foreach ($_SESSION as $clave => $valor) {
        echo '<tr><td>' . $clave . '</td>';
        if (is_object($valor)) {
            echo '<td>';
            var_dump($valor);
            echo '</td></tr>';
        } else {
            echo '<td>' . $valor . '</td></tr>';
        }
    }
    ?>
</table>
<?php
print '<br>';
print phpinfo();
?>

<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
?>
<form>
    <input class="botonLogin" type="submit" name="volver" value="Volver">
</form>
<h3>Detalle </h3>
<table>
    <?php
    print '<tr><td>';
    print $_SESSION['usuarioDWES206LoginLogoff']->toString();
    print '</tr></td>';
    ?>
</table>
<?php
print '<br>';
print phpinfo();
?>

<?php
/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 27 01 2023
 */
?>
<h3>REST</h3>
<h4>API imagen dia de la nasa</h4>
<form>

    <br>
    <?php if (!empty($_SESSION['api'])) { ?>
        <table class="tablaApi">
            <tbody>
                <tr style="border:solid 1px black">
                    <td>TÍTULO</td>
                    <td><?php echo $_SESSION['api']['title'] ?></td>
                </tr>
                <tr style="border:solid 1px black">
                    <td>FECHA</td>
                    <td><?php echo $_SESSION['api']['date'] ?></td>
                </tr>
                <tr style="border:solid 1px black">
                    <td>DESCRIPCIÓN</td>
                    <td><img src="<?php echo $_SESSION['api']['hdurl'] ?>" width="300px" height="300px"></td>
                </tr>

            </tbody>
        </table>
    <?php } ?>
    <br>
    <input class = "botonLogin" type = "submit" name = "pedirNasa" value = "Pedir">
</form>

<br>

<h4>API Alumnos de Harry Potter por Casa</h4>


<form>
    <label class="tituloC"> CASA:</label>
    <input class="cajaL" type = "text" name = "casa" id="casa">
    <input class = "botonLogin" type = "submit" name = "pedirHP" value = "Pedir">
    <p>(Casas: gryffindor, slytherin, hufflepuff, ravenclaw)</p>
    <br>
    <?php
    if (!empty($_SESSION['HP'])) {
        $aHP = $_SESSION['HP'];
        echo "<table>";
        foreach ($aHP as $item) {
            echo "<tr><td>" . $item['name'] . "</td>";
            echo "<td>" . $item['actor'] . "</td></tr>";
        }
        echo '</table>';
    }
    ?>   
    <br>
    <input class = "botonLogin" type = "submit" name = "volver" value = "Volver">
</form>

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

    <!--    <label>Fecha: </label>
   <input type="date" name="fecha">-->
    <?php
    if (!empty($_SESSION['apiNasa'])) {
        ?>   
    <img src="<?php echo $_SESSION['apiNasa']?>" width="300vw" height="300vh">
        <br>
    <?php } ?>



    <input class = "botonLogin" type = "submit" name = "pedir" value = "Pedir">

    <input class = "botonLogin" type = "submit" name = "volver" value = "Volver">
</form>

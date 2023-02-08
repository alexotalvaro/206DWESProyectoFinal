<?php
/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
if (isset($_REQUEST["volver"])) {
    session_start();
    $_SESSION['paginaEnCurso'] = "inicioprivado";
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
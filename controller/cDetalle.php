<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
if (isset($_REQUEST["volver"])) {
    session_start();
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
if (isset($_REQUEST["detalle"])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'detalle';
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST["salir"])) {
    session_destroy();
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
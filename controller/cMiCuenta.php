<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 29 01 2023
 */
if (isset($_REQUEST["modificar"])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'wip';
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST["borrar"])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'borrarcuenta';
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST["volver"])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    $_SESSION['paginaEnCurso'] = 'inicioprivado';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
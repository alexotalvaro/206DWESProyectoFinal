<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */

require_once 'config/confApp.php';
session_start();
if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
}

if (isset($_REQUEST["tecnologias"])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'tecnologias';
    header('Location: index.php');
    exit;
}

require_once $aControladores[$_SESSION['paginaEnCurso']];
require_once $aVistas[$_SESSION['paginaEnCurso']];
?>
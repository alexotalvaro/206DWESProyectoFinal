<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 27 01 2023
 */

if (isset($_REQUEST["pedir"])) {
    $_SESSION['apiNasa']=REST::apiNasa();
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST["volver"])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
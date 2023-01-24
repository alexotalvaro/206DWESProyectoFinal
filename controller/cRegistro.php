<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
if (isset($_REQUEST["salir"])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
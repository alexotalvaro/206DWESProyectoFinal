<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

require_once 'config/confApp.php';



session_start();
if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
}
require_once $aControladores[$_SESSION['paginaEnCurso']];
require_once $aVistas[$_SESSION['paginaEnCurso']];
?>
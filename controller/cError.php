<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

if (isset($_REQUEST["volver"])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    header('Location: index.php');
    exit;
}
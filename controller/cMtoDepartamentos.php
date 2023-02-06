<?php

/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 27 01 2023
 */

if (isset($_REQUEST["buscar"])) {
    if (!empty($_REQUEST['descripcion'])) {
        $_SESSION['departamento'] = DepartamentoPDO::buscarDepartamentoPorDescripcion($_REQUEST['descripcion']);
        header('Location: index.php');
        exit;
    }
}
if (isset($_REQUEST["volver"])) {
    $_SESSION['paginaEnCurso'] = "inicioprivado";
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico

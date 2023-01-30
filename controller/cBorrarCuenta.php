<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 29 01 2023
 */
if (isset($_REQUEST["borrar"])) {
    $eliminado = UsuarioPDO::borrarUsuario($_SESSION['usuarioDWES206ProyectoFinal']->getCodUsuario());
    if ($eliminado) {
        echo 'eliminado.';
//        $_SESSION['usuarioDWES206ProyectoFinal'] = null;
//        session_destroy();
//        $_SESSION['paginaEnCurso'] = 'iniciopublico';
//        header('Location: index.php');
        exit;
    }else{
        echo 'No se ha podido eliminar';
//        $_SESSION['paginaEnCurso'] = 'inicioprivado';
//        header('Location: index.php');
        exit;
        
    }
}
if (isset($_REQUEST["volver"])) {
    session_start();
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
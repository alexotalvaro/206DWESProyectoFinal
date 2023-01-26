<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */


//recorremos el array de errores en busca de error. si encuentra alguno, $entradaOk lo convierte en false.
$aRespuesta = ['usuario' => null, 'contra' => null, 'descripcion' => null];
$entradaOk = true;
$aErrores = ['usuario' => null, 'contra' => null];

if (isset($_REQUEST["crear"])) {
    $oUsuario = UsuarioPDO::registrarUsuario($_REQUEST['usuario'], $_REQUEST['contra'], $_REQUEST['descripcion']);
    $_SESSION['usuarioDWES206ProyectoFinal'] = $oUsuario;
    $_SESSION['paginaEnCurso'] = 'inicioprivado';
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST["salir"])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
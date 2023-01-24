<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
$aErrores = ['usuario' => null, 'contra' => null];
$aRespuesta = ['usuario' => null, 'contra' => null];
$entradaOk = true;
require_once 'config/confApp.php';
if (!empty($_SESSION['error'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'error';
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST["inicioSesion"])) { //Si pulsamos en botón de iniciar sesion .... 
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 300, 1, 1); //Validamos que sean correctos los datos
    $aErrores['contra'] = validacionFormularios::comprobarAlfabetico($_REQUEST['contra'], 300, 1, 1); //Validamos que sean correctos los datos
    //recorremos el array de errores en busca de error. si encuentra alguno, $entradaOk lo convierte en false.
    foreach ($aErrores as $key => $value) {
        if ($value != null) {
            $_REQUEST[$key] = '';
            $entradaOk = false;
        }
    }
    $aRespuesta['usuario'] = $_REQUEST['usuario'];
    $aRespuesta['contra'] = $_REQUEST['contra'];
    $oUsuario = UsuarioPDO::validarUsuario($aRespuesta['usuario'], $aRespuesta['contra']); //Creacion del objeto Usuario, cuyo metodo devuelve un Usuario
    if ($oUsuario) {
        UsuarioPDO::registrarUltimaConexion($oUsuario);
        session_start();
        $_SESSION['usuarioDWES206LoginLogoff'] = $oUsuario; // Guardamos en la sesion el usuario.
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso'] = 'inicioprivado'; //La página en curso ahora será la del INICIO PRIVADO ...
        header('Location: index.php'); //y me voy al index, en el cual, se cargara paginaencurso(INICIO PRIVADO)y ahí decide que hacer..
        exit;
    }
}
if (isset($_REQUEST['registro'])) { // Si pulsamos el botón de registrarse....
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; //La pagina anterior será iniciopublico, por si cancelamos..
    $_SESSION['paginaEnCurso'] = 'registro'; // La página en curso será la del registro.
    header('Location: index.php'); // y me voy al index, en el cual, se cargara paginaencurso(registro) y ahí decide que hacer..
    exit;
}
if (isset($_REQUEST["salir"])) {
    session_destroy();
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout']; //carga la pagina de inicio publico
?>
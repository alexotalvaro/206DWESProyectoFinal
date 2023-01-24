<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 * Arrays donde guardo las localizaciones de los controladores y las vistas.
 * Los require de todos los modelos.
 * 
 */
//Librerias
require_once 'core/221024libreriaValidacionFormularios.php';

//Configuracion DataBase
require_once 'confDBPDO.php';

//Modelos
require_once 'model/DB.php';
require_once 'model/UsuarioDB.php';
require_once 'model/Usuario.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
require_once 'model/AppError.php';

define("OBLIGATORIO", 1);

//Arrays
$aControladores = [
    "login" => "controller/cLogin.php",
    "iniciopublico" => "controller/cInicioPublico.php",
    "inicioprivado" => "controller/cInicioPrivado.php",
    "detalle" => "controller/cDetalle.php",
//    "wip"=>"controller/cWIP.php",
    "error" => "controller/cError.php",
    "registro" => "controller/cRegistro.php",
//    "micuenta"=>"controller/cMiCuenta.php",
//    "cambiarpassword"=>"controller/cCambiarPassword.php",
//    "borrarcuenta"=>"controller/cBorrarCuenta.php",
];

$aVistas = [
    "layout" => "view/layout.php",
    "login" => "view/vLogin.php",
    "iniciopublico" => "view/vInicioPublico.php",
    "inicioprivado" => "view/vInicioPrivado.php",
    "detalle" => "view/vDetalle.php",
//    "wip"=>"view/vWIP.php",
    "error" => "view/vError.php",
    "registro" => "view/vRegistro.php",
//    "micuenta"=>"view/vMiCuenta.php",
//    "cambiarpassword"=>"view/vCambiarPassword.php",
//    "borrarcuenta"=>"view/vBorrarCuenta.php",
];

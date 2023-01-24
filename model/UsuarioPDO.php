<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

require_once 'config/confApp.php';

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($codUsuario, $password) {
        try {
            $miDB = new PDO(DSN, USUARIO, CONTRA); //Conexion a la BD muestra los datos y guarda el objeto
            $sentenciaSQL = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario='$codUsuario' AND T01_Password=SHA2('$codUsuario$password',256)";
            $oUsuario = DBPDO::ejecutarConsulta($sentenciaSQL);
            if ($oUsuario) {
                return new Usuario($oUsuario->T01_CodUsuario, $oUsuario->T01_Password, $oUsuario->T01_DescUsuario, $oUsuario->T01_NumConexiones, new DateTime(), $oUsuario->T01_Perfil);
            } else {
                return false;
            }
        } catch (PDOException $error) {
            $error = new AppError($codError, $descError);
            //$_SESSION['error'] = $error;
            return $error;
        } finally {
            unset($miDB);
        }
    }

//    public static function registrarUltimaConexion($codUsuario) {
//        try {
//            $miDB = new PDO(DSN, USUARIO, CONTRA); //Conexion a la BD muestra los datos y guarda el objeto
//            $sentenciaSQL = "UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() WHERE T01_CodUsuario='$aRespuesta[usuario]'";
//            $oUsuario = DBPDO::ejecutarConsulta($sentenciaSQL);
//            if ($oUsuario) {
//                return true;
//            } else {
//                return false;
//            }
//        } catch (PDOException $error) {
//            $error = new AppError($codError, $descError);
//            //$_SESSION['error'] = $error;
//            return $error;
//        } finally {
//            unset($miDB);
//        }
//    }

    public static function registrarUltimaConexion($usuario) {
        //$usuario->setFechaHoraUltimaConexionAnterior($usuario->getFechaHoraUltimaConexion());
        $usuario->setFechaHoraUltimaConexion(time());
        $usuario->setNumConexiones($usuario->getNumConexiones() + 1);

        $sUpdate = <<<QUERY
            UPDATE T01_Usuario SET T01_NumConexiones={$usuario->getNumConexiones()},
            T01_FechaHoraUltimaConexion = {$usuario->getFechaHoraUltimaConexion()}
            WHERE T01_CodUsuario='{$usuario->getCodUsuario()}';
        QUERY;

        DBPDO::ejecutarConsulta($sUpdate);

        return $usuario;
    }

}

// REGISTRAR ULTIMA CONEXION
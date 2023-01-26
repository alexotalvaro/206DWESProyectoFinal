<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
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

    public static function registrarUltimaConexion($usuario) {
        $usuario->setNumConexiones($usuario->getNumConexiones() + 1);
        $sUpdate = <<<QUERY
            UPDATE T01_Usuario SET T01_NumConexiones={$usuario->getNumConexiones()},
            T01_FechaHoraUltimaConexion = now()
            WHERE T01_CodUsuario='{$usuario->getCodUsuario()}';
        QUERY;

        $oUsuario = DBPDO::ejecutarConsulta($sUpdate);

        return $oUsuario;
    }

    public static function registrarUsuario($codUsuario, $password, $descUsuario) {
        $sUpdate = <<<QUERY
            INSERT INTO T01_Usuario values("{$codUsuario}",sha2("{$codUsuario}{$password}",256),"{$descUsuario}",1,now(),'usuario',null);
        QUERY;

        DBPDO::ejecutarConsulta($sUpdate);

        return new Usuario($codUsuario, hash('sha256', $codUsuario . $password), $descUsuario, 1, new DateTime(), 'usuario');
    }

}

// REGISTRAR ULTIMA CONEXION
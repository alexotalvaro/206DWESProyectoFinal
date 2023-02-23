<?php

require_once 'config/confApp.php';

/**
 * Clase usuarioPDO 
 * 
 * Clase UsuarioPDO que implementa la clase UsuarioDB para el acceso a los datos de la tabla T_Usuario
 * 
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
class UsuarioPDO implements UsuarioDB {

    /**
     * Funcion que valida el usuario
     * 
     * Valida un usuario cuando le introducimos por parametros el codigo y el password
     * 
     * 
     * @param type $codUsuario usuario a Validar
     * @param type $password password a validar
     * @return boolean|\Usuario Si es correcto devuelve un objeto usuario si no devuelve false
     */
    public static function validarUsuario($codUsuario, $password) {
        $sentenciaSQL = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario='$codUsuario' AND T01_Password=SHA2('$codUsuario$password',256)";
        $oUsuario = DBPDO::ejecutarConsulta($sentenciaSQL);
        if ($oUsuario) {
            return new Usuario($oUsuario->T01_CodUsuario, $oUsuario->T01_Password, $oUsuario->T01_DescUsuario, $oUsuario->T01_NumConexiones, new DateTime(), $oUsuario->T01_Perfil);
        } else {
            return false;
        }
    }

    /**
     * Funcion que registra la ultima conexión
     * 
     * Actualiza la ultima conexion en la bases de datos sumandole 1 cuando te conectas
     * 
     * @param usuario
     * @return objeto Usuario
     */
    public static function registrarUltimaConexion($usuario) {
        $usuario->setNumConexiones($usuario->getNumConexiones() + 1);
        $sentenciaSQL = <<<QUERY
            UPDATE T01_Usuario SET T01_NumConexiones={$usuario->getNumConexiones()},
            T01_FechaHoraUltimaConexion = now()
            WHERE T01_CodUsuario='{$usuario->getCodUsuario()}';
        QUERY;
        $oUsuario = DBPDO::ejecutarConsulta($sentenciaSQL);
        return $oUsuario;
    }

    /**
     * Funcion que registra el usuario
     * 
     * Registra un usuario en la base de datos 
     * 
     * @param type $codUsuario usuario a registrar
     * @param type $password password a registrar
     * @param type $descUsuario descripcion a registrar
     * @return Objeto Usuario
     */
    public static function registrarUsuario($codUsuario, $password, $descUsuario) {

        $sentenciaSQL = <<<QUERY
            INSERT INTO T01_Usuario values("{$codUsuario}",sha2("{$codUsuario}{$password}",256),"{$descUsuario}",1,now(),'usuario',null);
        QUERY;

        DBPDO::ejecutarConsulta($sentenciaSQL);

        return new Usuario($codUsuario, hash('sha256', $codUsuario . $password), $descUsuario, 1, new DateTime(), 'usuario');
    }

    /**
     * Funcion que borra el usuario
     * 
     * Borra un usuario en la base de datos 
     * @param type $codUsuario usuario a borrar     
     * @return Objeto ejecutar consulta
     */
    public static function borrarUsuario($codUsuario) {

        $sentenciaSQL = <<<QUERY
            DELETE FROM T01_Usuario WHERE T01_CodUsuario="{$codUsuario}");
        QUERY;
        DBPDO::ejecutarConsulta($sentenciaSQL);
    }

}

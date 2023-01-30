<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
require_once 'config/confApp.php';

class DBPDO implements DB {

    public static function ejecutarConsulta($sentenciaSQL, $parametros = null) {
        try {
            $miDB = new PDO(DSN, USUARIO, CONTRA); //Conexion a la BD muestra los datos y guarda el objeto
            //preparamos y realizamos la consulta.
            $consultaUsuarioExe = $miDB->prepare($sentenciaSQL);
            $consultaUsuarioExe->execute($parametros);
            $oResultado = $consultaUsuarioExe->fetchObject();
            //creamos el resultado de la consulta y lo guardamos en un objeto.
            return $oResultado;
        } catch (PDOException $error) {
            //pendiente guardar error en la session;
            //$error = new AppError();
            //$_SESSION['error'] = new AppError($error->getCodError(),$error->getDescError());
            $error->getMessage();
            
        } finally {
            unset($miDB);
        }
    }

}

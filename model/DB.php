<?php

require_once 'config/confApp.php';
   /**
     * Interfaz DB
     * 
     * Interfaz DB para la ejecucion de consultas sql
     * 
     * @author: Alejandro Otálvaro Marulanda
     * @since: 26 01 2023
     */
interface DB {
 
    /**
     * Funcion Ejecutar Consulta
     * 
     * Funcion de la interface DB para ejecutar consultas sql
     * 
     * @param string $entradaSQL entrada SQL
     * @param array $parametros parametros de la entrada
     */
    public static function ejecutarConsulta($sentenciaSQL, $parametros);
}

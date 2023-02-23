<?php
/**
 * Interfaz
 * 
 * Interfaz que implementa buscarDepartamentoPorCodigo
 * 
 * @author: Alejandro Otálvaro Marulanda
 * @since: 01 02 2023
 */

require_once 'config/confApp.php';
interface DepartamentoDB {
    
       /**
     * Funcion
     * 
     * Función que llevarán las clases que implementen la interfaz
     * 
     * @author: Alejandro Otálvaro Marulanda
     * @since: 01 02 2023
     */
    public static function buscarDepartamentoPorCodigo($codDepartamento);
}

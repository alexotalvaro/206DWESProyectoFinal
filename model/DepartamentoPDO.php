<?php

require_once 'config/confApp.php';

/**
 * Clase para buscar departamentos
 * 
 * Clase con los metodos relacionados con la tabla T02_Departamento y la clase Departamento
 * 
 * @author: Alejandro Otálvaro Marulanda
 * @since: 01 02 2023
 */
class DepartamentoPDO {

    /**
     * Metodo que busca todos los departamentos que contienen la descripcion buscada
     * @param type $descDepartamento descripcion a buscar en la base de datos
     * @return boolean|array En caso de que la busqueda de resultados se creará un array con los departamentos y en caso contrario devolverá false
     */
    public static function buscarDepartamentoPorDescripcion($descDepartamento) {
        $sentenciaSQL = "SELECT * from T02_Departamento where T02_descDepartamento LIKE '%{$descDepartamento}%';";
        $oDepartamento = DBPDO::ejecutarConsulta($sentenciaSQL);
        if ($oDepartamento) {
            return new Departamento($oDepartamento->T02_CodDepartamento, $oDepartamento->T02_DescDepartamento, $oDepartamento->T02_FechaCreacionDepartamento, $oDepartamento->T02_VolumenNegocio);
        } else {
            return false;
        }
    }

}

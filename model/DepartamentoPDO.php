<?php

/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 01 02 2023
 */
require_once 'config/confApp.php';

class DepartamentoPDO {

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

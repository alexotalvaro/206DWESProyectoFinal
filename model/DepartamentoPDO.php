<?php
/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 01 02 2023
 */
require_once 'config/confApp.php';
class DepartamentoPDO implements DepartamentoDB{
    
    public static function buscarDepartamentoPorCodigo($descDepartamento) {
        $sentenciaSQL = "SELECT * FROM T02_Departamento WHERE T02_DescDepartamento='$descDepartamento'";
        $oDepartamento= DBPDO::ejecutarConsulta($sentenciaSQL);
        if($oDepartamento){
            return new Departamento($oDepartamento->T02_CodDepartamento,$oDepartamento->T02_DescDepartamento,$oDepartamento->T02_FechaCreacionDepartamento,$oDepartamento->T02_VolumenNegocio);
        }else{
            return false;
        }   
    }

}
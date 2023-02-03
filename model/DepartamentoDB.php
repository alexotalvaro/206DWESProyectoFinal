<?php
/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 01 02 2023
 */

require_once 'config/confApp.php';
interface DepartamentoDB {

    public static function buscarDepartamentoPorCodigo($codDepartamento);
}

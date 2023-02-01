<?php
/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */

require_once 'config/confApp.php';

interface DB {
    public static function ejecutarConsulta($sentenciaSQL, $parametros);
}

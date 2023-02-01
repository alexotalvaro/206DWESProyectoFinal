<?php
/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */
require_once 'config/confApp.php';

interface UsuarioDB {

    public static function validarUsuario($codUsuario, $password);
}

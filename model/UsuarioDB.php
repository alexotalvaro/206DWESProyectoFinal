<?php

require_once 'config/confApp.php';

/**
 * Interfaz de conexion
 * 
 * Interfaz de la conexion entre el usuario y la base de datos
 * 
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 * 
 */
interface UsuarioDB {

    /**
     * Funcion validadora del usuario
     * @param string $codUsuario codigo del usuario
     * @param string $password contraseña del usuario
     */
    public static function validarUsuario($codUsuario, $password);
}

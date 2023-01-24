<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once 'config/confApp.php';

interface UsuarioDB {

    public static function validarUsuario($codUsuario, $password);
}

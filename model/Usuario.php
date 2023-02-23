<?php
   /**
     * Objeto Usuario
     * 
     * Define un objeto Usuario
     * 
     * @package: Aplicacion Final
     * @author: Alejandro Otálvaro Marulanda
     * @since: 26 01 2023
     */
class Usuario {
 
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;

    //private $imagenUsuario;

    /**
     * Constructor
     * 
     * Constructor del objeto usuario
     * 
     * @package: Aplicacion Final
     * @author: Alejandro Otálvaro Marulanda
     * @since: 26 01 2023
     */
    public function __construct($codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexion, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = new Datetime();
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexion;
        $this->perfil = $perfil;
        //$this->imagenUsuario = $imagenUsuario;
    }

    public function getCodUsuario() {
        return $this->codUsuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDescUsuario() {
        return $this->descUsuario;
    }

    public function getNumConexiones() {
        return $this->numConexiones;
    }

    public function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    public function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getImagenUsuario() {
        return $this->imagenUsuario;
    }

    public function setCodUsuario($codUsuario): void {
        $this->codUsuario = $codUsuario;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setDescUsuario($descUsuario): void {
        $this->descUsuario = $descUsuario;
    }

    public function setNumConexiones($numConexiones): void {
        $this->numConexiones = $numConexiones;
    }

    public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): void {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): void {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }

    public function setPerfil($perfil): void {
        $this->perfil = $perfil;
    }

    public function setImagenUsuario($imagenUsuario): void {
        $this->imagenUsuario = $imagenUsuario;
    }

    public function toString() {
        return "Codigo: " . $this->codUsuario . "<br>" . "Descripcion: " . $this->descUsuario . "<br>" . "Numero de conexiones: " . $this->numConexiones . "<br>" . "Perfil: " . $this->perfil;
    }

}

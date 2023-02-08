<?php

/**
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 * Clase departamento
 */
class Departamento{
    
    private $codDepartamento;
    private $descDepartamento;
    private $fechaCreacionDepartamento;
    private $volumenNegocio;
    private $fechaBajaDepartamento;
    
    public function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento=null) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaBajaDepartamento;
    }
    public function getCodDepartamento() {
        return $this->codDepartamento;
    }

    public function getDescDepartamento() {
        return $this->descDepartamento;
    }

    public function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }

    public function getVolumenNegocio() {
        return $this->volumenNegocio;
    }
    public function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }

    public function setCodDepartamento($codDepartamento): void {
        $this->codDepartamento = $codDepartamento;
    }

    public function setDescDepartamento($descDepartamento): void {
        $this->descDepartamento = $descDepartamento;
    }

    public function setFechaCreacionDepartamento($fechaCreacionDepartamento): void {
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }

    public function setVolumenNegocio($volumenNegocio): void {
        $this->volumenNegocio = $volumenNegocio;
    } 
     public function setFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }
}
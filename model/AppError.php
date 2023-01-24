<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

class AppError {

    private $codError;
    private $descError;

    public function __construct($codError, $descError) {
        $this->codError = $codError;
        $this->descError = $descError;
    }
    
    public function getCodError() {
        return $this->codError;
    }

    public function getDescError() {
        return $this->descError;
    }

    public function setCodError($codError): void {
        $this->codError = $codError;
    }

    public function setDescError($descError): void {
        $this->descError = $descError;
    }

    
    public function toString() {
        return "Codigo de error: " . $this->codError . "<br>" . "Descripcion del error: " . $this->descError;
    }

}

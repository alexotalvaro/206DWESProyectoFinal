<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 */

class ErrorApp {

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



}

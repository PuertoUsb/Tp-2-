<?php
class Pasajero{
    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;

    public function __construct($nombre,$apellido,$documento, $telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->documento=$documento;
        $this->telefono=$telefono;
    }
     // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setNumeroDocumento($documento) {
        $this->documento = $documento;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}


?>
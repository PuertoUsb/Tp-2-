<?php

class Viaje{
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros;
    private $responsable;

    //Constructor de la clase Viaje, para inicializar atributos
    public function __construct($codigo,$destino,$maxPasajeros,  ResponsableV $responsable){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
        $this->responsable = $responsable;
        $this->pasajeros = [];
    }

    // Getters
    public function getCodigo() {
        return $this->codigo;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function getMaxPasajeros() {
        return $this->maxPasajeros;
    }

    public function getPasajeros() {
        return $this->pasajeros;
    }
    public function getResponsable() {
        return $this->responsable;
    }

    // Setters
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function setDestino($destino) {
        $this->destino = $destino;
    }
    public function setMaxPasajeros($maxPasajeros) {
        $this->maxPasajeros = $maxPasajeros;
    }
    public function setPasajeros($pasajeros) {
        $this->pasajeros = $pasajeros;
    }
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }


    //Funcion para agregar a cada pasajero
    public function agregarPasajero(Pasajero $pasajeros){
        $agregado=false;
        if(count($this->pasajeros) < $this->maxPasajeros && !($this->repitePasajero($pasajeros) )){
            $this->pasajeros[]= $pasajeros;
            $agregado= true;
        }
        return $agregado;

    }
    // Funcion para saber si se repite algun pasajero
    public function repitePasajero(Pasajero $pasajeros){
        $repite = false;
        foreach($this->pasajeros as $key){
            if ($key->getDocumento() === $pasajeros->getDocumento()){
                $repite=true;
            }
    }
    return $repite;
}
    // Funcion que crea el listado de pasajeros
    public function listaPasajeros() {
        $lista = "Lista de pasajeros:\n";
        foreach ($this->pasajeros as $pasajero) {
            $lista .= "Nombre: " . $pasajero->getNombre() . ", Apellido: " . $pasajero->getApellido() .
                ", Documento: " . $pasajero->getDocumento() . ", Teléfono: " . $pasajero->getTelefono() . "\n";
        }
        return $lista;
    }
}

?>
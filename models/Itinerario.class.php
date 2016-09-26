<?php

class Itinerario{
    private $id;
private $id;
private $endereco;
private $motorista;
private $onibus;
private $checkpoint;
private $motorista_itinerario;
    
function setId ($id){
        
        $this->id=$id;
    }
    function getId (){
        
        return $this->id;
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getMotorista() {
        return $this->motorista;
    }

    public function setMotorista($motorista) {
        $this->motorista = $motorista;
    }

    public function getOnibus() {
        return $this->onibus;
    }

    public function setOnibus($onibus) {
        $this->onibus = $onibus;
    }

    public function getCheckpoint() {
        return $this->checkpoint;
    }

    public function setCheckpoint($checkpoint) {
        $this->checkpoint = $checkpoint;
    }

    public function getMotorista_Itinerario() {
        return $this->motorista_itinerario;
    }

    public function setMotorista_Itinerario($motorista_itinerario) {
        $this->motorista_itinerario = $motorista_itinerario;
    }

}
?>

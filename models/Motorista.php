<?php

class Motorista{
    private $id;
    private $endereco;
    private $placa;
    private $checkpoint;
    
function setId ($id){
        
        $this->id=$id;
    }
    function getId (){
        
        return $this->id;
    }
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getCheckpoint() {
        return $this->checkpoint;
    }

    public function setCheckpoint($checkpoint) {
        $this->checkpoint = $checkpoint;
    }

}
?>

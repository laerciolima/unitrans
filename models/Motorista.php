<?php

class Motorista{
    private $id;
    private $idonibus;
    private $iditinerario;
    private $nome;
    
function setId ($id){
        
        $this->id=$id;
    }
    function getId (){
        
        return $this->id;
    }
    public function getIdonibus() {
        return $this->idonibus;
    }

    public function setIdonibus($idonibus) {
        $this->idonibus = $idonibus;
    }

    public function getIditinerario() {
        return $this->iditinerario;
    }

    public function setIditinerario($iditinerario) {
        $this->iditinerario = $iditinerario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}
?>

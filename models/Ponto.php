<?php

class Ponto{
    private $id;
    private $endereco;
    private $qtdestudantes;
    
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

    public function getQtdEstudantes() {
        return $this->qtdestudantes;
    }

    public function setQtdEstudantes($qtdestudantes) {
        $this->qtdestudantes = $qtdestudantes;
    }

}
?>

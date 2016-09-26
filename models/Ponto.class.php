<?php

class Ponto{
    private $id;
private $id;
private $nome_ponto;
private $endereco_ponto;
private $qtd_estudantes;
    
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

    public function getNome_Ponto() {
        return $this->nome_ponto;
    }

    public function setNome_Ponto($nome_ponto) {
        $this->nome_ponto = $nome_ponto;
    }

    public function getEndereco_Ponto() {
        return $this->endereco_ponto;
    }

    public function setEndereco_Ponto($endereco_ponto) {
        $this->endereco_ponto = $endereco_ponto;
    }

    public function getQtd_Estudantes() {
        return $this->qtd_estudantes;
    }

    public function setQtd_Estudantes($qtd_estudantes) {
        $this->qtd_estudantes = $qtd_estudantes;
    }

}
?>

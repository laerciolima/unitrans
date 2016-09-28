<?php

class Comprovante{
    private $id;
    private $fk_id_estudante;
    private $data;
    private $img;
    private $status;
    
function setId ($id){
        
        $this->id=$id;
    }
    function getId (){
        
        return $this->id;
    }
    public function getFk_id_estudante() {
        return $this->fk_id_estudante;
    }

    public function setFk_id_estudante($fk_id_estudante) {
        $this->fk_id_estudante = $fk_id_estudante;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
?>

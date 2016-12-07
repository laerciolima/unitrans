<?php

class Ponto implements JsonSerializable{
    private $id;
    private $endereco;
    private $bairro;
    private $cidade;
    private $lat;
    private $long;


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

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function jsonSerialize()
    {
      return get_object_vars($this);
    }

    public function getLat() {
        return $this->lat;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function getLong() {
        return $this->long;
    }

    public function setLong($long) {
        $this->long = $long;
    }
}
?>

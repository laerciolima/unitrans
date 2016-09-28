<?php

class Boleto{
    private $id;
    private $cedente;
    private $sacado;
    private $nro;
    private $aceite;
    private $carteira;
    private $valor;
    private $vencimento;
    private $instrucoes;
    private $codigodebarras;
    
function setId ($id){
        
        $this->id=$id;
    }
    function getId (){
        
        return $this->id;
    }
    public function getCedente() {
        return $this->cedente;
    }

    public function setCedente($cedente) {
        $this->cedente = $cedente;
    }

    public function getSacado() {
        return $this->sacado;
    }

    public function setSacado($sacado) {
        $this->sacado = $sacado;
    }

    public function getNro() {
        return $this->nro;
    }

    public function setNro($nro) {
        $this->nro = $nro;
    }

    public function getAceite() {
        return $this->aceite;
    }

    public function setAceite($aceite) {
        $this->aceite = $aceite;
    }

    public function getCarteira() {
        return $this->carteira;
    }

    public function setCarteira($carteira) {
        $this->carteira = $carteira;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getVencimento() {
        return $this->vencimento;
    }

    public function setVencimento($vencimento) {
        $this->vencimento = $vencimento;
    }

    public function getInstrucoes() {
        return $this->instrucoes;
    }

    public function setInstrucoes($instrucoes) {
        $this->instrucoes = $instrucoes;
    }

    public function getCodigoDeBarras() {
        return $this->codigodebarras;
    }

    public function setCodigoDeBarras($codigodebarras) {
        $this->codigodebarras = $codigodebarras;
    }

}
?>

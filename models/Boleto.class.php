<?php

class Boleto{
    private $id;
private $id;
private $nome_banco;
private $cedente;
private $sacado;
private $nro;
private $aceite;
private $carteira;
private $valor;
private $vencimento;
private $instrucoes;
private $cod_barras;
    
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

    public function getNome_Banco() {
        return $this->nome_banco;
    }

    public function setNome_Banco($nome_banco) {
        $this->nome_banco = $nome_banco;
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

    public function getCod_Barras() {
        return $this->cod_barras;
    }

    public function setCod_Barras($cod_barras) {
        $this->cod_barras = $cod_barras;
    }

}
?>

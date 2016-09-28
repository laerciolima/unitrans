<?php

class Estudante{
    private $id;
    private $nome;
    private $cpf;
    private $data_de_nascimento;
    private $telefone;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $curso;
    private $fk_id_universidade;
    private $horario_de_ida;
    private $horario_de_volta;
    private $login;
    private $senha;
    private $foto;
    
function setId ($id){
        
        $this->id=$id;
    }
    function getId (){
        
        return $this->id;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getData_de_nascimento() {
        return $this->data_de_nascimento;
    }

    public function setData_de_nascimento($data_de_nascimento) {
        $this->data_de_nascimento = $data_de_nascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getRua() {
        return $this->rua;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
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

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getfk_id_universidade() {
        return $this->fk_id_universidade;
    }

    public function setfk_id_universidade($fk_id_universidade) {
        $this->fk_id_universidade = $fk_id_universidade;
    }

    public function getHorario_de_ida() {
        return $this->horario_de_ida;
    }

    public function setHorario_de_ida($horario_de_ida) {
        $this->horario_de_ida = $horario_de_ida;
    }

    public function getHorario_de_volta() {
        return $this->horario_de_volta;
    }

    public function setHorario_de_volta($horario_de_volta) {
        $this->horario_de_volta = $horario_de_volta;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

}
?>
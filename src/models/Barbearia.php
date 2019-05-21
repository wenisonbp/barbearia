<?php 
class Barbearia {
    private $id_barbearia;
    private $nome;
    private $id_dono;
    private $endereco;
    private $horario_funcionamento;
    private $cnpj;
    private $informacao;


    public function __construct ($id_barbearia, $nome, $id_dono, $endereco, $horario_funcionamento, $cnpj, $informacao) {
        $this->id_barbearia = $id_barbearia;
        $this->nome = $nome;
        $this->id_dono = $id_dono;
        $this->endereco = $endereco;
        $this->horario_funcionamento = $horario_funcionamento;
        $this->cnpj = $cnpj;
        $this->informacao = $informacao;
    }

    public function getId_barbearia () {
        return $this->id_barbearia;
    }
    public function setId_barbearia ($id_barbearia) {
        $this->id_barbearia = $id_barbearia;
    }

    public function getNome () {
        return $this->nome;
    }
    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function getId_dono () {
        return $this->id_dono;
    }
    public function setId_dono ($id_dono) {
        $this->id_dono = $id_dono;
    }
    public function getEndereco () {
        return $this->endereco;
    }
    public function setEndereco ($endereco) {
        $this->endereco = $endereco;
    }

    public function getHorario_funcionamento () {
        return $this->horario_funcionamento;
    }
    public function setHorario_funcionamento ($horario_funcionamento) {
        $this->horario_funcionamento = $horario_funcionamento;
    }

    public function getCnpj () {
        return $this->cnpj;
    }
    public function setCnpj ($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getInformacao () {
        return $this->informacao;
    }
    public function setInformacao ($informacao) {
        $this->informacao = $informacao;
    }
}
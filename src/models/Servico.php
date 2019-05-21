<?php
class Servico {
    private $id_servico;
    private $id_barbearia;
    private $tipo;
    private $servico;
    private $tempo;

    public function __construct ($id_servico, $id_barbearia, $tipo, $servico, $tempo) {
        $this->id_servico = $id_servico;
        $this->id_barbearia = $id_barbearia;
        $this->tipo = $tipo;
        $this->servico = $servico;
        $this->tempo = $tempo;
    }

    public function getId_servico () {
        return $this->id_servico;
    }
    public function setId_servico ($id_servico) {
        $this->id_servico = $id_servico;
    }

    public function getId_barbearia () {
        return $this->id_barbearia;
    }
    public function setId_barbearia ($id_barbearia) {
        $this->id_barbearia = $id_barbearia;
    }

    public function getTipo () {
        return $this->tipo;
    }
    public function setTipo ($tipo) {
        $this->tipo = $tipo;
    }
    public function getServico () {
        return $this->servico;
    }
    public function setServico ($servico) {
        $this->servico = $servico;
    }

    public function getTempo () {
        return $this->tempo;
    }
    public function setTempo ($tempo) {
        $this->tempo = $tempo;
    }
}
<?php 
class Fila {
    private $id_fila;
    private $id_usuario;
    private $id_barbearia;
    private $id_servico;
    private $atendido;
    private $horario_inicio;
    private $horario_final;


    public function __construct ($id_fila, $id_usuario, $id_barbearia, $id_servico, $atendido, $horario_inicio, $horario_final) {
        $this->id_fila = $id_fila;
        $this->id_usuario = $id_usuario;
        $this->id_barbearia = $id_barbearia;
        $this->id_servico = $id_servico;
        $this->atendido = $atendido;
        $this->horario_inicio = $horario_inicio;
        $this->horario_final = $horario_final;
    }

    public function getId_fila () {
        return $this->id_fila;
    }
    public function setId_fila ($id_fila) {
        $this->id_fila = $id_fila;
    }

    public function getId_usuario () {
        return $this->id_usuario;
    }
    public function setId_usuario ($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getId_barbearia () {
        return $this->id_barbearia;
    }
    public function setId_barbearia ($id_barbearia) {
        $this->id_barbearia = $id_barbearia;
    }
    public function getId_servico () {
        return $this->id_servico;
    }
    public function setId_servico ($id_servico) {
        $this->id_servico = $id_servico;
    }

    public function getAtendido () {
        return $this->atendido;
    }
    public function setAtendido ($atendido) {
        $this->atendido = $atendido;
    }

    public function getHorario_inicio () {
        return $this->horario_inicio;
    }
    public function setHorario_inicio ($horario_inicio) {
        $this->horario_inicio = $horario_inicio;
    }

    public function getHorario_final () {
        return $this->horario_final;
    }
    public function setHorario_final ($horario_final) {
        $this->horario_final = $horario_final;
    }
}
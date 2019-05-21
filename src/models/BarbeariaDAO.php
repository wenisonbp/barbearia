<?php 
include 'Barbearia.php';
include '../Conexao.php';

class BarbeariaDAO {
    private $conexao;

    public function __construct () {
        $this->conexao = new Conexao();
    }

}
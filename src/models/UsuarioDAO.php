<?php
include '../conexao.php';
include 'Usuario.php';

class UsuarioDAO {
private $conexao;

    public function __construct () {
        $this->conexao = new Conexao();
    }

    public function authUsuario ($usuario, $senha) {
        $sql = "SELECT id_usuario, login, senha, permissao FROM usuario "
        . "WHERE login = '$usuario' AND senha = '$senha'";

        $rs = @mysql_query($this-conexao->getCon(), $sql);
        $autenticacao = array();
        while ($dado = $rs->fetch_array()){
           $autenticacao = new Usuario ($dado['id_usuario'], $dado['login'], $dado['senha'],$dado['permissao']);
        }
        return $autenticacao;

    }
}
<?php 
class Usuario {
    private $id;
    private $usuario;
    private $senha;
    private $permissao;

    public function __construct ($id,$usuario, $senha, $permissao){
        $this->id = $id;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->permissao = $permissao;
    }

    public function getId (){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUsuario (){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getSenha (){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getPermissao (){
        return $this->permissao;
    }

    public function setPermissao($permissao){
        $this->permissao = $permissao;
    }
}
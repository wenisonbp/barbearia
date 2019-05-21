<?php 
class Imagem {
    private $id_imagem;
    private $caminho;
    private $id_barbearia;
    private $posicao;

    public function __construct ($id_imagem,$caminho, $id_barbearia, $posicao){
        $this->id_imagem = $id_imagem;
        $this->caminho = $caminho;
        $this->id_barbearia = $id_barbearia;
        $this->posicao = $posicao;
    }

    public function getId_imagem (){
        return $this->id_imagem;
    }

    public function setId_imagem($id_imagem){
        $this->id_imagem = $id_imagem;
    }

    public function getCaminho (){
        return $this->caminho;
    }

    public function setCaminho($caminho){
        $this->caminho = $caminho;
    }

    public function getId_barbearia (){
        return $this->id_barbearia;
    }

    public function setId_barbearia($id_barbearia){
        $this->id_barbearia = $id_barbearia;
    }

    public function getPosicao (){
        return $this->posicao;
    }

    public function setPosicao($posicao){
        $this->posicao = $posicao;
    }

}
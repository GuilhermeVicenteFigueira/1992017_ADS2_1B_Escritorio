<?php

require_once('Item.php');

class Documento extends Item{

    private string $dataCriacao;
    
    public function __construct(string $nome, string $descricao, string $dataCriacao){
    $this->setDataCriacao($dataCriacao);
    parent::__construct($nome, $descricao);
    }

    public function getDataCraiacao(): string{
        return $this-> dataCriacao;
    }

    public function setDataCriacao(string $dataCriacao): void{
        if(empty($dataCriacao)){
            $this-> dataCriacao = "invalido";
        } else {
            $this -> dataCricao = $dataCriacao;
        }
    }
    
}
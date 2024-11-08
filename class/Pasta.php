<?php

require_once ('Item.php');

class Pasta extends Item{

    private string $categotria;
    
    public function __construct(string $nome, string $descricao, string $categotria){
    $this-> setCategoria($categotria);
    parent::__construct($nome,$descricao);
    }

    public function getCategoria(): string{
        return $this-> categoria;
    }

    public function setCategoria(string $categotria): void {
        if (empty($categotria)){
             $this-> categoria = "Nulo";
        } else {
            $this-> categoria = $categotria;
        }
    }
}
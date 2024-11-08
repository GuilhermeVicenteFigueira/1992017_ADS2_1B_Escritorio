<?php

require_once('Item.php');

class Objeto extends Item {
    
    private Float $peso;

    public function __construct(string $nome, string $descricao, Float $peso){
    $this->setPeso($peso);
    parent::__construct($nome,$descricao);
    }

    public function getPeso(): Float{
        return $this-> peso;
    }

    public function setPeso(Float $peso): void {
        if($peso < 0){
             $this-> peso = 0.0;
        } else {
            $this-> peso = $peso;
        }
    }

}
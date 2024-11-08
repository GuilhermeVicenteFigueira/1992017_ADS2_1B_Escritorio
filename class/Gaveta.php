<?php
require_once('Item.php');


class Gaveta{

    private array $itens;

    public function __cosnstruct(){
        $this -> itens = [];
    }

    public function adicionarItem(Item $item): bool{
        if(empty($item)){
            return false;
        } else{
          $this->itens[]=$item;
          return true;
        }
    } 
    
    public function removerItem($nome){
        foreach($this->itens as $index => $item){
            if($item->getNome() == $nome){
                unset($this->itens[$index]);
            }


        }
    }

    function listarItens(): array{
      return $this-> itens;  
    }
}
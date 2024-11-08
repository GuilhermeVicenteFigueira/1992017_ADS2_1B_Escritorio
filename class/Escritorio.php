<?php

require_once('Gaveta.php');
require_once('Armario.php');
require_once('Item.php');

class Escritorio{

    private array $armarios;

    public function __cosntruct(){
        $this-> armarios = [];
    }
    

    public function adicionarArmario(Armario $armario): bool{
        if(empty($armario)){
            return False;
        } else{
            $this->armarios[] = $armario;
            return True;
        }
    }

    public function removerArmario($indice): bool{
        if (isset($this->armarios)){
            unset($this->armarios[$indice]);
            return True;
        } else{
            return False;
        } 
    }

    
    public function listarArmarios(){
       $this-> armarios;
    }

    public function auditoria(){
        foreach( $this-> armarios as $armaioIndex => $armario ){
            echo "Armario {$armaioIndex}<br>";
            $gavetas = $armario -> listarGavetas();
            if (!empty($gavetas)){
                foreach ($gavetas as $gavetaIndex => $gaveta ){
                    echo "Gaveta {$gavetaIndex}<br>";
                    $itens = $gaveta -> listarItens();
                    if (!empty($itens)){
                        foreach($itens as $itemIndex => $item){
                            echo "Item{$itemIndex} - {$item->getNome()} - {$item->getDescricao()}<br>";
                        }
                    } else{
                        "Nehum Item nesta gaveta";
                    }
                } 
            } else {
                "Nenhuma gaveta neste Armario";
            }
        }  
    }

}
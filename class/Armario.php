<?php

require_once ('Gaveta.php');

class Armario{

    private array $gavetas;

    public function __cosntruct(){
        $this-> $gavetas = [];
    }

    public function adicionarGaveta(Gaveta $gaveta): bool{
        if(empty($gaveta)){
            return False;
        } else{
            $this->gavetas[] = $gaveta;
            return True;
        }
    }

    public function removerGaveta($indice): bool{
        if (isset($gaveta)){
            unset($gaveta[$indice]);
        } else{
            return False;
        } 
    }

    public function listarGavetas(): array{
        return $this-> gavetas;
        }
    

}
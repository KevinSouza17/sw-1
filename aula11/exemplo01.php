<?php
class produto{
    private $Nome;
    private $Preco;
    private $Quantidade;

    public function __construct($Nome,$Preco,$Quantidade){
        $this-> Nome = $Nome;
        $this-> Preco = $Preco;
        $this-> Quantidade = $Quantidade;
    }

    
    public function getNome(){
       return $this->Nome;
    }

     public function getPreco(){
       return $this-> Preco ;
    }

     public function getQuantidade(){
       return $this-> $Quantidade ;
    }

}
?> 
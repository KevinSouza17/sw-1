<?php
class Lampada{
    public $Fabricante;
    public $Tensao;
    public $Potencia;
    public $Cor;
    public $Status;


    public function Ligar(){
      $this -> Status = True;
    }
    public function Desligar(){
      $this -> Status = False;
    }
    public function MostrarDados(){
        echo "O fabricante é:" . $this->Fabricante . "<br>";
        echo "A tensao é:" . $this->Tensao . "<br>";
        echo "A pontência é:" . $this->Potencia . "<br>";
        echo "A cor é:" . $this->Cor . "<br>";
        echo "O status é:" . $this->Status . "<br>";
        if ($this->Status == 1){
            echo "O Status é: LIGADA! <br>";
        }else {
            echo "O Status é: DESLIGADA! <br>";
        }
    }
}


?>
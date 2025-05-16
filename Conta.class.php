<?php
class Conta{
    public $Nome;
    public $Cpf;
    public $Saldo;

    public function Sacar($valor){
        if($valor>$this->Saldo){
        return "SALDO INSUFICIENTE";
}else{
    this->$Saldo -= $valor;
    $resultado = $this->

    return $this->$Saldo;
}


        // $this->$Saldo = $this->$Saldo - $valor;
        $this->$Saldo -= $valor;
        return $this->$Saldo;
    }
    public function Depositar($valor){
        // $this->$Saldo = $this->$Saldo + $valor;
        $this->$Saldo += $valor;
        return $this->$Saldo;
        $resultado = "Seu saldo  atual é de R$".$this->Saldo;
        return $resultado;
    }
    public function ConsultarSaldo(){
        echo "NOME: ". $this-> Nome . "<br>";
        echo "CPF: ". $this-> Cpf . "<br>";
        echo "SALDO: ". $this-> Saldo . "<br>";

       
    }


}

?>
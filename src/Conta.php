<?php

class Conta{

    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;


    public function sacar(float $valorSaque){

      if($valorSaque > $this -> saldo){
        echo "Saldo insuficiente!" . PHP_EOL;
      } else {
        $this -> saldo -= $valorSaque;
        echo "Saque efetuado com sucesso! O novo saldo é de R$" . $this -> saldo . "." . PHP_EOL;
      }

    }

    public function depositar(float $valorDeposito)
    {
      if($valorDeposito < 0){
        echo "Depósito inválido!";
      } else {
        $this -> saldo += $valorDeposito;
        echo "Depósito efetuado com sucesso! O novo saldo é de R$" . $this -> saldo . "." . PHP_EOL;
      }
    }



}

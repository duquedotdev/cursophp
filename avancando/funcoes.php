<?php

function sacar (array $conta, float $valorDeSaque): array{
  if($valorDeSaque > $conta['saldo']){
    echo "Saldo insuficiente!" . PHP_EOL;
  } else {
    $conta['saldo'] -= $valorDeSaque;
    echo "Saque efetuado com sucesso! O novo saldo é de R$" . $conta['saldo'] . "." . PHP_EOL;
  }
  return $conta;
}

function depositar ($conta, $valorDeDeposito){
  if($valorDeDeposito < 0){
    echo "Depósito inválido!";
  } else {
    $conta['saldo'] += $valorDeDeposito;
    echo "Depósito efetuado com sucesso! O novo saldo é de R$" . $conta['saldo'] . "." . PHP_EOL;
  }
}


function titularLetrasMaiusculas (array &$conta){
  $conta['titular'] = strtoupper($conta['titular']);
}

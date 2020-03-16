<?php

require 'funcoes.php';

$conta1 = [
  'titular' => 'Felipe',
  'saldo'=> 1000
  ];

  $conta2 = [
    'titular' => 'Luciana',
    'saldo'=> 10000
    ];

    $conta3 = [
      'titular' => 'Sérgio',
      'saldo'=> 300
      ];

$contasCorrentes = [

  33146249804 => $conta1,

  75474581815 => $conta2,

  16214268824 => $conta3

];

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];



foreach ($contasCorrentes as $cpf => $conta) {
  echo PHP_EOL;
  echo $cpf . " " . $conta['titular'];
  echo PHP_EOL;
}

echo PHP_EOL;

sacar($conta2,150);

depositar($conta1,-343.85);

titularLetrasMaiusculas($conta1);

echo $conta1['titular'];

<?php

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

echo PHP_EOL;

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){

  echo $contasCorrentes[$i]['titular'] .PHP_EOL;
  echo PHP_EOL;

}

<?php

require 'Conta.php';

$contaFelipe = new Conta();

$contaFelipe -> cpfTitular = "331.462.498-04";

$contaFelipe -> nomeTitular = "Felipe Duque";

$contaFelipe -> saldo = 200.0;

var_dump($contaFelipe);


$contaSergio = new Conta();

$contaSergio -> cpfTitular = "754.745.818-15";

$contaSergio -> nomeTitular = "Sérgio Duque";

$contaSergio -> saldo = -300.0;

var_dump($contaSergio);

$contaFelipe -> sacar(30.0);

$contaFelipe -> depositar(70.0);

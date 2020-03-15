<?php

$idade = 18;
$numeroDePessoas = 1;

//echo "Você só pode entrar se tiver a partir de 18 anos ou ";
//echo "a partir de 16 anos acompanhado" . PHP_EOL;


$mensagem = ($idade >= 18) || ($idade >= 16 && $numeroDePessoas > 1) ? "Você pode entrar." :  "Você não pode entrar.";

echo $mensagem;

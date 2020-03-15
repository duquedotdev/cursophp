<?php

$contador = 1;
$quantidadeDeAlunos = 15;

//while ($contador <= $quantidadeDeAlunos){
//    echo "". PHP_EOL;
//    $contador ++;
//}

//Sequencia fibonacci

echo  "Sequencia fibonacci na cara da sociedade" . PHP_EOL;

for ($a = 0, $b = 1, $c = 0; $a = $a + $b, $b = $a - $b, $c <= 15 ;  $c++ ) {

    echo "#$a" . PHP_EOL;

}



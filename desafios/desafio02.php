<?php

for($multiplicador = 1; $multiplicador <=10; $multiplicador++){

    echo "Taboada do $multiplicador" . PHP_EOL;

    for($numero = 1; $numero <= 10; $numero++){

        echo "$multiplicador x $numero = " . $multiplicador * $numero . PHP_EOL;

    }

}


<?php

$peso = 131;

$altura = 1.85;

$imc = $peso / ($altura ** 2);


echo "Seu IMC é de $imc. Você está com o IMC";

if (18) {
    echo "abaixo";

}elseif ($imc < 25) {
    echo "dentro";

}else {
    echo "acima";
}

echo "do recomendado";
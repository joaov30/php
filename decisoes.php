<?php

$idade = 22;

$nome = 'Joao';

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18 && $nome = 'Joao'){
    echo "Você tem $idade anos". PHP_EOL;
    echo 'Pode entrar';
}else{
    echo "Você é menor de idade. Entrada proibida"
    . PHP_EOL;
    echo "apenas pessoas com $idade ou mais pode entrar"
    . PHP_EOL;
    echo "Entrada exclusiva para pessoas com o nome de $nome"
    . PHP_EOL;
}
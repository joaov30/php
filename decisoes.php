<?php

$idade = 18;


$acompanhado = 1;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos". PHP_EOL;
    echo 'Pode entrar';
}
elseif($idade < 18 and $acompanhado == 1){
    echo "Você é menor de idade, porem esta acompanhado". PHP_EOL;
    echo "Pode entrar";
}else{
    echo "Você é menor de idade. Entrada proibida"
    . PHP_EOL;
    echo "apenas pessoas com acompanhante ou maior de 18 anos pode entrar"
    . PHP_EOL;
    
}
echo "". PHP_EOL;
echo "Adeus!";